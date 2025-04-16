<style type="text/css">
	.input-file-row-1:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.input-file-row-1{
    display: inline-block;
	margin-top: 25px;
	position: relative;
}

#preview_image {
  display: none;
  width: 90px;
  height: 90px;
  margin: 2px 0px 0px 5px;
  border-radius: 10px;
}

.upload-file-container { 
	position: relative; 
	width: 100px; 
	height: 137px; 
	overflow: hidden;	
	background: url(http://i.imgur.com/AeUEdJb.png) top center no-repeat;
	float: left;
	margin-left: 23px;
} 

.upload-file-container-text{
	font-family: Arial, sans-serif;
	font-size: 12px;
	color: #719d2b;
	line-height: 17px;
	text-align: center;
	display: block;
	position: absolute; 
	left: 0; 
	bottom: 0; 
	width: 100px; 
	height: 35px;
}

.upload-file-container-text > span{
	border-bottom: 1px solid #719d2b;
	cursor: pointer;
}

.one_opacity_0 {
  opacity: 0;
  height: 0;
  width: 1px;
  float: left;
}
</style>

<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

include "connect.php" ;

   $editid = $_REQUEST['id'];

   $title = ($editid)?"Edit Form":"Add Form";
   $message = ($editid)?"Updated Successfully":"Inserted Successfully";

   $select = mysqli_query($connect,"select * from parish_priest where 
   	id='$editid'");

   $fetch = mysqli_fetch_assoc($select);
   $oldImage = $fetch['image'];

  

   	if(isset($_POST["update"]))
	{				
		extract($_POST);
		
		$image = $oldImage;
		if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) 
		{
			 $filename = $_FILES["image"]["name"];
			 $tempname = $_FILES["image"]["tmp_name"];     
        	 $folder = "parish_priestes/".$filename;
			
	 		if (move_uploaded_file($tempname, $folder))
	 		{ 
	            $image = $filename; 
	        }
	        $image = $filename; 
		}
		
		

		if($editid)
		{		
			$to_date =($to_date)?$to_date:date("Y-m-d");
			$query = mysqli_query($connect,"update parish_priest set name='$name',dob='$dob',order_date='$order_date',contact_no='$contact_no',from_date='$from_date',to_date='$to_date',address='$address',designation ='$designation',image='$image' where id ='$editid' ");
		}
		else
		{
			$query = mysqli_query($connect,"insert into parish_priest(
			name,dob,designation,order_date,contact_no,address,from_date,to_date,transfer_in,removeable_status,image)values('$name','$dob','$designation','$order_date','$contact_no','$address','$from_date','$to_date','1','1','$image')");


		}
	

	   if($query)
		{   
			$_SESSION['success'] = $message;
			header('location:parish_priest_list.php');
			exit();
		}
		else
		{		
			$_SESSION['failier'] ="went Wrong!";	
			header('location:parish_priest_list.php');
		}				
	}  
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header"><?php echo $title?></h2>
		</div>
	</div>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" name="priest_edit" method="post" enctype='multipart/form-data'>
		<fieldset>
			<div class="col-md-4">
				<div class="form-group">
					<label>Name</label>
					<div class="form-group">
					

					  <input type="text" name="name"  placeholder="Enter name" class="form-control" required="true" value="<?php echo $fetch['name'];?>">
				</div> 
				<div class="form-group">
					<label>Date Of Birth</label>
					<input type="date" name="dob"  placeholder="Date Of Birth" class="form-control" value="<?php echo $fetch['dob'];?>" required="required">
				</div>
				<div class="form-group">
					<label>Order Date</label>
					  <input type="date" name="order_date" required="required" placeholder="Enter Order Date" class="form-control"  value=<?php echo $fetch['order_date'];?> >
				</div> 				 
				<div class="form-group">
					<label>Mobile No</label>
					<input type="text" name="contact_no"  placeholder="Enter Mobile No"  class="form-control" value="<?php echo $fetch['contact_no'];?>" maxlength="10">
				</div>
				<div class="form-group">
					<label>From</label>
					<input type="date" name="from_date"  placeholder="Enter Started date" required="true" class="form-control" value="<?php echo $fetch['from_date'];?>" maxlength="10">
				</div>
				<div class="form-group" <?php if(!$editid){echo 'style ="display:none":""';}?> >
					<label>To</label>
					<input type="date" name="to_date"  placeholder="Enter To Date" class="form-control" value="<?php echo $fetch['to_date'];?>"  maxlength="10">
				</div>				

				<div class="form-group">
					<label>Address</label>
					  <textarea name="address" placeholder="Enter your address" class="form-control"><?php echo $fetch['address'];?></textarea>
				</div>	

			
				<div class="form-group">
  					<input class="form-check-input" name="designation" required="required" type="radio" value="1"
  					 <?php echo ($fetch['designation']==1 ? 'checked' : '');?>>
  					<label class="form-check-label"> Parish Priest </label>&nbsp;&nbsp;&nbsp;
  					<input class="form-check-input" name="designation" required="required" type="radio" value="2"
  					 <?php echo ($fetch['designation']==2 ? 'checked' : '');?>>
  					<label class="form-check-label" > Asst Parish Priest 
  					</label>
				</div>		

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="update" >Update <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			 <div class="input-file-row-1">
	        <div class="upload-file-container">
                <img id="preview_image" src="#" alt="" />
			    <div class="upload-file-container-text">
                    <div class = 'one_opacity_0'>
                        <input type="file" id="patient_pic" label = "add" name = 'image'/>
                    </div>
                    <span> Add Photo </span>
				</div>
			</div>
        </div>
		</div>	
		<?php
		$imagePath = "parish_priestes/";
	
		$imageName = ($fetch['image'])?$fetch['image']:"no_image.png";
		$imageName = $imagePath.$imageName;
		
		?>

			<div class="col-md-4">
				<div id="previewedit">
					<div class="">
    <img src="<?php echo $imageName ?>" class="img-thumbnail"  style="height:200px; width:200px;" /><br>
    <?php if($fetch['image']) { ?>
    <a href="<?php echo $imageName ?>" download> Download </a>	
    <button type="button" class="btn btn-link remove_image" imageName="<?php echo $imageName ?>">Remove</button>
    <?php } ?>
   </div>
				</div>
			</div>
		</fieldset>
	
		<!-- <fieldset>
			<div class="col-md-6">

				<div class="form-group">
					<label>Name</label>
					  <input type="text" name="name"  placeholder="Enter name" class="form-control" required="true" value=<?php echo $fetch['name'];?>>
				</div> 
 -->
				<!-- <div class="form-group">
					<label>Designation</label>
					  <input type="text" name="designation" placeholder="Your Designation" class="form-control"  >
				</div> 

				<div class="form-group">
					<label>Address</label>
					  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
				</div>	-->
<!-- 
				<div class="form-group">
					<label>From Year</label>
					<input type="text" name="from_year"  placeholder="From Year" required="" class="form-control" value="<?php echo $fetch['from_year'];?>">
				</div>

				<div class="form-group">
					<label>To Year</label>
					<input type="text" name="to_year" placeholder="To Year" required="" class="form-control" value="<?php echo $fetch['to_year'];?>">
				</div>
				<div class="form-group">
  					<input class="form-check-input" name="status" type="checkbox" value="1"
  					 <?php echo ($fetch['status']==1 ? 'checked' : '');?>>
  					<label class="form-check-label" for="flexCheckChecked"> Show Client Side
    				 
  					</label>
				</div> -->

				<!-- <div class="form-group">
					<label>Contact-No</label>
					  <input type="text" name="contact-no" placeholder="Your Number" class="form-control"  >
				</div> --> 
<!-- 
				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="update" >Update <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>

		</fieldset> -->
	</form>	
</div>
<script type="text/javascript" src="assets/js/image-operations.js"></script>
<script type="text/javascript">

	$(document).ready(function () 
	{
	

		
    
    $("#patient_pic").on("change",function(){    	
        readURL(this, "#preview_image")
    });


 	$(document).on('click', '.remove_image', function(){
 		var id = '<?php echo$editid; ?>';
  		var name = $(this).attr('imageName');
  
  $.ajax({
   url:"image_upload.php",
   method:"POST",
   data:{
   	id:id,
   	name:name
   },
   success:function(data)
   {
   	console.log("well done dhana");
    window.location.reload('true');
   }
  })
 });

     
     $('#example1').datepicker({
        minViewMode: 'years',
        autoclose: true,
        format: 'yyyy'
     });  

      $('#example2').datepicker({
          minViewMode: 'years',
          autoclose: true,
          format: 'yyyy'
      });  
            
    });	
     $(document).on('click', 'input[type="radio"]', function() {      
    $('input[type="radio"]').not(this).prop('checked', false);      
});
</script>

<?php include BASE_PATH.'/includes/footer.php'; ?>
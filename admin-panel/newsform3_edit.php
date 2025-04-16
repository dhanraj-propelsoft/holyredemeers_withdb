<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

error_reporting(0);
include "connect.php" ;
 
$editID = $_REQUEST['id'];
	$select = mysqli_query($connect,"select * from news_three where id='$editID'");

	$fetch = mysqli_fetch_assoc($select);

	if(isset($_POST['submit']))
	{				
		extract($_POST);
			if ($editID) 
			{			
				$query1 = mysqli_query($connect,"update news_three set status='0'") or die(mysqli_error($connect));
				$query = mysqli_query($connect,"update news_three set title_three='$title_three',date_three='$date_three', description_three='$description_three',last_updated_at='$updated_at',status='1' where id ='$editID'") or die(mysqli_error($connect));
			}else
			{
				$query1 = mysqli_query($connect,"update news_three set status='0'") or die(mysqli_error($connect));
				 $query = mysqli_query($connect,"insert into news_three(title_three,date_three,description_three,last_updated_at,status)values('$title_three','$date_three','$description_three','$updated_at','1')")or die(mysqli_error($connect));
			}
	
		if($query)
		{
			$_SESSION['info']= 'content updated successfully...!!';
			header('location:newsform3.php');
			exit();
		}	
		else{

			$_SESSION['failure']= 'content updated Failure...!!';
			header('location:newsform3.php');
			exit();
		}	
			
	}
   
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Update News & Events 3</h2>
	</div>
</div>
	<br>
	<!-- Flash messages -->
<?php include BASE_PATH.'/includes/flash_messages.php'; ?>


<form class="form" action="" name="news3" method="post"  enctype="">
	<fieldset>

			<div class="col-md-5">

				<div class="form-group">
					<label for="title">Title</label>
					  <input type="text" name="title_three" placeholder="title" class="form-control" required="required" value="<?php echo $fetch['title_three'];?>" >
				</div> 

				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date_three"  placeholder="mm/dd/yyyy" class="form-control" required="required" value=<?php echo $fetch['date_three'];?>>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					  <textarea name="description_three" placeholder="description" class="form-control"><?php echo $fetch['description_three'];?></textarea>
				</div>

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Submit <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">				
				  
				   <h3 align="center">File Upload</h3>
				   				   
				   <div action="upload_three.php" class="dropzone" id="dropzoneFromtwoedit">
				   </div><br>				  
				   				   
				   <div align="center">
				    <button type="button" class="btn btn-info" id="editnewsubmit-all" onclick="window.location.reload('true');"> Upload</button>
				   </div>

				</div>				  
			</div>

			<div class="col-md-4">
				<div id="previewtwoedit"></div>
			</div>

	</fieldset>
</form>

<script type="text/javascript">

$(document).ready(function(){
 
 Dropzone.options.dropzoneFromtwoedit = {

    autoProcessQueue: false,
      //autoDiscover: false,                   
    //parallelUploads: 5,
    maxFiles: 1,
    
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",

  init: function(){
   var submitButton = document.querySelector('#editnewsubmit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){

    myDropzone.processQueue();
   });

   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
    }
    list_image();
   });

  },
 };

 list_image();

 function list_image()
 {
  $.ajax({
   url:"upload_three.php",
   success:function(data){
    $('#previewtwoedit').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"upload_three.php",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
    list_image();
   }
  })
 });
 
});
</script>

<?php include BASE_PATH.'/includes/footer.php'; ?>
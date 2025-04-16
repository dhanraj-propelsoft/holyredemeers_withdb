<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';
error_reporting(0);

include "connect.php" ;
$editID = $_REQUEST['id'];

$updated_at = date('Y-m-d H:i:s');
$select = mysqli_query($connect,"select * from news_one where id='$editID'");
$fetch = mysqli_fetch_assoc($select);

  	if(isset($_POST['submit']))
	{			
		extract($_POST);

			if ($editID) 
			{			
				$query1 = mysqli_query($connect,"update news_one set status='0'") or die(mysqli_error($connect));

				$query = mysqli_query($connect,"update news_one set title_one='$title_one',date_one='$date_one', description_one='$description_one',last_updated_at='$updated_at',status='1' where id ='$editID'") or die(mysqli_error($connect));
			}else
			{
				$query1 = mysqli_query($connect,"update news_one set status='0'") or die(mysqli_error($connect));

				 $query = mysqli_query($connect,"insert into news_one(title_one,date_one,description_one,last_updated_at,status)values('$title_one','$date_one','$description_one','$updated_at','1')")or die(mysqli_error($connect));

			}
	

		if($query)
		{
			$_SESSION['info']= 'content updated successfully...!!';
			header('location:newsform1.php');
			exit();
		}	
		else{

			$_SESSION['failure']= 'content updated Failure...!!';
			header('location:newsform1.php');
			exit();
		}						
	}
   
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Update News & Events</h2>
		</div>
	</div>
	<br>
	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" action="" name="news1" method="post" enctype="">
		<fieldset>
					
			<div class="col-md-5">

				<div class="form-group">
					<label for="title">Title</label>
					  <input type="text" name="title_one" placeholder="title" class="form-control" required="required" value= "<?php echo $fetch['title_one'];?>" >
				</div> 

				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date_one"  placeholder="mm/dd/yyyy" class="form-control" required="required" value=<?php echo $fetch['date_one'];?> >
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					  <textarea name="description_one" placeholder="description" class="form-control" ><?php echo $fetch['description_one'];?></textarea>
				</div>

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Update <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">				
				  
				   <h3 align="center">File Upload</h3>
				   				   
				  <div action="upload.php" class="dropzone" id="dropzoneFromedit">
				   </div> <br>				  
				   				   
				   <div align="center">
				    <button type="button" class="btn btn-info" id="editsubmit-all" onclick="window.location.reload('true');">Upload</button>
				   </div>
				</div>
				  
			</div>

			<div class="col-md-4">
				<div id="previewedit"></div>
			</div>

		</fieldset>				
	</form>
</div>

<script type="text/javascript">

$(document).ready(function(){
 
 Dropzone.options.dropzoneFromedit = {

    autoProcessQueue: false,
      //autoDiscover: false,                   
    //parallelUploads: 5,
    maxFiles: 1,
    
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",

  init: function(){
   var submitButton = document.querySelector('#editsubmit-all');
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
   url:"upload.php",
   success:function(data){
    $('#previewedit').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"upload.php",
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
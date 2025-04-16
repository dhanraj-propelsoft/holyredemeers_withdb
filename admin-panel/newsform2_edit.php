<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

error_reporting(0);
include "connect.php" ;
$editid = $_REQUEST['id'];
$message = ($editid)?"Updated Successfully...!!!":"Inserted Successfully...!!!";
$select = mysqli_query($connect,"select * from news_two where id='$editid'");

  $fetch = mysqli_fetch_assoc($select);
$updated_at = date('Y-m-d H:i:s');
  	if(isset($_POST['submit']))
	{	
		extract($_POST);

		if($editid)
		{
			$query1 = mysqli_query($connect,"update news_two set status='0'") or die(mysqli_error($connect));

			$query = mysqli_query($connect,"update news_two set title_two='$title_two',date_two='$date_two',description_two='$description_two',status='1',last_updated_at='$updated_at' where id ='$editid'");
		}else
		{
			$query1 = mysqli_query($connect,"update news_two set status='0'") or die(mysqli_error($connect));

			 $query = mysqli_query($connect,"insert into news_two(title_two,date_two,description_two,last_updated_at,status)values('$title_two','$date_two','$description_two','$updated_at','1')")or die(mysqli_error($connect));
		}

		if($query)
		{
			$_SESSION['info']= $message;
			header('location:newsform2.php');
			exit();
		}
		else{

			$_SESSION['failure']= 'content updated Failure...!!';
			header('location:newsform2.php');
			exit();
		}						
	}
   
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Update News & Events 2</h2>
	</div>
</div>
<br>

	<!-- Flash messages -->
<?php include BASE_PATH.'/includes/flash_messages.php'; ?>


<form class="form" action="" name="news2" method="post">
	<fieldset>
		
			<div class="col-md-5">

				<div class="form-group">
					<label for="title">Title</label>
					  <input type="text" name="title_two" placeholder="title" class="form-control" required="required" value="<?php echo $fetch['title_two'];?>" >
				</div> 

				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date_two"  placeholder="mm/dd/yyyy" class="form-control" required="required" value=<?php echo $fetch['date_two'];?> >
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					  <textarea name="description_two" placeholder="description" class="form-control"><?php echo $fetch['description_two'];?></textarea>
				</div>

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Submit <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">				
				  
				   <h3 align="center">File Upload</h3>
				   				   
				   <div action="upload_two.php" class="dropzone" id="dropzoneFromoneedit">

				   </div><br>				  
				   
				   
				   <div align="center">
				    <button type="button" class="btn btn-info" id="editnewssubmit-all" onclick="window.location.reload('true');"> Upload</button>
				   </div>
				</div>
				  
			</div>

			<div class="col-md-4">
				<div id="previewoneedit"></div>
			</div>

	</fieldset>
</form>

<script type="text/javascript">

$(document).ready(function(){
 
 Dropzone.options.dropzoneFromoneedit = {

    autoProcessQueue: false,
      //autoDiscover: false,                   
    //parallelUploads: 5,
    maxFiles: 1,
    
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",

  init: function(){
   var submitButton = document.querySelector('#editnewssubmit-all');
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
   url:"upload_two.php",
   success:function(data){
    $('#previewoneedit').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"upload_two.php",
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
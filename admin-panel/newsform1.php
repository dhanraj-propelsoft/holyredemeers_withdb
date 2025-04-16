<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

error_reporting(0);

include "connect.php";

   $select = mysqli_query($connect,"select * from news_one where status=1");
   $select2 = mysqli_query($connect,"select * from news_one where status=0");

      
?>



<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">News & Event 1 </h2>
		</div>
	</div>
  <br>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" action="newsform1_edit.php" method="post"  enctype="">
		<fieldset>
    
			<div class="col-md-5">

				<div class="form-group">
					<label for="title">Title</label>
					  <input type="text" name="title_one" placeholder="title" class="form-control" required="true" >
				</div> 

				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date_one"  placeholder="mm/dd/yyyy" class="form-control" >
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					  <textarea name="description_one" placeholder="description" class="form-control" ></textarea>
				</div>

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Submit <i class="glyphicon glyphicon-send"></i></button>
				</div>

			</div>

			<div class="col-md-3">
				<div class="form-group">				
				  
				   <h3 align="center">File Upload</h3>
				   				   
				  <div action="upload.php" class="dropzone" id="dropzoneFrom">
				   </div><br>				 				   
				   
				   <div align="center">
				    <button type="button" class="btn btn-info" id="submit-all" 
             onclick="window.location.reload('true');">Upload</button>
				   </div>
				</div>
				  
			</div>

			<div class="col-md-4">
				<div id="preview"></div>
			</div>

		</fieldset>		
		
	</form>	
  <br>
  <br>
   <h3>Current News And Events</h3>
	
	 <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
               
                <th width="20%">Title</th>               
                <th width="10%">Date</th>  
                <th width="45%">Description</th>  
                <th width="10%">Action</th>             
            </tr>
        </thead>

        <tbody>

            <?php
            while($fetch = mysqli_fetch_assoc($select))
        {
            ?> 
            
            <tr>
                
                <td><?php echo $fetch['title_one'];?></td>
                <td><?php echo $fetch['date_one'];?></td>
                <td><?php echo $fetch['description_one'];?></td>


                <td>
                  <a href="newsform1_edit.php?id=<?php echo 
                    $fetch['id'];?>" class="btn btn-primary" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                  </a>
                    
                  <a href="#" class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $fetch['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                </td>

            </tr>
            
                <!-- Delete Confirmation Modal -->
                 <div class="modal fade" id="confirm-delete-<?php echo $fetch['id']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="newsform1_delete.php" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: orange">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" >Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
                                <p>By Deleting the content the News And Event Will Be Shown Blank. Do you want to Continue?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success pull-left">Yes</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- //Delete Confirmation Modal -->      
             <?php }?> 

        </tbody>    
    </table>    
    <h3>Old News And Events</h3>

  
   <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
              
                <th width="20%">Title</th>               
                <th width="10%">Date</th>  
                <th width="45%">Description</th>  
                <th width="10%">Action</th>             
            </tr>
        </thead>

        <tbody>

            <?php
            while($fetch1 = mysqli_fetch_assoc($select2))
        {
            ?> 
            
            <tr>
               
                <td><?php echo $fetch1['title_one'];?></td>
                <td><?php echo $fetch1['date_one'];?></td>
                <td><?php echo $fetch1['description_one'];?></td>


                <td>

               <!--    <a href="newsform1_edit.php?id=<?php echo 
                    $fetch1['id'];?>" class="btn btn-primary" data-toggle="tooltip" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i></a>
               -->
                 <a href="#" class="btn btn-warning delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $fetch1['id']; ?>"><i class="glyphicon glyphicon-share"></i></a>
                </td>

            </tr>
            
                <!-- Delete Confirmation Modal -->
                 <div class="modal fade" id="confirm-delete-<?php echo $fetch1['id']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="newsform1_edit.php?id=<?php echo 
                    $fetch1['id'];?>" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: orange">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" >Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $fetch1['id']; ?>">
                                <p>To show this content on the News and Events you have to confirm by pressing the submit Button. Also you can edit the content. Do you want to Continue?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success pull-left">Yes</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
              
              
            <!-- //Delete Confirmation Modal -->      
             <?php }?> 

        </tbody>    
    </table>  
</div>
<script type="text/javascript" src="assets/js/image-operation.js"></script>
<script type="text/javascript">

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {

    autoProcessQueue: false,
      //autoDiscover: false,                   
    //parallelUploads: 5,
    maxFiles: 1,
    
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",

  init: function(){
   var submitButton = document.querySelector('#submit-all');
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
    $('#preview').html(data);
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

<script>

    setTimeout(function() 
    {
        $('.alert-success').fadeOut('slow');
    }, 3000);

   setTimeout(function() 
    {
        $('.alert-info').fadeOut('slow');
    }, 3000);

   setTimeout(function() 
    {
        $('.alert-danger').fadeOut('slow');
    }, 3000);
    
</script>
 

<?php include BASE_PATH.'/includes/footer.php'; ?>
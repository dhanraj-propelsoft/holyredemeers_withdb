
<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php'; 
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

  <div id="page-wrapper">

    <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Gallery</h2>
    </div>
  </div>

  <div class="">
     <h3 align="center">File Upload</h3>
     <br />
    <!--  <p> Note : You can upload only 100 images </p> -->
   
   <form action="galupload.php" class="dropzone" id="dropzoneFrom">



   </form>
  
   <br />
   <div align="center">
      <button type="button" class="btn btn-info upload_btn" id="submit-all" onclick="window.location.reload('true');">Upload</button>
   </div>
   <br />
   <br />
      <div id="preview"></div>
   <br />
   <br />
  </div>

</div>

<script>

$(document).ready(function(){


 $('.upload_btn').on('click', function () {

    Dropzone.options.dropzoneFrom = {

    autoProcessQueue: true,
      //autoDiscover: false,                   
    parallelUploads: 100,
    maxFiles: 100,
    
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
   
 });
 

 list_image();


 function list_image()
 {
  $.ajax({
   url:"galupload.php",
   success:function(data){
   $('#preview').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"galupload.php",
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
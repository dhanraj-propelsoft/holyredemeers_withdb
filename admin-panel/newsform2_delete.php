<?php
session_start();
require_once 'config/config.php';
include ('/includes/flash_messages.php');

   include("connect.php");
   $id = $_REQUEST['del_id'];

   //$delete = mysqli_query($connect,"delete from news_one where id='$deleteid'");
  $query = mysqli_query($connect,"update news_two set status='0' where id ='$id' ");
            

   if($query)
   {
      $_SESSION['failure']= 'row deleted successfully...!!';
   	  header('location:newsform2.php');
        exit();
   }
   else
   {
   	 header('location:newsform2.php');
   }
  
?>
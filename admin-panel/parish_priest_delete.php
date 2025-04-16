<?php
session_start();
require_once 'config/config.php';

 //include ('/includes/flash_messages.php');
 include("connect.php");

   $id = $_REQUEST['del_id'];
   $todate = $_REQUEST['toDate'];
   print_r($todate);
   exit();


   $query = mysqli_query($connect,"update parish_priest set removeable_status='0' and where id ='$id' ");
  

   //$delete = mysqli_query($connect,"delete from parish_priest where id='$deleteid'");

   if($query)
   {
      $_SESSION['success'] = 'record deleted successfully..!';
        header('location:parish_priest_list.php');
        exit();
   }
   else
   {
       header('location:parish_priest_list.php');
   }
  

?>


<?php
session_start();
require_once 'config/config.php';

 include ('/includes/flash_messages.php');
   include("connect.php");
   $deleteid = $_REQUEST['del_id'];

   $delete = mysqli_query($connect,"delete from parish_finance where id='$deleteid'");

   if($delete)
   {  $_SESSION['failure'] = 'record deleted successfully..!';
   	  header('location:parish_finance_list.php');
        exit();
   }
   else
   {
   	 header('location:parish_finance_list.php');
   }
  
?>
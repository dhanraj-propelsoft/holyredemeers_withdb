<?php
session_start();
require_once 'config/config.php';

   include("connect.php");
   $id = $_REQUEST['id'];
   $toDate = $_REQUEST['toDate'];
 

   //$delete = mysqli_query($connect,"delete from news_one where id='$deleteid'");

   $query = mysqli_query($connect,"update parish_priest set to_date='$toDate',transfer_in='0' where id ='$id' ");


            
   if($query)
   {
      $_SESSION['success']= 'Successfully Added In Transfered Status...!!';
   	header('location:parish_priest_list.php');
      exit();
   }
   else
   {
   	header('location:parish_priest_list.php');
   }
  
?>
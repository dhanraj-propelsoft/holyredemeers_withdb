<?php
session_start();
require_once 'config/config.php';

   include("connect.php");
   $id = $_REQUEST['id'];
 
   //$delete = mysqli_query($connect,"delete from news_one where id='$deleteid'");

   $query = mysqli_query($connect,"update news_one set status='1' where id ='$id' ");


            
   if($query)
   {
      $_SESSION['success']= 'Successfully Added Recent News And Event...!!';
   	header('location:newsform1.php');
      exit();
   }
   else
   {
   	header('location:newsform1.php');
   }
  
?>
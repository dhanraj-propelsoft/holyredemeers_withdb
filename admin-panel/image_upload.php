<?php
	
session_start();
require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';
include "connect.php" ;

  if(isset($_POST["id"])&&isset($_POST["name"]))
  {
   $filename = $_POST["name"];
   $id = $_POST["id"];
   if(unlink($filename))
   {
   		$query = mysqli_query($connect,"update parish_priest set image='' where id ='$id'");
   }
  }

  $result = array();

$output = '<div class="" >';

$output .= '</div>';

echo $output;
?>


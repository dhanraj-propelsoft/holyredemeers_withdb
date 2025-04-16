<?php
$folder_name = 'uploads_two/';

//print_r($folder_name);

$files = array_slice(scandir('uploads_two/'), 2);

	if(!empty($_FILES))
	{

	 $temp_file = $_FILES['file']['tmp_name'];
	 $location = $folder_name . 'news-two.jpg';
   //$im=imagecrop('news-one.jpg',['width'=>300,'height'=>300]);
	 move_uploaded_file($temp_file, $location);
	}

if(isset($_POST["name"]))
{
 $filename = $folder_name.$_POST["name"];
 unlink($filename);
}

$result = array();
//print_r($files);

$output = '<div class="" >';

if(false !== $files)
{
 foreach($files as $file)
 {
  if('.' !=  $file && '..' != $file)
  {
   $output .= '
   <div class="">
    <img src="'.$folder_name.$file.'" class="img-thumbnail" style="height:200px; width:200px;"/> <br>
    <a href="'.$folder_name.$file.'" download> Download </a>
    <button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button>
   </div>
   ';
  }
 }
}
$output .= '</div>';

echo $output;

?>


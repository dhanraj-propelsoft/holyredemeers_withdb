
<?php
$folder_name = 'uploads_three/';

//print_r($folder_name);

$files = array_slice(scandir('uploads_three/'), 2);

	if(!empty($_FILES))
	{

	 $temp_file = $_FILES['file']['tmp_name'];
	 $location = $folder_name . 'news-three.jpg';
   //$im=imagecrop('news-one.jpg',['width'=>300,'height'=>300]);
	 move_uploaded_file($temp_file, $location);

   /*list($width,$height)=getimagesize($temp_file);
    $newwidth=240;
    $newheight=300;
    $tmp=imagecreatetruecolor($newwidth,$newheight);*/
    //print_r($tmp);
    //exit;

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
    <img src="'.$folder_name.$file.'" class="img-thumbnail"  style="height:200px; width:200px;"/><br>
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


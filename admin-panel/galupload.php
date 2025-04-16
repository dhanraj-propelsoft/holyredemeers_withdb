<?php
$folder_name = 'galuploads/';

$files = array_slice(scandir('galuploads/'), 2);

$count = count($files);

if($count < 101){

	if(!empty($_FILES))
	{

		$location = $folder_name . $_FILES['file']['name'];

	    $temp_file = compressedImage($_FILES['file']['tmp_name'],$location,20);

		move_uploaded_file($temp_file, $location);   
	}
}
else
{
	echo " image limit exceeds"; 

}

if(isset($_POST["name"]))
{
 $filename = $folder_name.$_POST["name"];
 unlink($filename);
}

$result = array();

$output = '<div class="row">';

if(false !== $files)
{
 foreach($files as $file)
 {
  if('.' !=  $file && '..' != $file)
  {
   $output .= '
   <div class="col-md-2">
    <img src="'.$folder_name.$file.'" class="img-thumbnail" width="350" style="height:175px;" />
    <a href='.$folder_name.$file.' download> Download </a>
    <button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button>
   </div>
   ';
  }
 }
}
$output .= '</div>';

echo $output;

 function compressedImage($source, $path, $quality) {

            $info = getimagesize($source);

            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);

            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);

            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);

            imagejpeg($image, $path, $quality);



    }

?>

<script type="text/javascript">
	

</script>


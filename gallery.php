<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Holy Redeemer’s Basilica</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Holy Redeemer's Church" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" href="css/lightbox.css">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		
</head>

<body>
	<!-- header -->

	<?php include('header.php') ?>

	<!-- <div class="header-1">		

	</div> -->


	<!-- //header -->
		<!-- gallery -->
			
	

	<div  id="lab" class="w3ls-section gallery">
		<div class="container">

			<h3 class="heading-agileinfo">Gallery</h3>
		
			<div class="gallery-grids">

			<?php
				//Path to folder which contains images
				$dirname = "admin-panel/galuploads/";

				$images = glob($dirname."*");
				
				foreach($images as $image)
				{
				
				  echo ' 
					<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo" > 
						<a href="'.$image.'"  class="example-image-link"
						data-lightbox="example-set"  >
							<img src="'.$image.'" style="width:350px; height:250px;" alt="" >				
							<div class="figcaption">
								<p></p>
							</div>	
						</a> 
					</div>				
					</div>';
				}

			?>		
			</div>

			<script src="js/lightbox-plus-jquery.min.js"> </script>	
			
		</div>
	</div>
	<!-- //gallery -->


	


	

	<!-- footer -->

	<?php include('footer.php') ?>
	
	<!-- //footer -->

		
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
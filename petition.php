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

	<link href="css/bootstrap-datepicker.css" rel="stylesheet">

	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	
		
</head>

<body>
	<!-- header -->
	<?php include('header.php'); ?>

	<!-- <div class="petition-header">	
	</div> -->

	
	<!-- //header -->
		<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">

			<h3 class="heading-agileinfo">Your Petition / Thanks Giving</h3>

			<div class="inner_sec_grids_info_w3ls">

				
				<div class="w3layouts_mail_grid">


					<form action="petition.php" method="post">

						<div class="col-md-6 wthree_contact_left_grid">

							<div class="form-group">
							<select name="petition" class="form-control" required="">
								<option value=""> Choose Type </option >
								<option value="Petition"> Petition</option ><option value="Thanks-Giving">Thanks/Suggestion</option></select> 
							</div>

							<!-- <input type="text" name=fyear placeholder="Name" required="" class="form-control" id="example1"> -->

							<input type="text" name="name" placeholder="Name" required="" >


							<input type="email" name="email" placeholder="Email" required="">

							<input type="text" name="mobile_no" placeholder="Telephone" required="" numbers>

							<!-- <input type="text" name="Subject" placeholder="Subject" required=""> -->
						</div>

						<div class="col-md-6 wthree_contact_left_grid">
							<textarea name="message" placeholder="Message..." required=""></textarea>
							<input type="submit" value="Submit" name="send">
						</div>
						<div class="clearfix"> </div>

					</form>
				</div>


			</div>

		</div>
	</div>



<?php if (isset($_POST['send']))
{	
	$petition=$_POST['petition'];			
	$name=$_POST['name'];
	$email=$_POST['email'];  
	$mobile=$_POST['mobile_no'];
	$message=$_POST['message'];
	$to =  "info@holyredeemersbasilica.com"; 

	$subject ="People Petition/Thanks-Giving";
	$headers ="From: HolyRedeemersBasilica\r\n"; 
	$headers.= "MIME-Version: 1.0\r\n"; 
	$headers.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$headers.= "X-Priority: 1\r\n";  


	$message ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01  
	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
	<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
	 <head>
	<title>' . $subject . '</title> 

	</head> 
	<body>
	<div style="float:left; width:800px; min-height:150px;">
	<div class="mail_heading" style="float:left; width:800px;
	font-size:26px;
	color:#FFFFFF;
	background:#0099FF;
	text-align:left;
	padding:5px 0 5px 10px;">People Details</div>

	<div class="personal" style="width:300px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; ">Letter Type:</div>
	<div class="personal" style="width:470px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; margin-left:10px;">'.$petition.'</div>

	<div class="personal" style="width:300px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; ">Name:</div>
	<div class="personal" style="width:470px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; margin-left:10px;">'.$name.'</div>



	<div class="personal" style="width:300px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px;">Email :</div>
	<div class="personal" style="width:470px;  float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; margin-left:10px;">'.$email.'</div>


	<div class="personal" style="width:300px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px;">mobile :</div>
	<div class="personal" style="width:470px;  float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px; margin-left:10px;">'.$mobile.'</div>


	<div class="personal" style="width:300px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px;">Message :</div>
	<div class="personal" style="width:470px; float:left;
	min-height:23px;
	background:#DFDFDF;
	margin:3px 0 3px 0;
	padding:2px 0 0 10px;  margin-left:10px;" >'.$message.'</div>
	 
	';  
	$message .= ' 
	</div>


	<p>&nbsp;</p> 
	</body> 
	</html> 
	'; 

	?>

	<?php
       
		if(mail($to, $subject, $message, $headers)) 
		{

			?>

			<div id="success">
				<div role="alert" class="alert alert-success">
					<strong>Thanks</strong>Your message has been sent.
				</div>
			</div>
		<?php
		
			header('Location: http://holyredeemersbasilica.com/petition.php'); 
		} 
		else 
		{

			?>

			<div id="success">
				<div role="alert" class="alert alert-dander">
						<strong>Failed</strong>
					</div>
			</div>

							<?php
			header('Location: http://holyredeemersbasilica.com/petition.php');
		}

	
 		} ?>




	<!-- //mid-services -->
	<!-- /map -->
	
	<!-- //map -->

	<!-- //inner_content -->
	<!-- footer -->
	<?php include('footer.php') ?>


	<!-- //footer -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Instruction</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g12.jpg" class="img-responsive" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	

	<script type="text/javascript">

		 $(document).ready(function () {
                
                $('#example1').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                }); 

                setTimeout(function() 
    			{
        		('#success').fadeOut('slow');
    			}, 3000); 

                
            
            });
		
	</script>
</body>
</html>
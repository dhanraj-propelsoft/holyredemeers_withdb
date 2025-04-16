
<style>

.sticky {
  position: fixed;
  top: 0;
  width: 100%;   
}


</style>
<div class="header" >

	<?php $url =  $_SERVER['REQUEST_URI']; ?>

		<div class="container-fluid" >

			<div class="row" style=" background: url(images/header/bg-1.png)">
				<!-- <div style=" color:#1d72f6">
				<marquee direction="left" >Church Latest News: Coming Sunday full nigth prayer 9.00pm to 5.00am</marquee>
				</div> -->
				<div class=" col-md-3  text-center" style="padding-top: 15px;">
	                <img src="images/header/matha-3.png" class="" alt="matha-2">
	            </div>

	            <div class="col-md-6  text-center" style="padding-top: 20px;text-align: center;">

	                <h2 style="font-family:verdana; color:#008080"> 
	                 <b>HOLY REDEEMER’S BASILICA</b>
	                </h2><br>

	                <h4 style="font-family:verdana; color:#0C9F98">
	                	<b>PALAKARAI, TRICHY-08</b>
	                </h4><br>

	                <h5 style="font-family:verdana; color:#0C9F98">
	                 <b>TAMILNADU, INDIA</b>
	                </h5>
	                
	            </div>

	            <div class="col-md-3  text-center" style="padding-top: 15px;">
	                <img src="images/header/jesus-2.png" class="" alt="matha-2">
	            </div>
				<!-- <div class="w3l_header_left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +456 123 7890</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
			</div> -->
				<!-- <div class="w3l_header_right">
					<div class="w3ls-social-icons text-left">
						<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
						<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div> -->

			</div>
		</div>


		<!-- <div class="agileits_top_menu">
			<div class="w3l_header_left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +456 123 7890</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="w3l_header_right">
					<div class="w3ls-social-icons text-left">
						<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
						<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div> -->


		<div class="agileits_top_menu" id="myHeader">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="agileits_top_menu">
				<div class="container ">					
					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >

						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>
						<!-- <a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-book" aria-hidden="true"></span> Instruction <label>Education</label></h1>
						</a> -->
					
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">

								
								<li class="active"><a href="index.php" class="effect-3">Home</a></li>

								
								<li class=""><a href="history.php" class="effect-3">History</a></li>
								

								<li><a href="gallery.php" class="effect-3">Gallery</a></li>

								

								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Ministries  <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="parish.php">Succession of Parish Priests</a>
										</li>
										<li><a href="admin_counsil.php">Administrative Councils</a>
										</li>
										
										<li><a href="anbiyam.php">Anbiyam(BCC)</a>
										</li>
										<li><a href="pious_asso.php">PIOUS Associations</a>
										</li>
										<li><a href="movements.php">Movements</a>
										</li>
									</ul>
								</li>

								

								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Request  <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="petition.php">Petition / Thanks</a>
										</li>
										<!-- <li><a href="suggestion.php">Thanks giving & Suggestion</a>
										</li> -->
										
										
									</ul>
								</li>

								</li>
								<li><a href="contact.php" class="effect-3">Contact</a></li>
							</ul>
						</nav>
					</div>

					</div>
				</div>


					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>

	<script>

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
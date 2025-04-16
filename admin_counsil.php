<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include "admin-panel/connect.php";
$select = mysqli_query($connect,"select * from admin_council");

$select_pf = mysqli_query($connect,"select * from parish_finance");

?>
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
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

	

    <!-- DataTables Responsive CSS -->
    <link href="css/dataTables.bootstrap4.min.css">
	
		
</head>

<body>
	<!-- header -->
	<?php include('header.php'); ?>

	<!-- banner -->
	
	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
	
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						
						<p>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</p>
						
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						
						<p>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</p>

						
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">

					<div class="carousel-caption">

						
					<p>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</p>

						

					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
	</div> -->
	<!--//banner -->
	<!-- //header -->
		<!-- /inner_content -->


	<!-- more form fields -->

	<div class="services">
		<h3 class="heading-agileinfo">Administrative Council</h3>

		<div class="container">

			<div class="row">

				<div class="col-md-12 agileits-w3layouts">

					<div class="grid-parish">
                        <!-- <h3><center>Administrative Council</center></h3> -->

                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                	<th width="3%">#</th>
                                    <th width="20%" >Name</th>
                                    <th width="20%">Position</th>
                                    <th width="10%">Contact_no</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: left">
                                <?php 
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($select))
                                    {
                                    ?>
                                                                
                                <tr>
                                	<td><?php echo $i;?></td> 
                                    <td><?php echo $fetch['name'];?></td>
                                     <td><?php echo $fetch['designation'];?> </td>
                                    <td><span class="badge badge-primary">+91 <?php echo $fetch['contact_no'];?></span></td>
                                </tr>
                                <?php 
                                $i++;
                                    }?>
                                                                                                                                  
                              </tbody>
                        </table>
                    </div>
                </div>                
            </div>                     
         <div><br>			
		</div>
	</div>

	<div class="services">
		<h3 class="heading-agileinfo">Parish Finance Committee</h3>

		<div class="container">

			<div class="row">

				<div class="col-md-12 agileits-w3layouts">

					<div class="grid-parish">

                        <!-- <h3><center>Administrative Council</center></h3> -->

                        <table class="table table-striped table-bordered table-hover" id="dataTables-example-1">
                            <thead>
                                <tr>
                                	<th width="3%">#</th>
                                    <th width="10%">Name</th>
                                    
                                </tr>
                            </thead>
                            <tbody style="text-align: left">
                                <?php 
                                $i=1;
                                while($fetch_pf=mysqli_fetch_assoc($select_pf))
                                    {

                                    ?>
                                
                                <tr>
                                	<td><?php echo $i;?></td> 
                                    <td><?php echo $fetch_pf['name'];?></td>
                                   
                                </tr>
                                <?php 
                                $i++;
                                }
                                ?>
                                                                                              
                              </tbody>
                        </table>
                    </div>
                </div>                
            </div>                      
         <div><br>			
		</div>
	</div>

	<div class="services">
		<h3 class="heading-agileinfo">Parish Council</h3>

		<div class="container">

			<div class="row">

				<div class="col-md-12 agileits-w3layouts">

					<div class="grid-parish">
                        <!-- <h3><center>Administrative Council</center></h3> -->

                        <table class="table table-striped table-bordered table-hover" id="dataTables-example-2">
                            <thead>
                                <tr>
                                	<th width="3%">#</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Memeber</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: left">
                                
                                <tr>
                                	<td>1.</td> 
                                    <td>Parish Priest </td>
                                    <td>1</td>
                                    
                                </tr>

                                <tr>
                                	<td>2.</td> 
                                    <td>Assistant Parish Priest </td>
                                    <td>1</td>
                                </tr>

                                <tr>
                                	<td>3.</td> 
                                    <td>Monastic Fundraiser</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                	<td>4.</td> 
                                    <td>Anbiyam (Male secretary) </td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                	<td>5.</td> 
                                    <td>Anbiyam (Female Secretary ) </td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                	<td>6.</td> 
                                    <td>Educational Trust Representative </td>
                                    <td>2</td>
                                	
                                </tr>
                                

                                <tr>
                                	<td>7.</td> 
                                    <td>Member Representative </td>
                                    <td>4</td>
                                </tr>

                                <tr>
                                	<td>8.</td> 
                                    <td>Movement Representative</td>
                                    <td>7</td>
                                </tr>

                                <tr>
                                	<td>9.</td> 
                                    <td>Street Representative </td>
                                    <td>12</td>
                                </tr>

                                <tr>
                                	<td>10.</td> 
                                    <td>Canonical Representative</td>
                                    <td>9</td>
                                </tr>
                                                                                              
                              </tbody>
                        </table>

                    </div>

                </div>                

            </div>          
            
         <div><br>			

		</div>
	</div>

	

	
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

	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    
	<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>

	<script>


    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });

        $('#dataTables-example-1').DataTable({
                responsive: true
        });

        $('#dataTables-example-2').DataTable({
                responsive: true
        });
    });
    </script>


    
</script>
</body>
</html>




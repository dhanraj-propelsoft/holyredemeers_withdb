<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

include "connect.php" ;

   	if(isset($_POST["submit"]))
	{
	
		extract($_POST);


		$query = mysqli_query($connect,"insert into parish_priest(
			name,from_year,to_year)values('$name','$from_year','$to_year')");
		
		if($query)
		{   $_SESSION['success'] = ' added successfully..!';
			header ('location: parish_priest_list.php');
			exit();
		}
		else
		{	 //$_SESSION['failure'] = 'failure..!';
			header('location: parish_priest_list.php');
			exit();
		}
	
	}

  
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Form</h2>
		</div>
	</div>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" action="form.php" method="post"  enctype="">
		<fieldset>
			<div class="col-md-6">

				<div class="form-group">
					<label>Name</label>
					  <input type="text" name="name" placeholder="Enter name" class="form-control" required="true">
				</div> 

				<!-- <div class="form-group">
					<label>Designation</label>
					  <input type="text" name="designation" placeholder="Your Designation" class="form-control"  >
				</div> 

				<div class="form-group">
					<label>Address</label>
					  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
				</div>

 				-->
				<div class="form-group">
					<label>From Year</label>
					<input type="text" name=from_year placeholder="From Year" required="" class="form-control" id="example1" required="true">
				</div>

				<div class="form-group">
					<label>To Year</label>
					<input type="text" name=to_year placeholder="To Year" required="" class="form-control" id="example2">
				</div>

				<!-- <div class="form-group">
					<label>Contact-No</label>
					  <input type="text" name="contact-no" placeholder="Your Number" class="form-control"  >
				</div> --> 

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Submit <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>

		</fieldset>
	</form>	
</div>



<script type="text/javascript">

		 $(document).ready(function () {
                
                $('#example1').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  

                $('#example2').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });

		
		
	</script>


<?php include BASE_PATH.'/includes/footer.php'; ?>
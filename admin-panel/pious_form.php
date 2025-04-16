<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

include "connect.php" ;

    if(isset($_POST["submit"]))
	{	
		extract($_POST);

		$query = mysqli_query($connect,"insert into pious(
		name,address,contact_no)values('$association','$address','$contact_no')");

		if($query)
	   {
	   	  $_SESSION['success'] = ' added successfully..!';
	   	  header('location:pious_list.php');
	   	  exit();
	   }
	   else
	   {
	   	 header('location:pious_list.php');
	   }
	
	}
  
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Pious Association Form</h2>
		</div>
	</div>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" action="pious_form.php" method="post"  enctype="">
		<fieldset>
			<div class="col-md-6">

				<div class="form-group">
					<label>Association</label>
					  <input type="text" name="association" placeholder="Enter association" required="true" class="form-control" >
				</div> 

				<div class="form-group">
					<label>Address</label>
					  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
				</div>

				<!-- <div class="form-group">
					<label>Postion</label>
					  <input type="text" name="position" placeholder="Your Postion/Designation" class="form-control"  >
				</div>  -->

				<div class="form-group">
					<label>Contact-No</label>
					  <input type="text" name="contact_no" placeholder="Your Number" class="form-control"  >
				</div> 

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="submit" >Submit <i class="glyphicon glyphicon-send"></i></button>
				</div>
			</div>
			
		</fieldset>
	</form>	
</div>

<?php include BASE_PATH.'/includes/footer.php'; ?>
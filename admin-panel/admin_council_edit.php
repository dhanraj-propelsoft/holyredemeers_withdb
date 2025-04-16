<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

include "connect.php" ;

   $editid = $_REQUEST['id'];
   $select = mysqli_query($connect,"select * from admin_council where 
   	id='$editid'");
   
   $fetch = mysqli_fetch_assoc($select);

   	if(isset($_POST["update"]))
	{				
		extract($_POST);

		$query = mysqli_query($connect,"update admin_council set name='$name',designation='$position',contact_no='$contact_no' where id ='$editid' ");	

		if($query)
		{  
			$_SESSION['info'] = 'updated successfully..!';
			header('location:admin_council_list.php');
			exit();
		}
		else
		{
			header('location:admin_council_list.php');
		}			
	}
   
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Admin Council Update Form</h2>
		</div>
	</div>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" name="council_edit" method="post">
	
		<fieldset>
			<div class="col-md-6">

				<div class="form-group">
					<label>Name</label>
					  <input type="text" name="name"  placeholder="Enter name"  required="true"  class="form-control" value="<?php echo $fetch['name'];?>">
				</div> 

				<div class="form-group">
					<label>Postion</label>
					  <input type="text" name="position" placeholder="Your Postion/Designation" class="form-control" value="<?php echo $fetch['designation'];?>"  >
				</div> 
	
				 <div class="form-group">
					<label>Contact-No</label>
					  <input type="text" name="contact_no" placeholder="Your Number" class="form-control" value=<?php echo $fetch['contact_no'];?>  >
				</div> 

				<div class="form-group text-center">
					<label></label>
					<button type="submit" class="btn btn-warning" name="update" >Update <i class="glyphicon glyphicon-send"></i></button>
				</div>

			</div>			
		</fieldset>
	</form>	
</div>

<?php include BASE_PATH.'/includes/footer.php'; ?>
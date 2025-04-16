<?php
session_start();

require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

include "connect.php" ;

   $editid = $_REQUEST['id'];
   $select = mysqli_query($connect,"select * from movements where 
   	id='$editid'");
   $fetch = mysqli_fetch_assoc($select);

   //print_r($fetch);

   	if(isset($_POST["update"]))
	{				
		extract($_POST);

		$query = mysqli_query($connect,"update movements set name='$movement',address='$address',contact_no='$contact_no' where id ='$editid' ");	

		if($query)
		{
			$_SESSION['info'] = 'updated successfully..!';
			header('location:movements_list.php');
			exit();
		}
		else
		{
			header('location:movements_list.php');
		}			
	}
   
?>

<?php include BASE_PATH.'/includes/header.php'; ?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Movements Update Form</h2>
		</div>
	</div>

	<!-- Flash messages -->
	<?php include BASE_PATH.'/includes/flash_messages.php'; ?>

	<form class="form" name="movements_edit" method="post">
	
		<fieldset>
			<div class="col-md-6">

				<div class="form-group">
					<label>Movement</label>
					  <input type="text" name="movement"  placeholder="Enter movement" required="true" class="form-control" value="<?php echo $fetch['name'];?>">
				</div> 

				<div class="form-group">
					<label>Address</label>
					  <textarea name="address" placeholder="Enter your address" class="form-control"> <?php echo $fetch['address'];?>
					  	
					  </textarea>
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
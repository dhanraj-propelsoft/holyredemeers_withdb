<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

//to get connected to our database
error_reporting(0);
//$connect = mysqli_connect("localhost","root","","holy_redeemer_admin");

include "connect.php";

//select query from particular table
$select = mysqli_query($connect,"select * from parish_priest ORDER BY to_year DESC");

?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<!-- Main container -->
<div id="page-wrapper">
    <div class="row">
        
        <div class="col-lg-6">
            <h1 class="page-header">Parish Priest</h1>
        </div>
        <div class="col-lg-6">
            <div class="page-action-links text-right">
                <a href="parish_priest_form.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new</a>
            </div>       
    </div>
    
    </div>

    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>

    <!-- Table -->

    <table class="table table-striped table-bordered table-condensed" id="dataTables-example">
        <thead>
            <tr>
                <th width="5%"> S.No</th>
                <th width="20%">Name</th>
                <th width="15%">From_Year</th>
                <th width="15%">To_Year</th>
                <th width="15%">Action</th> 
                
            </tr>
        </thead>
        <tbody>
        
            <?php
            $i=1;
            while($fetch = mysqli_fetch_assoc($select))
            {
            ?>
            
            <tr>
                <td><?php echo $i; ?></td>

                <td><?php echo $fetch['name'];?></td>                
                <td><?php echo $fetch['from_year'];?></td>
                <td><?php echo $fetch['to_year'];?></td>             
                <td>
                        <a href="parish_priest_edit.php?id=<?php echo 
                        $fetch['id'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>

                        <a href="#" class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $fetch['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                </td>

            </tr>
            
                <!-- Delete Confirmation Modal -->
                 <div class="modal fade" id="confirm-delete-<?php echo $fetch['id']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="parish_priest_delete.php" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="del_id" value="<?php echo $fetch['id']; ?>">
                                <p>Are you sure you want to delete this row?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default pull-left">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
            <!-- //Delete Confirmation Modal -->          
            <?php 
            $i++;
        }?>
        </tbody>
       
    </table>
    <!-- //Table -->
</div>

<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php'; ?>

<script>

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    setTimeout(function() 
    {
        $('.alert-success').fadeOut('slow');
    }, 3000);

    setTimeout(function() 
    {
        $('.alert-info').fadeOut('slow');
    }, 3000);

    setTimeout(function() 
    {
        $('.alert-danger').fadeOut('slow');
    }, 3000);
</script>

   
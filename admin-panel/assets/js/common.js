 $(document).ready(function() {
 	$('.showOnlyPropelAdmin').show();
 	 var userType = '<?php echo ($_SESSION["user_id"]==1)?"1":"0"?>';
        
       if(userType==0)
       {
                $('.showOnlyPropelAdmin').hide();
       }
 });
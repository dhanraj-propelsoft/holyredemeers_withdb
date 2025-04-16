<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Church Admin</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
         
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

  
<link href="assets/css/dataTables.bootstrap4.min.css">

<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="assets/js/jquery.min.js" type="text/javascript"></script>

<script src="assets/js/image-compressor.js"></script>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Holy Redeemer's Basilica Admin</a>
                    </div>
                    <!-- /.navbar-header -->

                   <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-user">
                                
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">

                        <div class="sidebar-nav navbar-collapse">

                            <ul class="nav" id="side-menu">

                                <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                             
                                <li><a href="admin_users.php"><i class="fa fa-users"></i> Change Password</a></li>

                               <li><a href="gallery_page.php"><i class="fa fa-picture-o"></i> Gallery</a></li>

                                <li>
                                    <a href="#"><i class="fa fa-list fa-fw"></i> News and Events<i class="fa arrow"></i></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="newsform1.php"><i class="fa fa-list fa-fw"></i> News 1</a></li>
                                        <li><a href="newsform2.php"><i class="fa fa-list fa-fw"></i> News 2</a></li>
                                        <li><a href="newsform3.php"><i class="fa fa-list fa-fw"></i> News 3</a></li>

                                    </ul>

                                </li>

                                
                                

                                

                                <li>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Ministries<i class="fa arrow"></i></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="parish_priest_list.php"><i class="fa fa-list fa-fw"></i> Parish Priest</a></li>

                                        <li><a href="admin_council_list.php"><i class="fa fa-list fa-fw"></i> Administrative Council</a></li>

                                         <li><a href="parish_finance_list.php"><i class="fa fa-list fa-fw"></i> Parish Finance Committee</a></li>

                                         <li><a href="anbiyam_list.php"><i class="fa fa-list fa-fw"></i> Anbiyam</a></li>

                                         <li><a href="pious_list.php"><i class="fa fa-list fa-fw"></i> Pious Association</a></li>

                                          <li><a href="movements_list.php"><i class="fa fa-list fa-fw"></i> Movements</a></li>                                       
                                    </ul>

                                </li>

                                 
                            </ul>

                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            <?php endif; ?>
            <!-- The End of the Header -->

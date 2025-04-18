<?php
//session_start();
require_once 'admin-panel/config/config.php';
//require_once 'admin-panel/includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information- count values
//$numCustomers = $db->getValue ("customers", "count(*)");
$parishcount = $db->getValue("parish_priest", "count(*)");
$admincount = $db->getValue("admin_council", "count(*)");
$anbiyamcount = $db->getValue("anbiyam", "count(*)");
$piouscount = $db->getValue("pious", "count(*)");




?>

<?php
include("admin-panel/connect.php");

$select = mysqli_query($connect, "select * from news_one where status='1'");

$fetch = mysqli_fetch_assoc($select);

$select_one = mysqli_query($connect, "select * from news_two where status='1'");
$fetch_one = mysqli_fetch_assoc($select_one);

$select_two = mysqli_query($connect, "select * from news_three where status='1'");
$fetch_two = mysqli_fetch_assoc($select_two);


$parishPrists = mysqli_query($connect, "select * from parish_priest where transfer_in = '1'");


?>
<!-- $parish = mysqli_query($connect,"select * from parish_priest");
    $result = mysqli_query($connect,"SELECT COUNT('id') as p_id from parish_priest");
    $prist_count = mysqli_fetch_assoc($result);
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
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/lightbox.css">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">


</head>

<body>
    <!-- header -->
    <?php include('header.php'); ?>

    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h3>Financial Analyst <span>Course.</span></h3> -->
                        <!-- <strong>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</strong> -->

                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">

                        <!-- <div style=""><strong>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</strong></div> -->


                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">

                    <div class="carousel-caption">
                        <!-- <strong>Many miracles took place through Mother of Perpetual Succour. People from different religions attend novena every Wednesday. There was an awakening in the people through spiritual life.</strong> -->
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
        <!-- The Modal -->
    </div>
    <!--//banner -->

    <div class="news">
        <div class="container">
            <h2 class="heading-agileinfo">News & Events</h2>

            <div class="news-agileinfo grid-parish">

                <div id="owl-demo" class="owl-carousel owl-theme">

                    <div class="item" <?php if (!$fetch) { ?>style="display:none" <?php } ?>>
                        <div class="">

                            <div class="wthree-news-grids">
                                <div class="col-md-4 col-xs-5 datew3-agileits">
                                    <img src="admin-panel/uploads/news-one.jpg" style="height: 200px;" , width="350"
                                        class="img-responsive" alt="" />
                                </div>

                                <div class="col-md-7 col-xs-7 datew3-agileits-info ">
                                    <h5>
                                        <a href="#" data-toggle="modal" data-target="#myModal"
                                            style="color: red"><?php echo $fetch['title_one']; ?>

                                        </a>
                                    </h5>
                                    <h6>
                                        <?php

                                        $date = new DateTime($fetch['date_one']);
                                        echo $date->format('d-m-Y');
                                        ?>

                                    </h6>
                                    <b><?php echo $fetch['description_one']; ?></b>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>

                    <div class="item" <?php if (!$fetch_one) { ?>style="display:none" <?php } ?>>
                        <div class="">

                            <div class="wthree-news-grids">


                                <div class="col-md-4 col-xs-5 datew3-agileits">
                                    <img src="admin-panel/uploads_two/news-two.jpg" style="height: 200px;" , width="350"
                                        class="img-responsive" alt="" />
                                </div>

                                <div class="col-md-7 col-xs-7 datew3-agileits-info ">
                                    <h5><a href="#" data-toggle="modal" data-target="#myModal"
                                            style="color: red"><?php echo $fetch_one['title_two']; ?></a></h5>
                                    <h6>
                                        <?php

                                        $date = new DateTime($fetch_one['date_two']);
                                        echo $date->format('d-m-Y');
                                        ?>

                                    </h6>
                                    <b><?php echo $fetch_one['description_two']; ?>
                                    </b>
                                </div>

                                <div class="clearfix"> </div>

                            </div>
                        </div>
                    </div>

                    <div class="item" <?php if (!$fetch_two) { ?>style="display:none" <?php } ?>>
                        <div class="">

                            <div class="wthree-news-grids">

                                <div class="col-md-4 col-xs-5 datew3-agileits">
                                    <img src="admin-panel/uploads_three/news-three.jpg" style="height: 200px;" ,
                                        width="350" class="img-responsive" alt="" />
                                </div>

                                <div class="col-md-7 col-xs-7 datew3-agileits-info ">
                                    <h5><a href="#" data-toggle="modal" data-target="#myModal"
                                            style="color: red"><?php echo $fetch_two['title_three']; ?></a></h5>
                                    <h6>

                                        <?php
                                        $date = new DateTime($fetch_two['date_three']);
                                        echo $date->format('d-m-Y');
                                        ?>

                                    </h6>
                                    <b><?php echo $fetch_two['description_three']; ?></b>
                                </div>

                                <div class="clearfix"> </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="news-w3row">

                    <div class="grid1">
                       

                        <div class="wthree-news-grids">
                            <div class="col-md-4 col-xs-5 datew3-agileits">
                                <img src="images/g7.jpg" class="img-responsive" alt=""/>
                            </div>

                            <div class="col-md-7 col-xs-7 datew3-agileits-info ">
                                <h5><a href="#" data-toggle="modal" data-target="#myModal">News</a></h5>
                                <h6>3/01/2018</h6>
                                <strong>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.
                                roin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce</strong>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    
                    </div>

                        
                    <div class="grid1">
                        <div class="wthree-news-grids">


                            <div class="col-md-4 col-xs-5 datew3-agileits">
                                <img src="images/g7.jpg" class="img-responsive" alt=""/>
                            </div>

                            <div class="col-md-7 col-xs-7 datew3-agileits-info "> <h5><a href="#"
                            data-toggle="modal" data-target="#myModal">Event</a></h5>
                            <h6>3/01/2018</h6> <p>Proin euismod vehicula vestibulum. Fusce
                            ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non
                            cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id
                            egestas. Nulla leo purus, facilisis non cursus ut, egestas sed
                            ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus,
                            facilisis non cursus ut, egestas sed ipsum.</p> </div>

                            <div class="clearfix"> </div>

                        </div>
                    </div>

                    <div class="grid1">

                        <div class="wthree-news-grids">

                            <div class="col-md-4 col-xs-5 datew3-agileits">
                                <img src="images/g7.jpg" class="img-responsive" alt=""/>
                            </div>

                            <div class="col-md-7 col-xs-7 datew3-agileits-info ">
                                <h5><a href="#" data-toggle="modal" data-target="#myModal">News</a></h5>
                                <h6>3/01/2018</h6>
                                <p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
                            </div>

                            <div class="clearfix"> </div>

                        </div>
                    </div>

                    <div class="clearfix"> </div>
                    </div> -->

                <!-- <div class="wthree-news-grids news-grids-mdl">
                            <div class="col-md-5 col-xs-5 datew3-agileits datew3-agileits-fltrt">
                                <img src="images/g10.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="col-md-7 col-xs-7 datew3-agileits-info datew3-agileits-info-fltlft">
                                <h5><a href="#" data-toggle="modal" data-target="#myModal">Fusce scelerisque</a></h5>
                                <h6>5/01/2018</h6>
                                <p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div> -->



            </div>
        </div>
    </div>


    <div class="services">
        <h3 class="heading-agileinfo">Mass Timing<span>Prayer timing</span></h3>
        <div class="container">

            <div class="row">

                <div class="col-md-4 agileits-w3layouts ">

                    <div class="grid1">
                        <h3>
                            <center>Daily</center>
                        </h3>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Morning – Mass/Novena</code></td>
                                    <td><span class="badge badge-primary">05.00 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Morning – Mass</code></td>
                                    <td><span class="badge badge-success">06.15 am</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 agileits-w3layouts ">
                    <div class="grid1">
                        <h3>
                            <center>Wednesdays</center>
                        </h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Mrg – Mass/Novena</code></td>
                                    <td><span class="badge badge-primary">05.00 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Morning – Mass</code></td>
                                    <td><span class="badge badge-success">06.15 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Mrg – Mass/Novena</code></td>
                                    <td><span class="badge badge-info">11.00 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Evening – Novena</code></td>
                                    <td><span class="badge badge-warning">04.15 pm</span></td>
                                </tr>
                                <tr>
                                    <td><code>Evg–Novena(Malayalam)</code></td>
                                    <td><span class="badge badge-danger">05.15 pm</span></td>
                                </tr>
                                <tr>
                                    <td><code>Evening – Novena</code></td>
                                    <td><span class="badge badge-primary">06.15 pm</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 agileits-w3layouts">
                    <div class="grid1">
                        <h3>
                            <center>First Friday</center>
                        </h3>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Afternoon Mass</code></td>
                                    <td><span class="badge badge-primary">03.00 am</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div><br></div>

            <div class="row ">

                <div class="col-md-4 agileits-w3layouts">
                    <div class="grid1">
                        <h3>
                            <center>Sundays</center>
                        </h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Morning – Mass</code></td>
                                    <td><span class="badge badge-primary">06.15 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Mrg–Mass(Malayalam)</code></td>
                                    <td><span class="badge badge-success">07.15 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Morning – Mass</code></td>
                                    <td><span class="badge badge-info">08.15 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Morning – Mass ( English )</code></td>
                                    <td><span class="badge badge-warning">11.15 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Evening  – Mass</code></td>
                                    <td><span class="badge badge-danger">06.15 pm</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 agileits-w3layouts">
                    <div class="grid1">
                        <h3>
                            <center>St.Xavier's Church-Varaganery</center>
                        </h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Daily Morning – Mass</code></td>
                                    <td><span class="badge badge-primary">05.30 am</span></td>
                                </tr>
                                <tr>
                                    <td><code>Sunday’s Mrg–Mass</code></td>
                                    <td><span class="badge badge-success">05.00 am</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 agileits-w3layouts">
                    <div class="grid1">
                        <h3>
                            <center>On Every Full Moon</center>
                        </h3>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Prayer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><code>Full moon night prayer </code></td>
                                    <td><span class="badge badge-primary">9.30pm - 4.00 am</span></td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- <div class="services-top-grids">

                <div class="col-md-4">

                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Daily</h4>			

                        <ul class="list-group w3-agile">
                            <li class="list-group-item">Morning 06.15 am – Mass</li>
                            <li class="list-group-item">Evening 06.15 pm – Mass </li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Wednesdays</h4>
                        
                        <ul class="list-group w3-agile">
                           <li class="list-group-item">Morning 05.00 – Mass/Novena</li>
                            <li class="list-group-item">Morning 06.15 – Mass</li>
                            <li class="list-group-item">Morning 11.00 – Mass/Novena</li>
                            <li class="list-group-item">Evening 04.15 – Novena</li>
                            <li class="list-group-item">Evening 05.15 – Novena (Malayalam)</li>
                            <li class="list-group-item">Evening 06.15 – Novena</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>First Friday</h4>
                        
                        <ul class="list-group w3-agile">
                            <li class="list-group-item">Afternoon 03.00 Mass</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="services-bottom-grids">

                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Sundays</h4>
                        

                        <ul class="list-group w3-agile">
                           <li class="list-group-item">Morning 06.00 – Mass</li>
                            <li class="list-group-item">Morning 07.15 – Mass(Malayalam)</li>
                            <li class="list-group-item">Morning 08.15 – Mass</li>
                            <li class="list-group-item">Evening 04.15 – Novena</li>
                            <li class="list-group-item">Morning 11.15 – Mass (English)</li>
                            <li class="list-group-item">Evening 06.15 – Mass</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>St.Xavier's Church - Varaganery</h4>
                        
                        <ul class="list-group w3-agile">
                           <li class="list-group-item">Daily Morning 5.30 – Mass</li>
                            <li class="list-group-item">Sunday’s Morning 05.00 – Mass</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>ON EVERY FULL MOON</h4>
                        
                        <ul class="list-group w3-agile">
                           <li class="list-group-item">Night 9.30pm – Morning 4.00am</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                            <li class="list-group-item">-</li>
                        </ul>

                    </div>
                </div>

                <div class="clearfix"></div>

            </div> -->

        </div>
    </div>
    <div class="news">
        <div class="container">
            <h2 class="heading-agileinfo">Our Parish Priest</h2>
            <?php

            while ($fetch_parishPrists = mysqli_fetch_assoc($parishPrists)) {
                $imageName = "admin-panel/parish_priestes/" . $fetch_parishPrists['image'];
                $designation = ($fetch_parishPrists['designation'] == 1) ? "Parish Priest" : "Asst Parish Priest";
                ?>

                <div class="services-top-grids">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="grid1">

                                <h4 style=""><?php echo $designation; ?></h4>

                                <div class="row">

                                    <div class="col-md-3">
                                        <img src="<?php echo $imageName; ?>" class="img-responsive" alt="" />
                                    </div>

                                    <div class="col-md-8 agileits-w3layouts">

                                        <table class="table table-bordered">

                                            <tbody>


                                                <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $fetch_parishPrists['name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Born</td>
                                                    <td><?php echo $fetch_parishPrists['dob']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Ord</td>
                                                    <td><?php echo $fetch_parishPrists['order_date']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Contact No </td>
                                                    <td><?php echo $fetch_parishPrists['contact_no']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $fetch_parishPrists['address']; ?></td>
                                                </tr>

                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>

                </div>

            <?php } ?>

        </div>
    </div>

    <div id="lab" class="w3ls-section gallery">
        <div class="container">

            <h3 class="heading-agileinfo">Gallery</h3>

            <div class="gallery-grids">

                <div class="col-sm-4 col-xs-6 gallery-grid">

                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g1.jpg" data-lightbox="example-set"
                            data-title="">

                            <img src="images/home-gallery/g1.jpg" alt="" />

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 gallery-grid">
                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g2.jpg" data-lightbox="example-set"
                            data-title="">
                            <img src="images/home-gallery/g2.jpg" alt="" />

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 gallery-grid">
                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g2.jpg" data-lightbox="example-set"
                            data-title="">
                            <img src="images/home-gallery/g3.jpg" alt="" />

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 gallery-grid">
                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g4.jpg" data-lightbox="example-set"
                            data-title="">
                            <img src="images/home-gallery/g4.jpg" alt="" />
                            < </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 gallery-grid">
                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g5.jpg" data-lightbox="example-set"
                            data-title="">
                            <img src="images/home-gallery/g5.jpg" alt="" />

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 gallery-grid">
                    <div class="grid effect-apollo">

                        <a class="example-image-link" href="images/home-gallery/g6.jpg" data-lightbox="example-set"
                            data-title="">
                            <img src="images/home-gallery/g6.jpg" alt="" />

                        </a>
                    </div>
                </div>


            </div>

            <script src="js/lightbox-plus-jquery.min.js"> </script>

        </div>
    </div>


    <div class="stats">
        <div class="container">
            <h3 class="heading-agileinfo">Our Stats</h3>

            <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                <span class="fa fa-users" aria-hidden="true"></span>
                <h3>List of the <br>Parish Priest</h3>
                <p class="counter"><?php echo $parishcount; ?></p>

            </div>
            <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                <span class="fa fa-users" aria-hidden="true"></span>
                <h3>Parish Council Administrative</h3>
                <p class="counter"><?php echo $admincount; ?></p>

            </div>
            <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                <span class="fa fa-users" aria-hidden="true"></span>
                <h3>Anbiyam <br>Members</h3>
                <p class="counter"><?php echo $anbiyamcount; ?></p>

            </div>
            <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                <span class="fa fa-users" aria-hidden="true"></span>
                <h3>Pious <br>Association </h3>
                <p class="counter"><?php echo $piouscount; ?></p>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>


    <?php include('footer.php'); ?>
    <!-- //footer -->




    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
        </span></a>
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 1000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                items: 1,
                itemsDesktop: [991, 2],
                itemsDesktopSmall: [414, 4]

            });
        }); 
    </script>
    <!-- //owl carousel -->


</body>

</html>
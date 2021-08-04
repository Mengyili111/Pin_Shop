<?php
require '../tools.func.php';
require '../db.func.php';
$id = $_GET["id"];
$prefix = getDBPrefix();
$sql = "SELECT * FROM " . $prefix . "product where id=" . $id;

$reset = query($sql);
$record = $reset[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rapid Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<!--==========================
Header
============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#footer">Contact Us</a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h2>Rapid Solutions<br>for Your <span>Business!</span></h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>

            <div class="col-md-6 intro-img order-md-last order-first">
                <img src="img/intro-img.svg" alt="" class="img-fluid">
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">


    <section id="features">
        <div class="container">

            <div class="row justify-content-center">
                <div class="specsPanel  wow fadeInUp" id="specsPanel"
                     style="visibility: visible; animation-name: fadeInUp;">
                    <div class="line">
                        <div class="title">Power Consumption</div>
                        <div class="content"><?php echo $record['name'] ?></div>
                    </div>
                    <div class="line">
                        <div class="title">Cutting Intervals</div>
                        <div class="content"><?php echo $record['code']?></div>
                    </div>
                    <div class="line">
                        <div class="title">Voltage</div>
                        <div class="content"><?php echo $record['description']?></div>
                    </div>
                    <div class="line">
                        <div class="title">Beam Angle</div>
                        <div class="content"><?php echo $record['stock']?></div>
                    </div>
                    <div class="line">
                        <div class="title">Bend Radius</div>
                        <div class="content"><?php echo $record['price']?></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="container">
    <div class="downloadPanel">
        <div class="tab active">Technical Drawing</div>
        <a target="blank"
           href="https://ledflexgroup.com/includes/specification_templates/ledflex.php?id=1504&amp;masterid=1504&amp;downloadblock=1&amp;type=ledflex&amp;product=LUMEN+LINE+176&amp;route=led-flex">
            <div class="tab"><i class="fa fa-cogs"></i><span class="orange">Specification</span> Sheet</div>
        </a><a href="https://ledflexgroup.com/includes/ies_class.php?id=1504" download="">
            <div class="tab"><i class="fas fa-file-archive"></i><span class="orange">IES</span> Download<i
                        class="fas fa-arrow-alt-circle-down"></i></div>
        </a><a target="blank" href="https://ledflexgroup.com/files/drawings/LUMEN LINE 176 IP20.pdf">
            <div class="tab"><i class="fas fa-file"></i><span class="orange">Drawing</span> Download<i
                        class="fas fa-arrow-alt-circle-down"></i></div>
        </a></div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>
</html>

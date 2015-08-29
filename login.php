<?php session_start();?>
<?php //if(!isset($_SESSION['user_id'])&&!isset($_SESSION['exp_id'])){
//    header('location: login.php');
//}
//?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>MioTo - One Page Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Revolution css -->
    <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen"/>
    <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">

    <!-- Flat icon css -->
    <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

    <!-- Owl Carosel css -->
    <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
    <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">

    <!-- mmenu -->
    <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Custom Style css -->
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
    </script>


    <![endif]-->
</head>
<body>
<div class="loader"></div>
<div class="main" id="home">


    <!-- Begin Header -->
    <?php include_once 'views/login_header.php'; ?>
    <!-- End Header -->

    <!-- slider -->
    <?php include_once 'main_layouts/slider.php'; ?>
    <!-- slider -->

    <!-- Home -->
    <?php include_once 'main_layouts/home.php'; ?>
    <!-- /Home -->

    <!-- About Us -->
    <?php include_once 'main_layouts/aboutus.php'; ?>
    <!-- /About Us -->

    <!-- COUNTING -->
    <?php include_once 'main_layouts/counting.php'; ?>
    <!-- counting -->

    <!-- SERVICES -->
    <?php include_once 'main_layouts/services.php'; ?>
    <!-- SERVICES -->


    <!--Video Section-->
    <?php include_once 'main_layouts/video.php'; ?>
    <!--Video Section Ends Here-->


    <!-- SERVICES -->
    <?php include_once 'main_layouts/services2.php'; ?>
    <!-- SERVICES -->

    <!-- OUR LATEST WORKS -->
    <?php include_once 'main_layouts/latest_work.php'; ?>
    <!-- /our latest works -->

    <!--work with us-->
    <?php include_once 'main_layouts/latest_work.php'; ?>
    <!--work with us-->

    <!-- OUR TEAM -->
    <?php include_once 'main_layouts/ourteam.php'; ?>
    <!-- our team -->


    <!-- CLEAN IDEA AND UNIQUE DESIGN -->
    <?php include_once 'main_layouts/idea.php'; ?>
    <!-- /clean idea and unique design -->

    <!-- TESTIMONIAL-->
    <?php include_once 'main_layouts/supportedcom.php'; ?>
    <!-- testimonial -->

    <!-- login -->
    <?php include_once 'views/login_view.php'; ?>
    <!-- login -->

    <!-- our partner -->
    <?php include_once 'main_layouts/partners.php'; ?>
    <!-- our partner -->

    <!-- signup -->
    <?php include_once 'views/signup.php'; ?>
    <!-- signup -->



    <!-- GET IN TOUCH -->
    <?php include_once 'main_layouts/contactus.php'; ?>
    <!-- get in touch -->



    <!-- footer -->
    <?php include_once 'main_layouts/footer.php'; ?>
    <!-- /Footer -->



    <!-- MMENU -->
    <?php include_once 'views/login_menu.php'; ?>
    <!-- /#menu -->

</div><!-- /.main -->



<!-- jQuery JS -->
<script src="js/jquery-1.11.1.js"></script>

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>

<!--Bootatrap JS-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

<!-- Shuffle JS -->
<script src="js/jquery.shuffle.min.js"></script>

<!-- mmenu -->
<script type="text/javascript" src="vendor/mmenu/js/jquery.mmenu.min.js"></script>

<!-- Owl Carosel -->
<script src="vendor/owl/js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<!-- waypoints JS-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<!-- Counterup JS -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Easing JS -->
<script src="js/jquery.easing.min.js"></script>

<!-- Smooth Scroll JS -->
<script src="js/scrolling-nav.js"></script>
<script src="js/smoothscroll.min.js"></script>

<!-- Custom Script JS -->
<script src="js/script.js"></script>

<!-- Email JS -->
<script src="js/email.js"></script>

<!-- Scroll Speed -->
<script src="js/jQuery.scrollSpeed.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>

<script>
    $(window).on('scroll', function(){
        if( $(window).scrollTop()>70 ){
            $('.navbar-default').addClass('navbar-fixed-top');
        } else {
            $('.navbar-default').removeClass('navbar-fixed-top');
        }
    });
</script>
<script type="text/javascript">
    // $(function() {

    //     // Default
    //     jQuery.scrollSpeed(100, 800);

    //     // Custom Easing
    //     jQuery.scrollSpeed(100, 800, 'easeOutCubic');

    // });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".player").mb_YTPlayer();

    });
</script>

<!--SWAL-->
<link href="swal/sweet-alert.css" rel="stylesheet">
<link href="swal/ie9.css" rel="stylesheet">
<script src="swal/sweet-alert.js"></script>
<script src="swal/sweet-alert.min.js"></script>



    <script src="js/modules/user.js"></script>



</body>
</html>

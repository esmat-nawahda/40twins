<?php //session_start();?>
<?php //if(!isset($_SESSION['user_id'])&&!isset($_SESSION['exp_id'])){
//    header('location: login.php');
//}
//?>
<script src="dist/js/auth.js" type="text/javascript"></script>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>40Twins - Social Media For Finding & Communicating Twins Over The World</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">


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





    <!-- Bootstrap 3.3.2 -->

    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->


    <link href="dist/css/main.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->


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
    <?php include_once 'main_layouts/header.php'; ?>
  <!-- End Header -->
<!--      <a href="javascript:fbShare('http://geniucode.com/40twins', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">Share</a>-->

      <div style="clear: both;">&nbsp;</div>
      <div style="clear: both;">&nbsp;</div>
      <div style="clear: both;">&nbsp;</div>
      <!-- footer -->
      <?php include_once 'main_layouts/body.php'; ?>
      <!-- /Footer -->

      <div style="clear: both;">&nbsp;</div>
  <!-- footer -->
      <?php include_once 'main_layouts/footer.php'; ?>
  <!-- /Footer -->

      <!--Modals-->
      <?php include_once("Modals/updateModal.php"); ?>
      <?php include_once("Modals/galleryModal.php"); ?>
      <?php include_once("Modals/infoModal.php"); ?>
      <?php include_once("Modals/youtubeModal.php"); ?>

<!-- MMENU -->
      <?php include_once 'menu.php'; ?>
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


   <!-- Routes -->
   <script src="routes/modules.js"></script>
   <script src="routes/jquery.routes.js"></script>
   <script src="routes/app.routes.js"></script>

   <link href="swal/sweet-alert.css" rel="stylesheet">
   <link href="swal/ie9.css" rel="stylesheet">
   <script src="swal/sweet-alert.js"></script>
   <script src="swal/sweet-alert.min.js"></script>



   <script src="js/globals.js" type="text/javascript"></script>
   <script src="dist/js/views.js" type="text/javascript"></script>
   <script src="dist/js/main.js" type="text/javascript"></script>
   <script src="js/modules/user.js"></script>
   <script src="js/modules/post.js"></script>
   <script src="js/modules/studio.js"></script>
   <script src="js/modules/myTwins.js"></script>
   <script src="js/modules/comment.js"></script>
   <script src="js/modules/notification.js"></script>




   <!-- AdminLTE for demo purposes -->
   <script src="dist/js/demo.js" type="text/javascript"></script>

   <script src="dist/js/functions.js" type="text/javascript"></script>
   <script src="dist/js/spin.min.js" type="text/javascript"></script>







</body>
</html>

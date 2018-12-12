<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Escorts Classified Ads India | Adult Ads Posting Classifieds India | Submit Ads in India</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicons -->
<link href="images/favicon.png" rel="icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/flags.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>


<body>

<!--==========================
    Header
  ============================-->
<header id="header">
  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"> <div class="nav-box-left"><a class="navbar-brand" href="index.php"><img src="images/logo.png" /></a></div>
        <div class="nav-box-right"><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="clesr"></div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"> <a class="nav-link" href="banner.php"> Our Banners </a></li>
            <li class="nav-item"> <a class="nav-link" href="advertisement.php"> Advertise </a> </li>
            <li class="nav-item"> <a class="nav-link" href="create-site.php">Create Site</a> </li>
            <li class="nav-item"> <a class="nav-link" href="contact.php">Contact Us</a> </li>

 <?php 
                                error_reporting(0);
                                if ($_SESSION['useremail'])
                                {
                                ?>
                                <div>
                                  <ul class="navbar-nav ml-auto">
                               <li class="nav-item"> <a class="nav-link" href="allads.php"><?php echo 'welcome '.$_SESSION['useremail']; ?></a></li>
                               <li class="nav-item"> <a class="nav-link" href="logout.php?act=logout">Logout</a></li>
                               </ul>
                               <div>
                                <?php }
                                else{
                                ?>
                                
                                   <ul>               
                               <li class="nav-item"> <a class="nav-link" href="login.php">Login</a></li>
                                <?php }?></ul> 

         </ul>
        </div>
      </div>
      </div>
    </nav>
  </div>
</header>


 
<?php 
error_reporting(0);
session_start();


?>

<?php if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
ob_start(“ob_gzhandler”); else ob_start(); ?>
    
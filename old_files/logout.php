<?php 
error_reporting(0);
session_start();
include 'connection.php';
$mail=$_SESSION['useremail'];

if($mail)
{


?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Classify | Classify ads HTML Template</title>

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900,300' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/star-rating.css">

</head>
<body>

<!--Start Header section-->
<?php include 'header.php';
include 'connection.php';

?>

<!--main sub page heading-->
<section id="page-head">
<div class="container">
<div class="row col-md-12">
<div class="page-heading">
<h1><?php echo 'welcome '.$_SESSION['useremail']; ?> </h1>

</div>
</div>
</div>
</section><!--end main page heading-->
<!--Detail -->
<section id="detail">
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="sidebar">



<div class="side-widget">
<h4 class="inner-heading">Latest ADs</h4>


<div class="sidebar-latest-ad">
<div class="row">
    
<div class="col-sm-12">
<?php 
$ban_query="SELECT * FROM banner order by rand() limit 5";
$ban_result=$connection->query($ban_query);

while($myad_row=$ban_result->fetch_array()){ 
?>  
    
    <a href="<?php echo $myad_row['hvalue'];?>" target="_blank"><img src="banner/<?php echo $myad_row['bannername']; ?>" alt="banner" height="300" width="300"></a>
    
<?php }?>
</div>

</div>
</div>


</div><!--end latest ad widget-->


</div>
</div>



<div class="col-md-8">
<div class="ads-detail">
<div class="account-overview">
<h4 class="inner-heading">Log Out</h4>
<div class="row">
<div class="col-sm-9">

<div id="form">

</div>

</div>



<div class="col-sm-3">


<?php include 'accountside.php';?>



</div>
</div>


</div>
</div>
</div>




</div>
</div>
</section><!--end details-->
<!--Footer-->
<?php include 'footer.php';?>

</body>


</html>

<?php
error_reporting(0);
if(isset($_GET['act']))
{
$choice=$_GET['act'];
switch($choice) 
{ 
case "logout": 
session_destroy();
echo '<script type="text/javascript">window.location=\'index.php\';</script>';

break; 

default: 
echo "data error";

}



}
?>

<?php }
else
{
echo '<script type="text/javascript">alert("plz login");window.location=\'login.php\';</script>';

}
?>
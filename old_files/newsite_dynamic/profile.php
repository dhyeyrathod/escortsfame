<?php 
error_reporting(0);
//session_start();
$useremail = $_POST['useremail'];
$userpsd = $_POST['userpsd'];
//$_SESSION['useremail']=$_POST["useremail"];

include 'connection.php';


$sql_login = "SELECT DISTINCT loginemail, loginpsd FROM login WHERE loginemail='$useremail' AND loginpsd='$userpsd'";
$result_login = $connection->query($sql_login);
$num_row = mysqli_num_rows($result_login);
if ( $num_row == 1 ) { 	
session_start();
$_SESSION['useremail']=$_POST["useremail"];


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

<?php 
 $mail=$_SESSION['useremail'];
$myad_query="SELECT * FROM advertise WHERE cusemail='$mail'";
$myad_result=$connection->query($myad_query);
global $adid,$category,$categorytype,$defaulttype,$cusname,$cusemail,$website,$country,$state,$city,$image,$des,$title;
while($myad_row=$myad_result->fetch_array()){
$adid=$myad_row['adid'];
$category=$myad_row['category'];
$categorytype=$myad_row['categorytype'];
$defaulttype=$myad_row['defaulttype'];
$cusname=$myad_row['cusname'];
$cusemail=$myad_row['cusemail'];
$website=$myad_row['website'];
$country=$myad_row['country'];
$state=$myad_row['state'];
$city=$myad_row['city'];
$image=$myad_row['image'];
$des=$myad_row['des'];
$title=$myad_row['title'];

}
$category_query="SELECT * FROM category WHERE categoryid='$category'";
$myad_result=$connection->query($category_query);
global $category;
while($myad_row=$myad_result->fetch_array()){
$category=$myad_row['cat_name'];
}

$categorytype_query="SELECT * FROM categorytype WHERE typeid='$categorytype'";
$myad_result=$connection->query($categorytype_query);
global $categorytype;
while($myad_row=$myad_result->fetch_array()){
$categorytype=$myad_row['typename'];
}

$country_query="SELECT * FROM countries WHERE country_id='$country'";
$myad_result=$connection->query($country_query);
global $country;
while($myad_row=$myad_result->fetch_array()){
$country=$myad_row['country_name'];
}

$state_query="SELECT * FROM states WHERE state_id='$state'";
$myad_result=$connection->query($state_query);
global $state;
while($myad_row=$myad_result->fetch_array()){
$state=$myad_row['state_name'];
}
$city_query="SELECT * FROM cities WHERE city_id='$city'";
$myad_result=$connection->query($city_query);
global $city;
while($myad_row=$myad_result->fetch_array()){
$city=$myad_row['city_name'];
}

?>


<div class="col-md-8">
<div class="ads-detail">
<div class="account-overview">
<h4 class="inner-heading">ACCOUNT OVERVIEW</h4>
<div class="row">
<div class="col-sm-9">
<div class="author-account">
<div class="account-info">
<span>


                                <?php echo $category; ?>

                                </span>
<p class="text-right">12</p>
</div>
<div class="account-info">
<span><?php echo $categorytype; ?></span>
<p class="text-right">02</p>
</div>
<div class="account-info">
<span><?php echo $defaulttype; ?></span>
<p class="text-right">unlimited</p>
</div>
                        <div class="account-info">
<span><?php echo $title; ?></span>
<p class="text-right">unlimited</p>
</div>
                        <div class="account-info">
                        <span><?php echo 'Country Name :'.$country;?></span>
<span><?php echo 'State Name :'.$state;?></span>  
                        <span><?php echo 'City Name :'.$city;?></span>  
</div>


</div>
</div>
<div class="col-sm-3">


<?php include 'accountside.php';?>



</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="author-profile-details">
<h4 class="inner-heading">CONTACT DETAILS</h4>
<ul>
<li>
<i class="fa fa-map-marker"></i>
<?php echo $cusname;?>
</li>

<li>
<i class="fa fa-globe"></i>
Website: <a href="#" class="col"><?php echo $website;?></a>
</li>
<li>
<i class="fa fa-envelope"></i>
Email: <a href="#" class="col"><?php echo $cusemail;?></a>
</li>
</ul>


<div class="author-price-plan">
<h4 class="inner-heading">DESCRIPTION<br></h4>
<div class="row">
<div class="col-sm-4">

<img src="adimage/<?php echo $image ?>" height="200" width="200"> 


                                         </div>


<div class="col-sm-8">
<div class="author-price-plan-content">
                                                <p><?php echo $des;?>jfdkjfndkfnkjdgfndkgnkfdn		</p>
</div>
</div>
</div>
</div>

</div>
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
} 

else
{
echo '<script type="text/javascript">alert("Invalid Login Detail");window.location=\'login.php\';</script>';

}

?>
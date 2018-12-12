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



<!--Start Header section-->
<?php include 'header.php';

?>




<main id="main">
  <section id="portfolio"  class="section-bg" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4 mt-4">
          <div class="bannersLink"> <a href="#"> Live Sex </a> <a href="#"> London Escorts </a> <a href="#"> Cam Girls </a> </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-4 mt-4">
        
        </div>
      </div>
      <header class="section-header">


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




<h3>Welcome <?php echo $_SESSION['useremail'];?></h3>
        <p>Account Overview</p>
      </header>
      <div class="row portfolio-container">
        <div class="col-lg-2 col-md-6">
          <div class=" left-bg">
            <div class="vertical-menu">
              <h1>Select Country</h1>
            <?php 
$sql_maincat = "SELECT * FROM countries where status=1 order by rand() ";
//$sql_maincat = "SELECT * FROM countries where country_name='india'";
$result_maincat = $connection->query($sql_maincat);
global $country_name,$country_id;
while ( $row_maincat = $result_maincat->fetch_assoc() ) { $id=$row_maincat['country_id'] ;
$country_name=$row_maincat['country_name'] ;
$country_id=$row_maincat['country_id'] ;
?>
          

              <ul>
                <li><a href="index_test.php?click=<?php echo $id;?>"><span><i class="fa fa-chevron-right"></i></span><img src="icon/<?php echo $row_maincat['sortname'] ?>.png"><?php echo $row_maincat['country_name'] ;?></a></li>
                 </ul>
      <?php }?>

            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">
            <div class="author">
            <div class="row">

           <div class="author-account-group">
           <div class="author-account"><?php echo $category; ?></div>
           <div class="author-account">12</div>
           </div>

           <div class="author-account-group">
           <div class="author-account"><?php echo $categorytype; ?></div>
           <div class="author-account">02</div>
           </div>

           <div class="author-account-group">
           <div class="author-account"><?php echo $defaulttype; ?></div>
           <div class="author-account">unlimited</div>
           </div>

           <div class="author-account-group">
           <div class="author-account"><?php echo $title; ?></div>
           <div class="author-account">unlimited</div>
           </div>

           <div class="author-account-group">
           <div class="author-account">Country Name :</div>
           <div class="author-account"><?php echo $country;?></div>
           </div>

           <div class="author-account-group">
           <div class="author-account">State Name:</div>
           <div class="author-account"><?php echo $state;?></div>
           </div>


           <div class="author-account-group">
           <div class="author-account">City Name:</div>
           <div class="author-account"><?php echo $city;?></div>
           </div>
            </div>

             <div class="author-menu">
             <h4>Contact Details</h4>
             <ul>
             <li> <i class="fa fa-map-marker"></i> <?php echo $cusname;?></li>
             <li><span> <i class="fa fa-globe"></i> Website:</span> <a href="#" class="col"><?php echo $website;?></a></li>
             <li><span> <i class="fa fa-envelope"></i> Email:</span> <a href="#" class="col"><?php echo $cusemail;?></a></li>
            </ul>
            </div>

            <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 pl-4 pr-4"><img src="adimage/<?php echo $image ?>" /></div>
            <div class="col-lg-8 col-md-6 mb-4 pl-4 pr-4">
            <p><pre>
 <p><?php echo $des;?></p></pre>	</p></div>

            </div>
        </div></div>
        <div class="col-lg-2 col-md-6">
                    <a href="moreadd.php" class="side-menu">Advertise</a>
        <a href="allads.php" class="side-menu">All Ads</a>
        <a href="changepsd.php" class="side-menu">Reset Password</a>
        <a href="deleteaccount.php" class="side-menu">Delete Account</a>
        <a href="logout.php?act=logout" class="side-menu">Logout</a>
               <?php 
$ban_query="SELECT * FROM banner order by rand() limit 5";
$ban_result=$connection->query($ban_query);

while($myad_row=$ban_result->fetch_array()){ 
?>  
    <div class="add-img">
    <a href="<?php echo $myad_row['hvalue'];?>" target="_blank"><img src="banner/<?php echo $myad_row['bannername']; ?>" alt="banner" height="300"></a></div>
    
<?php }?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php';?>

<?php	
} 

else
{
echo '<script type="text/javascript">alert("Invalid Login Detail");window.location=\'login.php\';</script>';

}



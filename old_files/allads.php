

<?php 
error_reporting(0);

session_start();
include 'connection.php';
$mail=$_SESSION['useremail'];

if($mail)
{

?>

<!--Start Header section-->
<?php include 'header.php';
include 'connection.php';

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
 $mail =$_SESSION['useremail'];
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


        <h3 class="section-title">Account Overview</h3>

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

        <div id="id="contact" class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">

          <div class="contactbox-bg">

            

            <div class=" col-lg-6 m-auto pt-4 pb-4 form">

             

              <div id="errormessage"></div>


<?php 
$myad_query="SELECT * FROM advertise WHERE cusemail='$mail'";
$myad_result=$connection->query($myad_query);
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
    

?>
    


           <div class="author-account">


<?php 

echo '<br>Website Name: '.$website;
echo '<br>Title : '.$title;
echo '<br>Description : '.$des;
?>
    <br>
    <div class="author-setting">
<p><a href="editadd.php?id=<?php echo $adid;?>">Edit Add</a></p>
</div>
    
     <div class="author-setting">
<p><a href="deleteadd.php?act=<?php echo $adid;?>">Delete Add</a></p>
</div>
   
</div>

    
 
    <?php }?>   


            </div>

          </div>

        </div>

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
if
($_SERVER['REQUEST_METHOD']== "POST")

{
$changepsd=$_POST['changepsd'];
echo $changepsd;
$sql = "update `login` set `loginpsd`='$changepsd' WHERE `loginemail`='$mail'";

if ($connection->query($sql) === TRUE) {
echo '<script type="text/javascript">alert("Your password been changed");</script>';
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();


}

?>

<?php }
else
{
echo '<script type="text/javascript">alert("plz login");window.location=\'login.php\';</script>';

}
?>






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

        <h3 class="section-title">Delete Account</h3>

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

              <form action="deleteaccount.php" method="" role="form" class="contactForm">

                

                <div class="form-group">
                	 <p>Make Sure If You Delete Your Account We will delete complete account.</p>

                 

                  <br><input type="radio" name="yes"  class="form-control" value="datac">click this button to make sure<br>

                  <div class="validation"></div>

                </div>

                

                <div class="text-center">

                  <button type="submit" class="submit">Submit</button>

                </div>

              </form>

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
error_reporting(0);
$yes=$_POST['yes'];
if($yes)
{
$img_query="SELECT * FROM advertise WHERE cusemail='$mail'";
$img_result=$connection->query($img_query);
while($img_row=$img_result->fetch_array()){

$image=$img_row['image'];
unlink('adimage/'.$image);	
}  

$del_query="delete from advertise WHERE cusemail='$mail'";   

if ($connection->query($del_query) === TRUE) {

}
else {
echo "Error: " . $del_query . "<br>" . $connection->error;
}

$sql = "delete from `login` WHERE `loginemail`='$mail'";
session_destroy();
if ($connection->query($sql) === TRUE) {
echo '<script type="text/javascript">alert("Your Account Has Been Deleted");window.location=\'index.php\';</script>';
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
session_destroy();	
}	
else
{
echo 'no';

}



}

?>

<?php }
else
{
echo '<script type="text/javascript">alert("plz login");window.location=\'login.php\';</script>';

}
?>

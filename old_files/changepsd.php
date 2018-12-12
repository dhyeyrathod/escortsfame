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

        <h3 class="section-title">Change Your Password</h3>

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

              <form action="changepsd.php" method="" role="form" class="contactForm">

                

                <div class="form-group">

                  <input type="password" class="form-control" name="changepsd" id="changepsd" placeholder="Enter Your New Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">

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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  
</script>

<script>
$.validate({
  modules : 'security',
  onModulesLoaded : function() {
    var optionalConfig = {
      fontSize: '12pt',
      padding: '4px',
      bad : 'Very bad',
      weak : 'Weak',
      good : 'Good',
      strong : 'Strong'
    };

    $('input[name="changepsd"]').displayPasswordStrength(optionalConfig);
  }
});
</script>
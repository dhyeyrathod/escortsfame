

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
        <h3 class="section-title">Contact Us</h3>
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
            <div class="row contact-info">
              <div class="col-md-4">
                <div class="contact-address"> <i class="ion-ios-location-outline"></i>
                  <h3>Address</h3>
                  <address>
                  Mumbai
                  </address>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-phone"> <i class="ion-ios-telephone-outline"></i>
                  <h3>Phone Number</h3>
                  <p><a href="tel:+91 0000 000 000">+91 0000 000 000</a></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-email"> <i class="ion-ios-email-outline"></i>
                  <h3>Email</h3>
                  <p><a href="abc@gmail.com">abc@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="form">
             <!--  <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div> -->
              <form action="contact.php" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter valid phone number">
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                  <button type="submit" class="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
         <div class="col-lg-2 col-md-6">

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
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$date=date('Y-m-d H:i a', time());

include 'connection.php';

$sql="insert into contactform(fullname,email,phone,subject,message,date) 
values('$fullname','$email','$phone','$subject','$message','$date')";

if ($connection->query($sql) === TRUE) {
echo '<script type="text/javascript">alert("Thank You We will contact you soon... ");</script>';
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}


$to = "info@listurdirectory.com";
$subject = "subject from website : escortsfame.com".$subject;
$txt = "$fullname"."phone number".$phone."Message".$message;
$headers = "$email";


$retval = mail($to,$subject,$txt,$headers);

if( $retval == true ) {
echo "<h1>Message sent successfully...</h1>";
}else {
echo "Message could not be sent...";
}




$connection->close();


}
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
$.validate();
$('#my-textarea').restrictLength( $('#max-length-element') );

</script>

<script>
function limitlength(obj, length){
var maxlength=length
if (obj.value.length>maxlength)
obj.value=obj.value.substring(0, maxlength)
}


</script>
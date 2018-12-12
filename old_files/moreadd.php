<?php 
error_reporting(0);
session_start();
include 'connection.php';
$mail=$_SESSION['useremail'];

if($mail)
{

$psd_query="SELECT * FROM login WHERE loginemail='$mail'";
$myad_result=$connection->query($psd_query);
global $pass;
while($myad_row=$myad_result->fetch_array()){
$pass=$myad_row['loginpsd'];
}


?>


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
        <h1><?php echo 'welcome '.$_SESSION['useremail']; ?> </h1>
        <h3 class="section-title">Add More Listing</h3>
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
            <div class="adverties">
            <form method="post" action="moreadd.php" enctype="multipart/form-data"class="row">
            <div class="col-lg-2 col-md-6 mb-3"><label><b>Category</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="radio" name="category" checked="" value="1" onchange="showUser(this.value)"> Free Listings</label><br />
            <label><input type="radio" name="category" value="2" onchange="showUser(this.value)" > Top Listings</label><br />
            <label><input type="radio" name="category" value="3"  onchange="showUser(this.value)"> Premium Links</label><br />
            <label><input type="radio" name="category" value="4"  onchange="showUser(this.value)"> VIP escort girls</label>
            </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>Period</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label>
            <div id="txtHint"></div>
           </label>
            </div>

           

            <div class="col-lg-2 col-md-6 mb-3"><label><b>You are</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="radio" name="ad" checked="Independent escort" > Independent escort</label><br />
            <label><input type="radio" name="ad" value="Escort agency" > Escort agency</label><br />
            <label><input type="radio" name="ad" value="Club" > Club</label><br />
            <label><input type="radio" name="ad" value="Escort directory" > Escort directory</label><br />
            <label><input type="radio" name="ad" value="One Year: 560€ (One-time / no recurring)" > One Year: 560€ (One-time / no recurring)</label>
            </div>


            <div class="col-lg-2 col-md-6 mb-3"><label><b>Name</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="text" name="cusname" checked="" ></label>
            <label><input id="Text2" class="counter" readonly type="text" style="width: 30px; text-align:center; position: aboslute;" value="25"></label><br />
            </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>Email</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="text" name="email" checked="" ></label>
            </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>Web</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="text" name="web" checked="" ></label><br />
            <a href="create-site.html" class="createSite">Don’t have a website? Create Your free escort website here<span></span></a>
            </div>


         <div class="col-lg-2 col-md-6 mb-3"><label><b>Title Your Add</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="text" name="title" checked="" ></label>
            <label><input id="Text5" class="counter" readonly type="text" style="width: 30px; text-align:center; position: aboslute;" value="49"></label><br />
            </div>


            <div class="col-lg-2 col-md-6 mb-3"><label><b>Description</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="text" name="des" checked="" ></label>
            <label><input id="Text5" class="counter" readonly type="text" style="width: 30px; text-align:center; position: aboslute;" value="49"></label><br />
            </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>Country</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
<?php
//Include database configuration file
include('connection.php');

//Get all country data
$query = $connection->query("SELECT * FROM countries");

//Count total number of rows
$rowCount = $query->num_rows;
?>

            <label><select name="country" id="country" islands="111" textcity="City" textisland="Islands" usa="-10" >
                         <option value="">Select Country</option>
<?php
if($rowCount > 0){
while($row = $query->fetch_assoc()){ 
echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
}
}else{
echo '<option value="">Country not available</option>';
}
?>
</select></label>
                       </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>State</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><select name="state" id="state">
<option value="">Select country first</option>
</select></label>
            </div>


 <div class="col-lg-2 col-md-6 mb-3"><label><b>City</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><select name="city" id="city">
<option value="">Select state first</option>
</select></label>
            </div>

            <div class="col-lg-2 col-md-6 mb-3"><label><b>Image</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="file" name="fileToUpload" id="fileToUpload"></label>
            </div>

          
            <div class="col-lg-2 col-md-6 mb-3"></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="checkbox" name="privacy" value="" > I have read and agree to the <a href="#">Terms and Conditions, Privacy policy</a></label>
            </div>

             <div class="col-lg-2 col-md-6 mb-3"><label><b>Captcha</b></label></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfG4TwUAAAAAEVEz16iRhTolEGv_3rOaX6Mjnny&amp;co=aHR0cHM6Ly93d3cud29ybGRlc2NvcnRpbmRleC5jb206NDQz&amp;hl=en&amp;v=v1522045847408&amp;size=normal&amp;cb=yssaaizywu0"  class="captcha" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></label><br />
            </div>

            <div class="col-lg-2 col-md-6 mb-3"></div>
            <div class="col-lg-10 col-md-6 mb-3">
            <label><input type="submit" name="send" value="Continue" class="button"></label>
            </div>

            </form>
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

<?php include 'footer.php';

?>


<script>
function showUser(str) {
if (str == "") {
document.getElementById("txtHint").innerHTML = "";
return;
} else { 
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET","getPeriod.php?maincat_id="+str,true);
xmlhttp.send();
}
}
</script>


<script type="text/javascript">
$(document).ready(function(){
$('#country').on('change',function(){
var countryID = $(this).val();
if(countryID){
$.ajax({
type:'POST',
url:'ajaxData.php',
data:'country_id='+countryID,
success:function(html){
$('#state').html(html);
$('#city').html('<option value="">Select state first</option>'); 
}
}); 
}else{
$('#state').html('<option value="">Select country first</option>');
$('#city').html('<option value="">Select state first</option>'); 
}
});

$('#state').on('change',function(){
var stateID = $(this).val();
if(stateID){
$.ajax({
type:'POST',
url:'ajaxData.php',
data:'state_id='+stateID,
success:function(html){
$('#city').html(html);
}
}); 
}else{
$('#city').html('<option value="">Select state first</option>'); 
}
});
});
</script>




<?php 
if
($_SERVER['REQUEST_METHOD']== "POST")

{
$des=$_POST['des'];
$maincat=$_POST['maincat'];
$subcat=$_POST['subcat'];
$ad=$_POST['ad'];
$name=$_POST['cusname'];
$email=$mail;
$website=$_POST['website'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$date=date("F j,Y,g:i a");
$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
$imgcode=rand(11,90000000);
$fileToUpload=$imgcode.".jpg";
$title=$_POST['title'];

$des = mysqli_real_escape_string($connection, $des);


$country_query="SELECT * FROM countries WHERE country_id='$country'";
$myad_result=$connection->query($country_query);
global $country_name;
while($myad_row=$myad_result->fetch_array()){
$country_name=$myad_row['country_name'];
}

$state_query="SELECT * FROM states WHERE state_id='$state'";
$myad_result=$connection->query($state_query);
global $state_name;
while($myad_row=$myad_result->fetch_array()){
$state_name=$myad_row['state_name'];
}

$city_query="SELECT * FROM cities WHERE city_id='$city'";
$myad_result=$connection->query($city_query);
global $city_name;
while($myad_row=$myad_result->fetch_array()){
$city_name=$myad_row['city_name'];
}



$sql="insert into advertise(category,categorytype,defaulttype,cusname,cusemail,website,country,state,city,date,status,image,des,title,country_name,state_name,city_name) 
values('$maincat','$subcat','$ad','$name','$email','$website','$country','$state','$city','$date','pending','$fileToUpload','$des','$title','$country_name','$state_name','$city_name')";

if ($connection->query($sql) === TRUE) {
echo "Link Submitted successfully";
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}




$connection->close();



$imgcode=basename($_FILES["fileToUpload"]["name"]);
$target_dir = "adimage/";
$target_file = $target_dir . $imgcode;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
//echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "Image not found";
$uploadOk = 0;
}
}
// Check if file already exists
if (file_exists($target_file)) {
echo "<br>File already exists";
$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 90000000) {
echo "<br>Image must be less than 5MB";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "<br>Upload failed";
// if everything is ok, try to upload file
} else {

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//echo "Ad Posted Successfully";
//echo "real name ".$fileToUpload;
rename("adimage/$imgcode","adimage/$fileToUpload");

} else {
echo "File upload error !!";
}
}





}


?>  



<?php }
else
{
    echo '<script type="text/javascript">alert("plz login");window.location=\'login.php\';</script>';
    
}
?>
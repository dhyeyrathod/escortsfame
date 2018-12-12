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
        <h3 class="section-title">New user account</h3>
        <p>Please enter the required information below:</p>
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
            <form method="post" action="addetail.php" enctype="multipart/form-data" class="row">
             <div class="col-lg-4 col-md-6 mb-3"><label><b>Main Category</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><select name="maincat" onchange="showUser(this.value)"  required>
<option value="">Select a Main Category:</option>
<?php 
$sql_maincat = "SELECT * FROM category";
$result_maincat = $connection->query($sql_maincat);
while ( $row_maincat = $result_maincat->fetch_assoc() ) { ?>
<option value="<?php echo $row_maincat['categoryid'] ?>"><?php echo $row_maincat['cat_name'] ?></option>
<?php } ?>
</select></label></div>

          
             <div class="col-lg-4 col-md-6 mb-3"><label><b>Period</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3">
            <label>
            <div id="txtHint"></div>
           </label>
            </div>




            <div class="col-lg-4 col-md-6 mb-3"><label><b>Ad Type:</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3">
                <input type="radio" name="ad" value="Independent escort" required>
               <label>Independent escort</label>
                <div class="clearfix"></div>
               <input type="radio" name="ad" value="Escort agency">
               <label>Escort agency</label>
               <div class="clearfix"></div>
               <input type="radio" name="ad" value="club">
               <label>Club</label>
               <div class="clearfix"></div>
               <input type="radio" name="ad" value="Escort directory">
               <label>Escort directory</label>
                
            </div>


            <div class="col-lg-4 col-md-6 mb-3"><label><b>Enter Your Name</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><input type="text" name="cusname" checked="" ></label></div>

            <div class="col-lg-4 col-md-6 mb-3"><label><b>Enter Your Email Address:	</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><input type="email" name="email" checked="" ></label></div>

            <div class="col-lg-4 col-md-6 mb-3"><label><b>Re-Enter Your Website</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><input type="text" name="Website" checked="" ></label></div>


            <div class="col-lg-4 col-md-6 mb-3"><label><b>Title Of Your Add</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><input type="text" name="title" checked="" ></label></div>

            <div class="col-lg-4 col-md-6 mb-3"><label><b>Description	</b></label></div>
            <div class="col-lg-8 col-md-6 mb-3"><label><input type="textarea" name="des" checked="" onkeyup="return limitlength(this, 800)"></label></div>


 <div class="col-lg-4 col-md-6 mb-3"><label><b>Country	</b></label></div>
<div class="col-lg-8 col-md-6 mb-3">
<?php
//Include database configuration file
include('connection.php');

//Get all country data
$query = $connection->query("SELECT * FROM countries");

//Count total number of rows
$rowCount = $query->num_rows;
?>

  <select name="country" id="country"  required>
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
</select>
</div>

 <div class="col-lg-4 col-md-6 mb-3"><label><b>Country First	</b></label></div>
<div class="col-lg-8 col-md-6 mb-3">
<select name="state" id="state" >
<option value="">Select country first</option>
</select>
</div>


 <div class="col-lg-4 col-md-6 mb-3"><label><b>State First	</b></label></div>
<div class="col-lg-8 col-md-6 mb-3">
<select name="city" id="city" >
<option value="">Select state first</option>
</select>                           
</div>	
										


 <div class="col-lg-4 col-md-6 mb-3"><label></label></div>
<div class="col-lg-8 col-md-6 mb-3">

<label class="cabinet">
<input type="file" class="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);" placeholder="upload image here">

</label>
</div>













            <div class="col-lg-4 col-md-6 mb-3"></div>
            <div class="col-lg-8 col-md-6 mb-3">
            <label><input type="submit" name="send" value="Create Account Activation " class="button"></label>
            </div>

            </form>
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
xmlhttp.open("GET","getuser.php?maincat_id="+str,true);
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

<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah').attr('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
}
</script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
 
</script>


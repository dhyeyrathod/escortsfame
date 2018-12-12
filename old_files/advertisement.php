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
        <h3 class="section-title">Advertise Escorts Fame</h3>
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
            <form method="post" action="addetail.php" enctype="multipart/form-data"class="row">
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


 <h4> Premium Links</h4>   
<p> Premium links bring you much more traffic than Free advertising!
<br />
As soon as you choose the country, Premium links appear on the right side of the website with small image. Premium links keep changing randomly and provide a direct link to your website.
<br />

There are following options how to advertise under Premium Links:
<br />
One month: 40€ then 36€ billed every 30 days<br />
One month: 40€<br />
Three months: 100€<br />
Six months: 190€<br />
One Year: 360€<br /><br />
 
 <h4>VIP escort girls</h4>
Use an unique advertising which brings you the most traffic!<br />

VIP home profiles appear at the top of the home page. You just need one picture.<br />

VIP home profiles advertising provides a direct link to your website.<br />

VIP home profiles keep changing randomly.<br />


<b>There are following options how to advertise under VIP home profiles:</b><br />

One month: 60€ then 54€ billed every 30 days<br />
One month: 60€<br />
Three months: 160€<br />
Six months: 300€<br />
One Year: 560€<br /><br />
 
 <h4>Banner options</h4>
<b>This is a perfect option for giving your site maximum visibility!</b><br />


1. Right side banners<br />

2. Left side banners<br />

3. Upper Gold text link<br />

4. Upper Red text link<br />


Please contact our administrator for more details and payment options.<br />

abc@gmail.com<br /><br />

 
<b> Reasons why to join worldescortindex.com directory:</b><br />
Huge traffic to your site!<br />
Over 100 000 page views daily!<br />
Covering more than 80 countries!<br />
All global business cities represented!<br />
We offer a wide range of advertising possibilities to fit every need of High-Class Escorts, Escort Agencies and clubs<br />
With a Premium Escort Ads at Worldescortindex.com we send you a very high potential of new customers every day. Just add your site to our database.
 
 <br /><br />
 

<h4> Rules and conditions:</h4>
1. Only escort agencies, independent escorts, clubs (privat) and directories can advertise here (no porn sites, text links or webcam sites).
<br />
2. When putting our banner on your home page, please place it visibly on your site. We won´t approve your site without the return link.
<br />
3. In case your site becomes unavailable in the future or you enter an incorrect information to your listing, your site will be removed.
<br />
4. Your site can be listed only once in each section. In case you list your site more than ones we delete it from our directory.
<br />
5. Once you provide your listing, your site will be approved by an administrator within three working days, usually within 24hrs.
          </p>  </div>
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





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
          <form id="snippet--select-container" class="row">
            <div class="col-lg-6 col-md-6 mb-2 mt-2"> <span><i class="fa fa-globe"></i></span>

              <select id="select-country" name="country" class="hasCustomSelect" onchange="showcity(this.value)" >
                <option value="">-choose country-</option>
                <?php
  $sql_maincat = "SELECT * FROM countries where status=1 order by rand() ";
//$sql_maincat = "SELECT * FROM countries where country_name='india'";
$result_maincat = $connection->query($sql_maincat);

while ( $row_maincat = $result_maincat->fetch_assoc() ) { $id=$row_maincat['country_id'] ;
$country_name=$row_maincat['country_name'] ;
$country_id=$row_maincat['country_id'] ;

?>
     
  
  <option value="<?php echo $country_id;?>"><?php echo $country_name;?></option>
<?php }?>

              </select>
            </div>
 



            <div class="col-lg-6 col-md-6 mb-2 mt-2" id="txtcity"> <span><i class="fa fa-map-marker"></i></span>
              <select id="select-city" name="city" class="hasCustomSelect" >
                <option value="">-choose city-</option>
              </select>
            </div>
         </form>
          
        </div>
      </div>
      <header class="section-header">
        <h3 class="section-title">Escorts Directory</h3>
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
        <div class="col-lg-8 col-md-6">
          <div class="row">

             <div id="ajaxdata"></div>


<?php
if(isset($_GET['act']))
{
$choice=$_GET['act'];
$city_query="SELECT * FROM cities WHERE city_name='$choice'";
$myad_result=$connection->query($city_query);
global $cityid;
while($myad_row=$myad_result->fetch_array()){
    $cityid=$myad_row['city_id'];
      
}

$page= (isset($_GET['page']) && $_GET['page']>0)?(int)$_GET['page']:1;
$perpage = 24;
$limit = ($page>1)?($page * $perpage) - $perpage : 0;
$data_query="SELECT SQL_CALC_FOUND_ROWS * FROM advertise WHERE city='$cityid' LIMIT {$limit},{$perpage}";
$myad_result=$connection->query($data_query);
$total=$connection->query("Select FOUND_ROWS() as total");
$total=$total->fetch_assoc()['total'];
$pages = ceil($total/$perpage);


//$data_query="SELECT SQL_CALC_FOUND_ROWS * FROM advertise WHERE city='$cityid' LIMIT {$limit},{$perpage}";
//$myad_result=$connection->query($data_query);

while($myad_row=$myad_result->fetch_array()){
    
?>


<div class="col-lg-2 col-md-6 mb-4 pl-2 pr-2"> 
<a href="<?php echo $myad_row['website'];?>" target="_blank">    

<div class="img-box">
 <img src="adimage/<?php echo $myad_row['image'];?>"></a>
<h2><?php echo $myad_row['title'];?></h2>
</div>
</a>
<div class="box-shadow"></div>

        <?php }}

     else {
       ?>
    
    
    
    
  <div id="load_data"></div>

 
    
<?php }?>

     
          </div>
          
          
          <header class="section-header">
            <h3 class="section-title">Recently Added</h3>
          </header>
          <div class="row">

   

            <div class="col-lg-6 col-md-6">
              <div class="recently-menu">
                            <?php 
        $loc_query="SELECT * FROM advertise order by rand()";
$myad_result=$connection->query($loc_query);

while($myad_row=$myad_result->fetch_array()){ 
        ?>
                <ul>
                  <li><a href="href="<?php echo $myad_row['website'];?>"><span><i class="fa fa-chevron-right"></i></span> <?php echo $myad_row['cusname'];?></a>:-<span><?php echo $myad_row['title'];?></span></li>
                  
                </ul>

                <?php }?>
              </div>
            </div>


            <div class="col-lg-6 col-md-6">
               <div class="recently-menu">
                            <?php 
        $loc_query="SELECT * FROM advertise order by rand()";
$myad_result=$connection->query($loc_query);

while($myad_row=$myad_result->fetch_array()){ 
        ?>
                <ul>
                  <li><a href="href="<?php echo $myad_row['website'];?>"><span><i class="fa fa-chevron-right"></i></span> <?php echo $myad_row['cusname'];?></a>:-<span><?php echo $myad_row['title'];?></span></li>
                  
                </ul>

                <?php }?>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="recently-bg">
                <p>World Escort Index is one of the biggest international escort directories. World Escort Index's directory lists thousands of escort websites and escort Ads. You will find there deluxe escorts providing high class escort services in every major city in the world. All these listings are regularly checked to ensure that the escort services offered there are up to date. For this reason we have become the most widely used escort directory bringing huge levels of traffic to our advertisers. Initially we focused on European escorts but over time we expanded to provide our services on a global basis so we become worldwide escort directory.</p>
                <p>At World Escort Index's Directory you will find several categories of advertisements for escorts. The most popular escort listings with clients are those which carry pictures of the escorts in their homes tagged "VIP Escort Girls". These escort Ads are placed by the most sought after escorts including adult film stars, porn stars, top class companions, elite escort models and VIP companions providing VIP escort services. All of these have the highest satisfaction customer escort reviews. </p>
                <p>Other categories of advertisements with high levels of traffic are "Premium Links" and "Top Listed Escorts". The lowest levels of traffic go to the "Free Listings" advertisements. In this category you will find escort listings of, for example, models described as, erotic models, girls for sex, call girls, strippers, dancers, Asian porn star escorts, female escorts, male escorts, shemale escorts, GFE and massage service providers. </p>
                <p>In all categories of escort advertisements at World Escort Index Directory you will find the following: escort agencies list, independent escorts list, strip clubs, cabarets, brothels, lap dance bars, dancing clubs list. All the escorts provide either out call services or in call services. Clients can choose escorts from different categories such as black or ebony escorts, Asian escorts, BBW escorts, busty escorts, busty blonde escorts and many others. </p>
                <p>"I am an escort, where can I advertise?"</p>
                <p>"I own an elite escort agency or strip club, where can I list my ladies?"</p>
                <p>The answer is simple. Advertise in the World Escort Index Directory. Become part of our adult web search engine. All types of adult escort services websites are welcome. At World Escort Index Directory your clients can easily organise adult meetings and access escort hire services. </p>
                <p>Check out escorts2.com - free adult classifieds. Free to browse and free to post. Listings in all large cities around the world. Ads for female, male, and ts escorts. </p>
              </div>
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

<script>
$(document).ready( function () {


        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("load_data").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","load_data.php",true);
        xmlhttp.send();
 
});

</script>

<script>
function showcity(str) {
    if (str == "") {
        document.getElementById("txtcity").innerHTML = "";
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
                document.getElementById("txtcity").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getallcity.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<script>
function selectcity(str) {
    if (str == "") {
        document.getElementById("ajaxdata").innerHTML = "";
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
                document.getElementById("ajaxdata").innerHTML = this.responseText;
                document.getElementById("load_data").innerHTML = "";

           
            }
        };
        xmlhttp.open("GET","getajaxdata.php?z="+str,true);
        xmlhttp.send();
    }
}
</script>





<?php include 'footer.php';

?>
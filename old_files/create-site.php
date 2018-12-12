
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
        <h3 class="section-title">Create free escort site for independent escorts</h3>
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
            <div class="recently-bg">
              <p><span><i class="fa fa-angle-double-right"></i></span> Are you an independent escort and don't have your own website? Then you are on the right place. To submit your listing at World Escort Index you must have your escort website </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> In few easy steps you create your own website in few minutes. </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> Manage your site's content and photos. You just need to login to your account. </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> Creating a website is for free! We don't charge any fees. </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> In case you would have any problems during the process don't hesitate to contact our support at abc@gamil.com </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> Once escort site is created we check your content. Site is going to be approved in 48h maximum and will be visible at World Escort Index directory. Is prohibited to create site for escort agencies and clubs. </p>
              <p><span><i class="fa fa-angle-double-right"></i></span> If you already have your own website submit your listing through our advertising form.</p>
              <div class="Get-Started"><a href="create-site-register.php">Get Started <span> <i class="fa fa-play"></i></span></a></div>
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

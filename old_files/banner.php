
<?php include 'header.php';
include 'connection.php';?>
 <main id="main">
  <section id="portfolio"  class="section-bg" >
    <div class="container">
     
      
      <header class="section-header">
        <h3 class="section-title">Escorts Fame Banners </h3>
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
            <div class="col-lg-12 col-md-6 mb-4 pl-2 pr-2">
              <div class="our-banner"> <img src="images/banner.gif" />
                <div class="clearfix"></div>
                <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                <img src="images/banner.gif" style=" width:400px;" />
                <div class="clearfix"></div>
                <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                <img src="images/banner.gif"  style=" width:300px;"/>
                <div class="clearfix"></div>
                <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                <img src="images/banner.gif" style=" width:250px;" />
                <div class="clearfix"></div>
                <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                <img src="images/banner.gif" style=" width:200px;" />
                <div class="clearfix"></div>
                <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
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
<!--Footer-->
<?php include 'footer.php';?>

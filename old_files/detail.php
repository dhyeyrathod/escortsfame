
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
        <h3 class="section-title">Profile for <?php 

        $locd_query="SELECT * FROM advertise  where adid='".$_REQUEST['id']."' ";
$myadd_result=$connection->query($locd_query);

while($myadd_row=$myadd_result->fetch_array()){ 
        ?>
        <span style="color:#fff;"><?php echo $myadd_row['cusname'];?></span>
        <?php } ?></h3>
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
            <div class="table-formate">
                <table cellpadding="10" border="1">

<?php 

        $loc_query="SELECT * FROM advertise  where adid='".$_REQUEST['id']."' ";
$myad_result=$connection->query($loc_query);

while($myad_row=$myad_result->fetch_array()){ 
        ?>
<tr>
<td style="font-size:16px;color:#fdd678;">Name </td>
<td style="font-size:16px;color:#fdd678;"><?php echo $myad_row['cusname'];?></td>
</tr>
<tr>
<td>Photo </td>
<td><img src="adimage/<?php echo $myad_row['image'];?>" ></td>
</tr>
<tr>
<td>Advertise Type </td>
<td><?php echo $myad_row['defaulttype'];?></td>
</tr>
<tr>
<td>Email </td>
<td><?php echo $myad_row['cusemail'];?></td>
</tr>
<tr>
<td>Country </td>
<td><?php echo $myad_row['country_name'];?></td>
</tr>
<tr>
<td>State </td>
<td><?php echo $myad_row['state_name'];?></td>
</tr>
<tr>
<td>Description </td>
<td><?php echo $myad_row['des'];?></td>
</tr>

<?php } ?>
</table>
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

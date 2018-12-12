<?php
$z = intval($_GET['z']);
include 'connection.php';



$sql="SELECT * FROM advertise WHERE city=$z and paymentstatus='paid'";
$result = mysqli_query($connection,$sql);
?>
<div class="col-md-12">    
<div class="row">
<?php  $row_cnt = $result->num_rows;
  if($row_cnt<1)
  {
      echo 'Sorry There is no data in your location';
      
  }
while($row = mysqli_fetch_array($result)) {

?>
    
<a href="<?php echo $row['website'];?>">    
<div class="col-sm-2 padding-control">
<div class="img-box">
    <a href="<?php echo $row['website'];?>" target="_blank"><img src="adimage/<?php echo $row['image'];?>"></a>
<h2><?php echo $row['title'];?></h2>
</a>
</div>
</div>
</a>    
    
    
    
    
<?php
}
mysqli_close($connection);
?>
</div>
</div>    

<div class="col-md-12">    
    <div class="row">
        <br><br>
        <hr> 
    </div>
</div>
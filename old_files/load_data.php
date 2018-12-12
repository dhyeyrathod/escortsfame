<?php

include 'connection.php';

$page= (isset($_GET['page']) && $_GET['page']>0)?(int)$_GET['page']:1;
$perpage = 24;
$limit = ($page>1)?($page * $perpage) - $perpage : 0;
$loc_query="SELECT SQL_CALC_FOUND_ROWS * FROM advertise where paymentstatus='paid' order by rand() LIMIT {$limit},{$perpage}";
$myad_result=$connection->query($loc_query);
$total=$connection->query("Select FOUND_ROWS() as total");
$total=$total->fetch_assoc()['total'];
$pages = ceil($total/$perpage);

while($myad_row=$myad_result->fetch_array()){
?>

<div class="col-lg-2 col-md-6 mb-4 pl-2 pr-2">
<a href="<?php echo $myad_row['website'];?>" target="_blank">    

<div class="img-box">
 <img src="adimage/<?php echo $myad_row['image'];?>">
<h2><?php echo $myad_row['title'];?></h2>
</div>
</a>
</div>
   
<?php
}

?>
  


<?php
include 'connection.php'; 
$maincat_id = $_GET['maincat_id'];
?>
<div class="col-sm-8">

    <select name="subcat" class="col-sm-8 padding-control" required>
  <?php 
  	$sql_subcat = "SELECT * FROM categorytype WHERE categoryid='$maincat_id'";
  	$result_subcat = $connection->query($sql_subcat);
  	while ( $row_subcat = $result_subcat->fetch_assoc() ) { ?>
  	<option value="<?php echo $row_subcat['typeid'] ?>"><?php echo $row_subcat['typename'] ?></option>
  <?php	} ?>
</select>
</div>
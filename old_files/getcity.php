<?php
include 'connection.php'; 
$maincat_id = $_GET['maincat_id'];
?>
Select Plan
<select name="subcat" class="select>
  <?php 
  	$sql_subcat = "SELECT * FROM categorytype WHERE categoryid='$maincat_id'";
  	$result_subcat = $connection->query($sql_subcat);
  	while ( $row_subcat = $result_subcat->fetch_assoc() ) { ?>
  	 	<option value="<?php echo $row_subcat['typeid'] ?>"><?php echo $row_subcat['typename'] ?></option>
  <?php	} ?>
</select><br>
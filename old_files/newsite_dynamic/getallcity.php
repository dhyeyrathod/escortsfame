<?php
$q = intval($_GET['q']);
include 'connection.php';



$sql="SELECT * FROM cities WHERE country_id=$q";
$result = mysqli_query($connection,$sql);
?>

<selectid="select-city" name="city" class="hasCustomSelect" onchange="selectcity(this.value)">
<?php    
while($row = mysqli_fetch_array($result)) {
   
   // echo "<td>" . $row['state_id'] . "</td>";
    $city_name=$row['city_name'];
     $city_id=$row['city_id'];
    echo "<option value='$city_id'>$city_name</option>";

}
?>
</select>
<?php
mysqli_close($connection);
?>
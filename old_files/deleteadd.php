<?php 
if(isset($_GET['act']))
        {
$id=$_GET['act'];

include 'connection.php';


$img_query="SELECT * FROM advertise WHERE adid='$id'";
$img_result=$connection->query($img_query);
while($img_row=$img_result->fetch_array()){

$image=$img_row['image'];
unlink('adimage/'.$image);	
}






$sql = "delete from `advertise` WHERE `adid`='$id'";
if ($connection->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Your Add Has Been Deleted");window.location=\'allads.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
 }
?>
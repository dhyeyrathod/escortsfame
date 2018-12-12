<?php 

include 'connection.php';
$email=$_POST['email'];
$email_query="SELECT * FROM login WHERE loginemail='$email'";
$myad_result=$connection->query($email_query);
$row_count = mysqli_num_rows($myad_result);
if($row_count>=1)
{

echo '<script type="text/javascript">alert("You already have account plz login");window.location=\'login.php\';</script>';
    
}
else
{
    
 
$des=$_POST['des'];
$maincat=$_POST['maincat'];
$subcat=$_POST['subcat'];
$ad=$_POST['ad'];
$name=$_POST['cusname'];
$email=$_POST['email'];
$website=$_POST['website'];

$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$date=date("F j,Y,g:i a");
$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
$imgcode=rand(11,90000000);
$fileToUpload=$imgcode.".jpg";
$title=$_POST['title'];


$country_query="SELECT * FROM countries WHERE country_id='$country'";
$myad_result=$connection->query($country_query);
global $country_name;
while($myad_row=$myad_result->fetch_array()){
$country_name=$myad_row['country_name'];
}

$state_query="SELECT * FROM states WHERE state_id='$state'";
$myad_result=$connection->query($state_query);
global $state_name;
while($myad_row=$myad_result->fetch_array()){
$state_name=$myad_row['state_name'];
}

$city_query="SELECT * FROM cities WHERE city_id='$city'";
$myad_result=$connection->query($city_query);
global $city_name;
while($myad_row=$myad_result->fetch_array()){
$city_name=$myad_row['city_name'];
}




$des = mysqli_real_escape_string($connection, $des);

$sql="insert into advertise(category,categorytype,defaulttype,cusname,cusemail,website,country,state,city,date,status,image,des,title,country_name,state_name,city_name) 
		values('$maincat','$subcat','$ad','$name','$email','$website','$country','$state','$city','$date','pending','$fileToUpload','$des','$title','$country_name','$state_name','$city_name')";

if ($connection->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Your Add Uploaded");window.location=\'login.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
$autopsd=rand_string(8);
//echo $autopsd;


$query = $connection->query("SELECT * FROM advertise where cusemail='$email'");
$rowCount = $query->num_rows;

global  $adid;
 while($row = $query->fetch_assoc())
 { 
  
$adid= $row['adid']; 
	     
 }
 //echo $adid;
 
 $loginquery="insert into login(loginemail,loginpsd,adid) 
values('$email','$autopsd','$adid')";
 
 if ($connection->query($loginquery) === TRUE) {
    echo "";
} else {
    echo "Error: " . $loginquery . "<br>" . $connection->error;
}


$to = "$email";
$subject = "Your Login Details";
$txt = "Your Login Email Id : ".$email."Your Password is : ".$autopsd;
$headers = "$email";


 $retval = mail($to,$subject,$txt,$headers);
         
         if( $retval == true ) {
            echo "<h1>Thank You ...</h1>";
         }else {
            echo "Message could not be sent...";
         }


  
$connection->close();



$imgcode=basename($_FILES["fileToUpload"]["name"]);
$target_dir = "adimage/";
$target_file = $target_dir . $imgcode;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Image not found";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<br>File already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 90000000) {
    echo "<br>Image must be less than 5MB";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Upload failed";
// if everything is ok, try to upload file
} else {
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "Ad Posted Successfully";
		//echo "real name ".$fileToUpload;
		rename("adimage/$imgcode","adimage/$fileToUpload");
		
    } else {
        echo "File upload error !!";
    }
}

}

?>


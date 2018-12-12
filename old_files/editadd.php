
<?php 

//echo '<pre>';
//print_r($_REQUEST);
$id=$_REQUEST['id'];

?>

<?php 
error_reporting(0);
session_start();
include 'connection.php';




?>



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

        <h3 class="section-title">Edit Add</h3>

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

        <div id="id="contact" class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">

          <div class="contactbox-bg">

            
<?php 
$mail =$_SESSION['useremail'];
$myad_query="SELECT * FROM advertise WHERE adid='$id'";
$myad_result=$connection->query($myad_query);
global $c_id,$adid,$category,$categorytype,$defaulttype,$cusname,$cusemail,$website,$country,$state,$city,$image,$des,$title;
while($myad_row=$myad_result->fetch_array()){
$adid=$myad_row['adid'];
$category=$myad_row['category'];
$category_id=$myad_row['category'];
$categorytype_id=$myad_row['categorytype'];
$categorytype=$myad_row['categorytype'];

$defaulttype=$myad_row['defaulttype'];
$cusname=$myad_row['cusname'];
$cusemail=$myad_row['cusemail'];
$website=$myad_row['website'];
$country=$myad_row['country'];
$c_id=$myad_row['country'];
$s_id=$myad_row['state'];
$city_id=$myad_row['city'];
$state=$myad_row['state'];

$city=$myad_row['city'];

$image=$myad_row['image'];
$des=$myad_row['des'];
$title=$myad_row['title'];

}
$category_query="SELECT * FROM category WHERE categoryid='$category'";
$myad_result=$connection->query($category_query);
global $category;
while($myad_row=$myad_result->fetch_array()){
$category=$myad_row['cat_name'];
}

$categorytype_query="SELECT * FROM categorytype WHERE typeid='$categorytype'";
$myad_result=$connection->query($categorytype_query);
global $categorytype;
while($myad_row=$myad_result->fetch_array()){
$categorytype=$myad_row['typename'];
}

$country_query="SELECT * FROM countries WHERE country_id='$country'";
$myad_result=$connection->query($country_query);
global $country;
while($myad_row=$myad_result->fetch_array()){
$country=$myad_row['country_name'];
}

$state_query="SELECT * FROM states WHERE state_id='$state'";
$myad_result=$connection->query($state_query);
global $state;
while($myad_row=$myad_result->fetch_array()){
$state=$myad_row['state_name'];
}
$city_query="SELECT * FROM cities WHERE city_id='$city'";
$myad_result=$connection->query($city_query);
global $city;
while($myad_row=$myad_result->fetch_array()){
$city=$myad_row['city_name'];
}

?>

            <div class=" col-lg-6 m-auto pt-4 pb-4 form">

             

              <div id="errormessage"></div>

             <form action="editadd.php" method="post" enctype="multipart/form-data">  


    <input type="hidden" name="id" value="<?php echo $id;?>">
<input class="form-control" type="text" name="cusname" placeholder="Enter Your Name" value="<?php echo $cusname;?>">

<input class="form-control" type="url" name="website" placeholder="Website" value="<?php echo $website;?>">
<input class="form-control" type="text" name="title" placeholder="Title Of Your Add" value="<?php echo $title;?>">
<textarea class="form-control" placeholder="Description" name="des" ><?php echo $des;?></textarea>

<img src="adimage/<?php echo $image ?>" height="200" width="200">

<input type="file" class="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);" placeholder="upload image here">

<img id="blah" src="#" alt="image preview" height="250" width="250"/>
<input type="submit" value="Edit Add" name="submit">





</form> 

            </div>

          </div>

        </div>

        <div class="col-lg-2 col-md-6">

      
                    <a href="moreadd.php" class="side-menu">Advertise</a>
        <a href="allads.php" class="side-menu">All Ads</a>
        <a href="changepsd.php" class="side-menu">Reset Password</a>
        <a href="deleteaccount.php" class="side-menu">Delete Account</a>
        <a href="logout.php?act=logout" class="side-menu">Logout</a>
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

<?php 
if
($_SERVER['REQUEST_METHOD']== "POST")

{
$id=$_POST['id'];
$cusname=$_POST['cusname'];
$website=$_POST['website'];
$title=$_POST['title'];
$des=$_POST['des'];
$des = mysqli_real_escape_string($connection, $des);

$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
$imglen=strlen($fileToUpload);

if($imglen>2)
{    
$imgcode=rand(11,90000000);
$fileToUpload=$imgcode.".jpg";

$sql="update advertise set cusname='$cusname',website='$website',title='$title',des='$des',image='$fileToUpload' where adid='$id'";

if ($connection->query($sql) === TRUE) {
    echo "Add Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
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

echo '<script type="text/javascript">alert("Add Updated");window.location=\'allads.php\';</script>';



}
else
{
 $sql="update advertise set cusname='$cusname',website='$website',title='$title',des='$des' where adid='$id'";

if ($connection->query($sql) === TRUE) {
    echo "Add Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();   
 echo '<script type="text/javascript">alert("Add Updated");window.location=\'allads.php\';</script>';   
    
}    



}

?>  
 

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    
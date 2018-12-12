<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classify | Classify ads HTML Template</title>
<link href="images/favicon.png" rel="icon">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/star-rating.css">

</head>
<body>

<!--Start Header section-->
<?php include 'header.php';
include 'connection.php';
?>
    
    <section id="formSubmit">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-6 col-md-6 pl-2 pr-2 m-auto">

                    <div class="adverties">
                    <div class="user-form">
                        <div class="user-form-set">
                            <h4>LOGIN</h4>
                            <form method="post" class="form-group row" action="profile.php">
                                
                                 <div class="col-lg-12 mb-3">
                                  <!--  <span class="fa fa-user form-control-feedback"></span>-->
                                    <input class="form-control" type="text" name="useremail" placeholder="User Email" required data-validation="email" data-validation-error-msg="Enter Correct Email Id">
                                </div>
                                 <div class="col-lg-12 mb-3">
                                  <!--  <span class="fa fa-unlock-alt form-control-feedback"></span>-->
                                    <input class="form-control" type="password" name="userpsd" placeholder="Password" required>
                                </div>
                                 <div class="col-lg-4 mb-1">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                                
                                <div class="col-lg-8 mb-1">
                                 <input type="submit" name="login" value="login" class="button" style="width:150px!important;">
                                </div>
                                
                                <!--<div class="col-lg-12 mb-3">-->
                                <!--    <p><a href="changepsd.php">Forgot Password?</a></p>-->
                                <!--</div>-->
                                
                                <div class="col-lg-4 mb-3">
                                   <p>Are you a new here? </p>
                                </div>
                                <div class="col-lg-8 mb-3">
                                 <a href="create-site-register.php">Get Register Free</a>
                                </div>
                                
                            </form>
                           

						  
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
	<?php include 'footer.php';?>

</body>


</html>

<?php
if
($_SERVER['REQUEST_METHOD']== "POST")

{

session_start();
$username = $_POST['loginname'];
$password = $_POST['loginpassword'];
$_SESSION['useremail']=$_POST['loginname'];

$sql_login = "SELECT DISTINCT loginemail, loginpsd FROM login WHERE loginemail='$username' AND loginpsd='$password'";
$result_login = $connection->query($sql_login);
$num_row = mysqli_num_rows($result_login);
$row_login = $result_login->fetch_assoc();


if ( $num_row == 1 ) { 	
	echo '<script type="text/javascript">alert("Login Done");window.location=\'profile.php\';</script>';


	

	
} else {
	
	echo '<script type="text/javascript">alert("Login Fail");</script>';
	

}



}?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
 
</script>
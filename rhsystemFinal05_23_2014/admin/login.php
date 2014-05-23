<?php
session_start();
error_reporting(0);
//classes
include_once '../Classes/User.php';
//Objects
$user=new User();
//Variables
$error='';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

 $myusername=addslashes($_POST['username']); 
 $mypassword=addslashes($_POST['password']); 

// consulta
$user->setEmail($myusername);
$user->setPassword($mypassword);
$result=$user->getIdUserLogin();
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location: index.php");
echo '<h1>ENTRe</h1>';

}
else 
{
$error="Your user name or password is invalid";
}
}
?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingboard-v1.1/page-login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 09 May 2014 16:33:47 GMT -->
<head>
	<title>Sanco Business</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="King Dashboard">
	<meta name="author" content="The Develovers">

	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.min.css" rel="stylesheet" type="text/css">

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingboard-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingboard-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingboard-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingboard-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

</head>

<body>
	<div class="full-page-wrapper page-login text-center">

		<div class="inner-page">

			<div class="logo">
				<a href="index.html">
                                    <img src="..\images\sanco_logo.png" alt="" />
				</a>
			</div>
		
		

			<div class="login-box center-block">
				<form action="" method="post">
					
					<div class="input-group">
						<input type="email" name="username" placeholder="email" class="form-control">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
					<div class="input-group">
						<input type="password" name="password" placeholder="password" class="form-control">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					</div>
				
					<button class="btn btn-custom-primary btn-lg btn-block btn-login"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
				</form>

				<div class="links">
					<p><a href="#">Forgot Username or Password?</a></p>
				
				</div>
                            <center>    
                            <?php echo $error;?>
                            </center>
                        
                        </div>
		</div>

		<footer class="footer">&copy; 2014 Sanco business solutions</footer>

	</div>

	<!-- Javascript -->
	<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>

</body>


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingboard-v1.1/page-login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 09 May 2014 16:33:47 GMT -->
</html>
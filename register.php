<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['insert']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$dob=$_REQUEST['dob'];
	$phone=$_REQUEST['phone'];
	
	if(!empty($name) && !empty($email) && !empty($pass)  && !empty($dob) && !empty($phone))
	{
		$pass = sha1($pass);
		$sql="insert into admin (auser,aemail,apass,adob,aphone) values('$name','$email','$pass','$dob','$phone')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg='Admin Register Successfully';
				
						
			}
			else
			{
				$error='* Not Register Admin Try Again';
			}
	}
	else{
		$error="* Please Fill all the Fields!";
	}
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Rumah Ningrat Property</title>
</head>
<body>
	
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

		<!-- Main Wrapper -->
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<p style="color:red;"><?php echo $error; ?></p>
								<p style="color:green;"><?php echo $msg; ?></p>
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Username" name="name">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Password" name="pass">
									</div>
									<div class="form-group">
										<input class="form-control" type="date" placeholder="Date of Birth" name="dob">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Phone" name="phone" maxlength="10">
									</div>
									<div class="form-group mb-0">
										<input class="btn btn-primary btn-block" type="submit" name="insert" Value="Register">
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<!--<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="google"><i class="fa fa-google"></i></a>
									<a href="#" class="facebook"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google"><i class="fa fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="index.php">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
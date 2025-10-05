<?php
include("config.php");
session_start();

$error = "";
$msg = "";

if (!isset($_SESSION['uemail'])) {

}

if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];

    if (!empty($name) && !empty($phone) && !empty($content)) {
        $sql = "INSERT INTO feedback ( fdescription, status) VALUES ( '$content', '0')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Feedback Sent Successfully</p>";
        } else {
            $error = "<p class='alert alert-warning'>Feedback Not Sent</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill All Fields</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
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
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Rumah Ningrat Property</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner -->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
        <!--	Banner -->
		<!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	Contact Information -->
        <div class="full-row">
		<div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-secondary double-down-line text-center">Feedback Form</h2>
                    <?php echo $msg; ?>
                    <?php echo $error; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 mx-auto">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="number" name="phone" class="form-control" placeholder="Enter Phone" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label>Your Feedback</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Enter Feedback"></textarea>
                        </div>
                        <button type="submit" name="insert" class="btn btn-success">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>

        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	Contact Inforamtion -->
        
        <!--	Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.550293444785!2d108.50944547364601!3d-6.702480865525885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee18e15fd674f%3A0xe35b497e24242520!2sPT.%20Raja%20Sukses%20Propertindo!5e0!3m2!1sid!2sid!4v1733549325664!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!--	Map -->
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

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
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>  

</body>
</html>
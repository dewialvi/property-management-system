<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$title = $_POST['title'];
    $pcontent = $_POST['pcontent'];
    $type = $_POST['type'];
    $stype = $_POST['stype'];
    $kamar_tidur = $_POST['kamar_tidur'];
    $kamar_mandi = $_POST['kamar_mandi'];
    $garasi = $_POST['garasi'];
    $ukuran_rumah = $_POST['ukuran_rumah'];
    $harga = $_POST['harga'];
    $luas_tanah = $_POST['luas_tanah'];
    $feature = $_POST['feature'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $status = $_POST['status'];
    $isFeatured = isset($_POST['isFeatured']) ? 1 : 0;
    $uid = $_POST['uid'];

	// Upload gambar utama
    $pimage = $_FILES['pimage']['name'];
	$temp_name  =$_FILES['pimage']['tmp_name'];
	move_uploaded_file($temp_name,"admin/property/$pimage");

    // Upload gambar tambahan
    $pimage1 = $_FILES['pimage1']['name'];
	$temp_name  =$_FILES['pimage1']['tmp_name'];
	move_uploaded_file($temp_name,"admin/property/$pimage1");
	
	$sql = $sql = "INSERT INTO property (
		title, pcontent, type, stype, kamar_tidur, kamar_mandi, garasi,
		ukuran_rumah, harga, luas_tanah, feature, location, city, state,
		pimage, pimage1, uid, status, isFeatured
	) VALUES (
		'$title', '$pcontent', '$type', '$stype', '$kamar_tidur', '$kamar_mandi', '$garasi',
		'$ukuran_rumah', '$harga', '$luas_tanah', '$feature', '$location', '$city', '$state',
		'$pimage', '$pimage1', '$uid', '$status', '$isFeatured'
	)";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
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
<!-- FOR MORE PROJECTS visit: codeastro.com -->
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


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="pcontent" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="type">
															<option value="">Select Type</option>
															<option value="komersil">Komersil</option>
															<option value="subsidi">Subsidi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kamar Mandi</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kamar_mandi" required placeholder="Enter Kamar Mandi (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Garasi</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="garasi" required placeholder="Enter Garasi (only no 1 to 10)">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kamar Tidur</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kamar_tidur" required placeholder="Enter Kamar Tidur  (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Harga</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="harga" required placeholder="Enter Harga  (Rp)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ukuran Rumah</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="ukuran_rumah" required placeholder="Enter Ukuran Rumah  (dalam m2)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Luas Tanah</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="luas_tanah" required placeholder="Enter Luas Tanah  (dalam m2)">
													</div>
												</div>
												
											</div>
										</div>
										<h4 class="card-title">Price & Location</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Harga</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="harga" required placeholder="Enter Harga">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kota</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required placeholder="Enter Kota">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Wilayah</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter Wilayah">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Alamat</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="location" required placeholder="Enter Alamat">
													</div>
												</div>
												
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												
									
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Pondasi : </span>Batu Kali</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Struktur : </span>Beton Bertulang</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Dinding : </span>Hebel + Cat, Finish Cat</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Kusen / Jendela : </span>Kayu Mahoni</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Daun Pintu : </span>Panel Kayu (depan), Kayu Mahoni + Triplek 3mm</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Lantai Dasar : </span>Keramik 40x40</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Lantai KM : </span>Keramik 20x20</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Kloset : </span>Jongkok</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Air : </span>PDAM</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Listrik : </span>1300 Watt</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Rangka Atap : </span>Baja Ringan</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Genteng : </span>Beton Flat</li>
														</ul>
													</div>			
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Plafond : </span>Silicaboard Rangka Kayu Kaso</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
											</div>
										</div>
												
											
												
										<h4 class="card-title">Image & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="pimage" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="pimage1" type="file" required="">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Uid</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="uid" required placeholder="Enter User Id (only number)">
													</div>
												</div>
												
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control"  required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>


										
											<input type="submit" value="Submit Property" class="btn btn-info"name="add" style="margin-left:200px;">
										
								</div>
								</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
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
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
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
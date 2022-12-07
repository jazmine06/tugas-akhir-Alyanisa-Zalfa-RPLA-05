<?php
require_once 'function.php';
session_start();
$userLevel = 'guest';
$userName  = null;
if (isset($_SESSION['login'])){
	if ($_SESSION['level'] == 'admin') {
		header('Location: cart.php');
	} else {
		$userLevel = $_SESSION['level'];
		$userName  = $_SESSION['name'];
	}
}
$barang = getBarang();
// var_dump($barang);die;
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>lapakwanita</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">akun</a>
								<ul class="dropdown-menu">
									<?php if ($userLevel != 'user') : ?>
									<li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
									<li class="nav-item"><a class="nav-link" href="register.php">daftar</a></li>
									<?php else : ?>	
										<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
										<?php endif; ?>
								</ul>
							</li>		
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Dior New<br>Collection!</h1>
									<p>Alas bedak ini dikembangkan secara khusus agar sesuai dengan warna kulit Asia dan menonjolkan kilau alaminya. 
										Hasil akhir matte yang bercahaya sangat cocok untuk semua jenis kulit.</p>
									<div class="add-bag d-flex align-items-center">
										
										
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-img (2).png" alt="">
								
									
								</div>
							</div>
						</div>
						
					
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Gratis Ongkir</h6>						
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Kebijakan pengembalian</h6>						
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Mendukung</h6>					
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Pembayaran yang aman</h6>					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Produk</h1>
							<p>Ini adalah produk- produk kebanggan kami</p>
						</div>
					</div>
				</div>
				<div class="row">

				    <?php foreach($barang as $key => $value) : ?>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?= $value[4] ?>" alt="">
							<div class="product-details">
								<h6><?= $value[1] ?></h6>
								<div class="price">
									<h6>Rp <?= number_format((int) $value[2], 0, ',', '.') ?></h6>									
								</div>
								<div class="prd-bottom">

									<a href="cart_func.php?id_barang=<?= $value[0] ?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>																		
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
					
					<!-- <div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p2.jpeg" alt="">
							<div class="product-details">
								<h6> Gucci Parfume Flora Gorgeous Gardenia</h6>
								<div class="price">
									<h6>Rp 1.350.000</h6>
									
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>																		
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p3.jpeg" alt="">
							<div class="product-details">
								<h6> skin Forever PerfeDiorct Cushion Foundation</h6>
								<div class="price">
									<h6>Rp 650.000</h6>									
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p4.jpeg" alt="">
							<div class="product-details">
								<h6>Chanel
									Joues Contraste Powder Blush</h6>
								<div class="price">
									<h6>Rp 750.000</h6>									
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>
									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p5.jpeg" alt="">
							<div class="product-details">
								<h6>DIOR BACKSTAGE EYE PALETTE</h6>
								<div class="price">
									<h6>Rp 980.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>
									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p6.jpeg" alt="">
							<div class="product-details">
								<h6>Chanel Rouge Allure Ink Fusion 830 Fleur de Lotus </h6>
								<div class="price">
									<h6>Rp 500.000</h6>									
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>
									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p9.jpeg" alt="">
							<div class="product-details">
								<h6>SK-II
									Facial Treatment Essence</h6>
								<div class="price">
									<h6>Rp 450.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>
									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p8.jpeg" alt="">
							<div class="product-details">
								<h6>D.I.O.R VERNIS - 449 DANSANTE</h6>
								<div class="price">
									<h6>Rp 700.000</h6>							
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>
									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Produk </h1>
							<p>Ini adalah produk - produk kebanggan kami</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p7.jpeg" alt="">
							<div class="product-details">
								<h6> chanel POUDRE UNIVERSELLE LIBRE
									Natural Finish Loose Powder</h6>
								<div class="price">
									<h6>Rp 2.000.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>								
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p10.jpeg" alt="">
							<div class="product-details">
								<h6>DIOR
									Forever Skin Glow 24H Hydrating Radiant Foundation • 30ml</h6>
								<div class="price">
									<h6>Rp 3.000.000</h6>									
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p11.jpeg" alt="">
							<div class="product-details">
								<h6>Christian Dior Joy Moisturizing Body Lotion Joy Moisturizing 200ml</h6>
								<div class="price">
									<h6>Rp 366.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p12.jpeg" alt="">
							<div class="product-details">
								<h6>Gucci Powder Brush </h6>
								<div class="price">
									<h6>Rp 1.500.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p14.jpeg" alt="">
							<div class="product-details">
								<h6>GUCCI
									GG 18kt rose-gold cuff</h6>
								<div class="price">
									<h6>Rp 20.000.000</h6>									
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p15.jpeg" alt="">
							<div class="product-details">
								<h6>Zara parfume shanghai EDP 100ml</h6>
								<div class="price">
									<h6>Rp 910.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p13.jpeg" alt="">
							<div class="product-details">
								<h6>Kacamata Dior So Stellaire O1F Crystal Clear 58mm</h6>
								<div class="price">
									<h6>Rp 500.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p16.jpeg" alt="">
							<div class="product-details">
								<h6>Yves Saint Laurent Or Rouge Anti-Aging Serum 30ml/1oz</h6>
								<div class="price">
									<h6>Rp 850.000</h6>								
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">tambah ke keranjang</p>
									</a>									
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">lihat lebih banyak</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							WA : 081216655470
						</p>
					</div>
				</div>
				

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				
				
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
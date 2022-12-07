<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Halaman utama</a></li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">belanja</a>
								<ul class="dropdown-menu">						
									<li class="nav-item"><a class="nav-link" href="rincian_produk.php">Rincian produk</a></li>
									<li class="nav-item active"><a class="nav-link" href="checkout.php">buat pesanan</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.php">Keranjang Belanja</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.php">Konfirmasi</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Akun</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									
								</ul>
							</li>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
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
					<input type="text" class="form-control" id="search_input" placeholder="Cari Disini">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Batal Cari"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

    

    <!--================Checkout Area =================-->
    <br>
    <br>
    <section class="checkout_area section_gap">
        
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Detail Penagihan</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group ">
                                <input type="text" class="form-control" id="first" name="name" placeholder ="Nama Awal">
                               
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="last" name="name" placeholder ="Nama Akhir">  
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="number" name="number" placeholder ="Nomor Handphone">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="email" name="compemailany" placeholder ="Alamat Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="add1" name="add1" placeholder ="Detail Alamat">   
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Catatan Pesanan"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Pesanan Anda</h2>
                            <ul class="list">
                                <li><a href="#">Produk <span>Total</span></a></li>
                                <li><a href="#">Chanel le recourbe cils de chanel EYELASH CURLER<span class="middle">x 01</span> <span class="last">Rp 500.000</span></a></li>
                                <li><a href="#">Gucci Parfume Flora Gorgeous Gardenia<span class="middle">x 01</span> <span class="last">Rp 1.350.000</span></a></li>
                                <li><a href="#">Chanel Cushion Les Beiges Healthy Glow Gel Touch Foundation<span class="middle">x 01</span> <span class="last">Rp 550.000</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>Rp 2.400.000</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Cek Pembayaran</label>
                                    <div class="check"></div>
                                </div>
                                <p>Silakan kirim cek ke Nama Toko, Jalan Toko, Kota Toko, Negara Bagian / Kabupaten Toko,
                                    Simpan Kode Pos.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">COD </label>
                                    
                                    <div class="check"></div>
                                </div>
                                <p>Bayar dengan metode COD; Anda dapat membayar dengan bayar ditempat, bayar langsung ke kurir.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">Saya sudah membaca dan menerima </label>
                                <a href="#">Syarat & Ketentuan*</a>
                            </div>
                            <a class="primary-btn" href="confirmation.php">Buat Pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Tentang Kami</h6>
                        <p>
                            WA : 081216655470
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>							
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
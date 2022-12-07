<?php
require_once 'koneksi.php';
function getAllKeranjang()
{
    global $koneksi_db; 

    $query = "SELECT * FROM tbl_keranjang"; 
    $rawResult = mysqli_query($koneksi_db, $query); 
    $result = mysqli_fetch_all($rawResult); 
    return $result;
}
$listKeranjang = getAllKeranjang();
?>

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
    <!--icon-->
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <!-- Site Title -->
    <title>lapakwanita</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
    .checkout_btn_inner .primary-btn{
    margin-left: auto;
    margin-right: 0px;
  }
    </style>
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
							<li class="nav-item"><a class="nav-link" href="index.php">Halaman Utama</a></li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">belanja</a>
								<ul class="dropdown-menu">									
									<li class="nav-item"><a class="nav-link" href="rincian_produk.php">Rincian Produk</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.php">Buat Pesanan</a></li>
									<li class="nav-item active"><a class="nav-link" href="cart.php">Keranjang Belanja</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.php">Konfirmasi</a></li>
								</ul>
							</li>							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">akun</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                                    
									
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
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

    

    <!--================Cart Area =================-->
    <br>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $subTotal = 0;
                            foreach($listKeranjang as $key => $value) : 
                            $subTotal += (int) $value[6];
                            ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="<?= $value[3] ?>" width="100px" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?= $value[2] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp <?= number_format((int)$value[5], 0, ',', '.') ?></h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="<?= $value[4] ?>" title="Quantity:"
                                            class="input-text qty">
                                        <a href="change_qty.php?condition=plus&id_keranjang=<?= $value[0] ?>"
                                            class="increase items-count"><i class="lnr lnr-chevron-up"></i></a>
                                        <a href="change_qty.php?condition=minus&id_keranjang=<?= $value[0] ?>"
                                            class="reduced items-count"><i class="lnr lnr-chevron-down"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp <?= number_format($value[6], 0, ',', '.') ?></h5>
                                </td>
                                <td><a href="delete_cart.php"><span class="iconify" data-icon="mdi:trash-outline" data-width="25"></span></a></td>
                            </tr>
                            <?php endforeach ?>
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="index.php">Perbarui Keranjang</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>Rp <?= number_format($subTotal, 0, ',', '.') ?></h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Ongkir</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="">
                                            
                                            Gratis Ongkir<br>
                                            
                                            
                                        </ul>
                                        
                                        
                                       
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td colspan="4">
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        
                                        <a class="primary-btn" href="checkout.php">Proses Buat Pesanan</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

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
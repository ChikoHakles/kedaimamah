<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php include 'koneksi.php'; include 'tambahan.html';?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kedai Mamah Aku &mdash; Pesan Tanpa Tunggu Waiters</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Kedai Mamah Aku</a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="#menu">Menu</a></li>
						<li class="has-dropdown">
							<a href="waiting.php">Youtube Player</a>
						</li>
						<li><a href="news.php">Latest News</a></li>
						<li class="btn-cta"><a href="#pesan"><span>PESAN</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/private-room.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Contact-less Smart Restaurant</span>
							<h1 class="cursive-font">Mantap Jiwa!</h1>	
							<span class="intro-text-small">Klik "PESAN!" Atau Scroll Bawah</span>
						</div>
						<!--<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Table Reservation</h3>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Persons</label>
														<select name="#" id="activities" class="form-control">
															<option value="">Persons</option>
															<option value="">1</option>
															<option value="">2</option>
															<option value="">3</option>
															<option value="">4</option>
															<option value="">5+</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date</label>
														<input type="text" id="date" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Time</label>
														<input type="text" id="time" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Reserve Now">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>-->
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div class="gtco-section" id="pesan">
		<form method="post" action="confirm.php">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Langkah 1</h2>
					<p>Catat Nama dan Meja</p>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="meja">Meja</label>
								<select name="meja" id="meja" class="form-control" required>
									<?php
										for($i=1; $i<=10; $i++){
											echo '<option value="'.$i.'">'.$i.'</option>';
										}
									?>
								</select>
							</div>
						</div>
				</div>
			</div>
			
			<div class="row" id="menu">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Langkah 2</h2>
					<p>Pilih Menu Yang Diinginkan</p>
				</div>

				<div class="menuutama">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color" style="font-size: 30px;">Menu Utama</h2>
				</div>
				<?php
				while ($tampil = mysqli_fetch_array($menuutamaarr)){
				echo '<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/'.$tampil["nama"].'.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>'.$tampil["nama"].'</h2>
							<p>'.$tampil["deskripsi"].'</p>
							<p><span class="price cursive-font">Rp. '.$tampil["harga"].'</span></p>';
				
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                <span style="cursor: pointer;" class="glyphicon glyphicon-minus"></span>
                                <input style="width: 70%;" type="text" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
                                <span style="cursor: pointer;" class="glyphicon glyphicon-plus"></span>
								</div>
								</a>
                              </div>';
                        }
                        else {
                            echo '<h3> <b> HABIS! </b> </h3>
                                  <input style="width: 70%;" type="hidden" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
								  </div>
								  </a>
                              </div>';
                        }
				}
				?>
				</div>

				<div class="minuman">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color" style="font-size: 30px;">Minuman</h2>
				</div>
				<?php
				while ($tampil = mysqli_fetch_array($minumanarr)){
				echo '<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/'.$tampil["nama"].'.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>'.$tampil["nama"].'</h2>
							<p>'.$tampil["deskripsi"].'</p>
							<p><span class="price cursive-font">Rp. '.$tampil["harga"].'</span></p>';
				
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                <span style="cursor: pointer;" class="glyphicon glyphicon-minus"></span>
                                <input style="width: 70%;" type="text" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
                                <span style="cursor: pointer;" class="glyphicon glyphicon-plus"></span>
								</div>
								</a>
                              </div>';
                        }
                        else {
                            echo '<h3> <b> HABIS! </b> </h3>
                                  <input style="width: 70%;" type="hidden" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
								  </div>
								  </a>
                              </div>';
                        }
				}
				?>
				</div>

				<div class="camilan">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color" style="font-size: 30px;">Camilan</h2>
				</div>
				<?php
				while ($tampil = mysqli_fetch_array($camilanarr)){
				echo '<div class="col-lg-4 col-md-4 col-sm-6">
					<a class="fh5co-card-item">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/'.$tampil["nama"].'.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>'.$tampil["nama"].'</h2>
							<p>'.$tampil["deskripsi"].'</p>
							<p><span class="price cursive-font">Rp. '.$tampil["harga"].'</span></p>';
				
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                <span style="cursor: pointer;" class="glyphicon glyphicon-minus"></span>
                                <input style="width: 70%;" type="text" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
                                <span style="cursor: pointer;" class="glyphicon glyphicon-plus"></span>
								</div>
								</a>
                              </div>';
                        }
                        else {
                            echo '<h3> <b> HABIS! </b> </h3>
                                  <input style="width: 70%;" type="hidden" value="0" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil["nama"]).'" readonly>
								  </div>
								  </a>
                              </div>';
                        }
				}
				?>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2 class="cursive-font primary-color">Langkah 3</h2>
						<p>Beri Keterangan (opsional)</p>
					</div>
					
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="keterangan">Keterangan</label>
        					<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="tanggal">Tanggal</label>
							<input type="text" id="tanggal" name="tanggal" class="form-control" readonly>
						</div>
					</div>
					</div>
				</div>

				<input type="submit" class="pesan center-block btn-warning btn-lg" value="PESAN">
			</div>
		</div>
		</form>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-mail2"></i>2014484.chikopratama@gmail.com</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://z-p4.www.instagram.com/chiko_sija/"><i class="icon-instagram"></i></a></li>
							<li><a href="https://web.facebook.com/profile.php?id=100009390233506"><i class="icon-facebook"></i></a></li>
							<li><a href="https://github.com/ChikoHakles"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2022 ChikoHakles' Trial. <br>
						bedanya function sama aku? klo function return a value, kalo aku return to kamu</small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
<script>
setInterval(function() {
    var d = new Date();
    var h = d.getDay();
    var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var t = d.toLocaleString();
    document.getElementById("tanggal").value = hari[h] + " " + t;
}, 1000);
    
$('.glyphicon-plus').click(function(e){
		e.preventDefault();
		//dari elemen ini, lihat parent div terdekat, lalu cari elemen input
		var qty = $(this).closest('div').find('input');
		 //var qty = $(this).closest('div').find('input[name='+fieldName+']');
 		var currentVal = parseInt(qty.val());
		if (!isNaN(currentVal) && currentVal >= 0) {
			qty.val(currentVal + 1);
		} else {
			qty.val(0);
		}
		//Trigger change event
        qty.trigger('change');
});

$(".glyphicon-minus").click(function(e) {
		e.preventDefault();
		//dari elemen ini, lihat parent div terdekat, lalu cari elemen input
		var qty = $(this).closest('div').find('input');
		//var qty = $(this).closest('div').find('input[name='+fieldName+']');
		var currentVal = parseInt(qty.val());
		if (!isNaN(currentVal) && currentVal >= 1) {
			qty.val(currentVal - 1);
		} else {
			qty.val(0);
		}
		//Trigger change event
        qty.trigger('change');
});  
</script>
</html>


<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php include 'koneksi.php';?>
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
	
	<div id="page"></div>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/landscape-photo.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					
    			<div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="padding-top: 3em">
					<h2 class="cursive-font primary-color"><u>Quotes of the Day</u></h2>
					<!--<form>
					<div class="row form-group" style="margin: 30px;">
						<div class="col-md-12">
							<label for="search">Cari di Youtube:</label>
							<input type="text" id="search" name="search" class="form-control" required>
                            <button class="btn btn-warning" style="margin: 20px 0">CARI</button>
						</div>
					</div>
					</form>-->		
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div id="news">

							</div>
						</div>
					</div>

					<a href="javascript:" onclick="reset()">Quote Lain,</a> <br> 
					<a href="waiting.php">Setel Youtube</a> <br> 
                    <a style="pointer-event: none; font-size: 10px;"> Atau </a> <br>
					<a href="index.php">Kembali</a> <br> <br>
				</div>	
					
				</div>
			</div>
		</div>
	</header>
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

<script>
$(document).ready(function(){

	let news = $("#news");
	/*let apikey = '1ba9bd37c3e44891ac7ae8ebd99278a9';

	let link = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=' + apikey;

	$.get(link, function(data){
		console.log(data);

		data.articles.forEach(item => {
			article = `
				<div class="bacaan fh5co-card-item">
                    <figure><img class="news-img img-responsive" src="${item.urlToImage}" alt="gambar"/></figure>
                    <h3 class="news-title cursive-font">${item.title}</h3>
                    <p class="news-desc">${item.description}</p>
                    <h5 class="news-date">Tanggal: ${item.publishedAt.substr(0, 10)}</h5>
                    <a class="news-link" href="${item.url}" target="_blank"> Lihat Selengkapnya </a>
				</div>
			`;

			news.append(article);
		})
	});*/

	let link2 = 'https://favqs.com/api/qotd';

	$.get(link2, function(data){
		console.log(data);

		quotes = `
			<div class="quotes"  style="margin: 50px 0;">
				<h3>${data.quote.body}</h3>
				<h4 style="margin-top: 30px;">- ${data.quote.author} -</h4>
			</div>

		`;

		news.append(quotes);
	});
});

function reset() {
	let news = $("#news");
	let link2 = 'https://favqs.com/api/qotd';
	news.empty();

	$.get(link2, function(data){
		console.log(data);

		quotes = `
			<div class="quotes"  style="margin: 50px 0;">
				<h3>${data.quote.body}</h3>
				<h4 style="margin-top: 30px;">- ${data.quote.author} -</h4>
			</div>

		`;

		news.append(quotes);
	});
}
</script>

</body>
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

<?php
include "koneksi.php";
?>
<body>
    <div class="container">
        <h2 class="h2"> <?php echo $_POST['nama']; ?>, Apakah Pesanan Anda Sudah Benar? </h2>
        <form method="post" action="pesanan.php">
        <div class="table-responsive">
        <table style="width: 35rem;">
        <?php
        $total = 0;
        
        echo '<tr>
                <td style="padding: 0 30px 0 0;">
                    <label class="h4">Nama: </label>
                </td>
                <td>
                    <input style="width: 210px;" type="text" value="'.$_POST['nama'].'" name="nama" readonly>
                </td>';

        echo '<tr>
                <td style="padding: 0 30px 0 0;">
                    <label class="h4">Meja: </label>
                </td>
                <td>
                    <input style="width: 210px;" type="text" value="'.$_POST['meja'].'" name="meja" readonly>
                </td>';

        while ($tampil = mysqli_fetch_array($menu)) {
            $totsat = $tampil['harga'] * $_POST[preg_replace("/[^a-zA-Z]/", "", $tampil['nama'])];
            echo '<tr>
                <td style="padding: 0 30px 0 0;">
                    <label class="h4">'.$tampil['nama'].':</label>
                </td>
                <td>
                    <input style="width: 70px;" type="text" value="'.$_POST[preg_replace("/[^a-zA-Z]/", "", $tampil['nama'])].'" name="'.preg_replace("/[^a-zA-Z]/", "", $tampil['nama']).'" readonly>
                </td>
                <td style="padding: 0 25px">
                    X
                </td>
                <td style="padding: 0 10px">
                    '.$tampil['harga'].'
                </td>
                <td style="padding: 0 25px">
                    =
                </td>
                <td>
                    <input style="width: 70px;" type="text" value="'.$totsat.'" readonly>
                </td>';
            $total = $total + $totsat;
        }
        ?>
                    <tr>
                        <td>
                            <label class="h4">Total</label>
                        </td>
                        <td>
                            <input style="width: 70px;" type="text" value="<?php echo $total; ?>" name="total" readonly>
                        </td>
                    </tr>
        <?php
        
        echo '<tr>
                <td style="padding: 0 30px 0 0;">
                    <label class="h4">Tanggal: </label>
                </td>
                <td>
                    <input style="width: 210px;" type="text" value="'.$_POST['tanggal'].'" name="tanggal" readonly>
                </td>';

        echo '<tr>
                <td style="padding: 0 30px 0 0;">
                    <label class="h4">Keterangan </label>
                </td>
                <td>
                    <textarea style="width: 210px;" name="keterangan" readonly>'.$_POST['keterangan'].'</textarea>
                </td>';
        ?>
                    
        </table>
        </div>
        <button style="margin-right: 50px;" class="btn btn-lg" onclick="history.go(-1)"> GA DULU </button>
        <input type="submit" value="LANJUTKAN" class="btn btn-lg btn-success">
        </form>
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
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<?php
include "koneksi.php";


$nama = $_POST['nama'];
$meja = $_POST['meja'];
$tanggal = $_POST['tanggal'];

$NasiGoreng = $_POST['NasiGoreng'];
$SateKambing = $_POST['SateKambing'];
$SopKambing = $_POST['SopKambing'];
$SotoAyam = $_POST['SotoAyam'];
$JusJambu = $_POST['JusJambu'];
$JusStroberi = $_POST['JusStroberi'];
$AirMineral = $_POST['AirMineral'];
$KentangGoreng = $_POST['KentangGoreng'];
$Risoles = $_POST['Risoles'];

$keterangan = $_POST['keterangan'];
$total = $_POST['total'];

$insert = "INSERT INTO pesanan(Nama, Meja, Tanggal, NasiGoreng, SateKambing, SopKambing, SotoAyam, JusJambu, JusStroberi, AirMineral, KentangGoreng, Risoles, Keterangan, Total)
            VALUES('$nama', '$meja', '$tanggal', '$NasiGoreng', '$SateKambing', '$SopKambing', '$SotoAyam', '$JusJambu', '$JusStroberi', '$AirMineral', '$KentangGoreng', '$Risoles', '$keterangan', '$total')";

$input = mysqli_query($connect, $insert);

if ($input) {
    echo '<script> swal.fire({
            title: "Pesanan Diproses!", 
            text: "Silahkan Tunggu Pesanan Anda", 
            type: "success"
          }).then((result) => {
            window.location.href = "waiting.php";
          });
          </script>';
}
else {
    echo '<script> swal.fire({
            title: "Maaf, Pesanan Gagal", 
            text: "Coba Beberapa Saat Lagi", 
            type: "error"
          }).then((result) => {
            window.location.href = "../kedaimamah";
          });
          </script>';
}
?>
</body>
<body>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<?php
include "../koneksi.php";

$Id = $_POST['id'];
$status = $_POST['status'];
$update = mysqli_query($connect, "UPDATE pesanan SET status='".$status."' WHERE Id='".$Id."'");

if ($update) {
    echo '<script> swal.fire({
            title: "Pesanan Selesai!", 
            text: "Kerja Bagus, Chef!", 
            type: "success"
            }).then((result) => {
            window.location.href = "../chef";
            });
          </script>';
}
else {
    echo '<script> swal.fire({
            title: "Maaf, Pesanan Gagal Diselesaikan", 
            text: "Coba Beberapa Saat Lagi", 
            type: "error"
            }).then((result) => {
            window.location.href = "../chef";
            });
          </script>';
}
?>
</body>
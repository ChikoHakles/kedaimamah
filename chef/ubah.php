<body>
<?php
include "../koneksi.php";
include "../tambahan.html";
include "header.php";

$nama = $_POST['nama'];
$stok = $_POST['stok'];
$update = mysqli_query($connect, "UPDATE menu SET stok='".$stok."' WHERE nama='".$nama."'");

if ($update) {
    echo '<script> swal.fire({
            title: "Status Berhasil Diubah!", 
            text: "Kembali ke Menu, Chef!", 
            type: "success"
            }).then((result) => {
            window.location.href = "../chef";
            });
          </script>';
}
else {
    echo '<script> swal.fire({
            title: "Maaf, Status Gagal Diubah", 
            text: "Coba Beberapa Saat Lagi", 
            type: "error"
            }).then((result) => {
            window.location.href = "../chef";
            });
          </script>';
}
?>
</body>
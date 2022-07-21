<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<?php
    include "../koneksi.php";
    
    //jalakan sesi
    
    session_start();
    
    #tangkap username dan pass dari form sebelumnya
    $username = $_POST['username'];
    $pass1 = $_POST['pass1'];
    
    // mencari password di database
    
    $query = "SELECT * FROM akun WHERE username = '$username' AND pass1 = '$pass1'";
    $hasil = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($hasil);
    
    //$pengacak = "NDJS3289JSKS190JISJI";
    
    /* cek kesesuaian password terenkripsi dari form login
    dengan password terenkripsi dari database */
    
    //if (md5($pengacak.md5($password).$pengacak) == $data['password']){
    
    if ($cek == 1) {
        
        // jika sesuai, maka buat session untuk username
            
            $_SESSION['username'] = $username;
            $_SESSION['pass1'] = $pass1;
            
            // direct ke menu utama halaman

        echo '<script>
                swal.fire({
                    title: "Selamat Datang, CHEF '.$username.'!", 
                    text: "Sudah Siap Untuk Memasak??", 
                    type: "success"
                }).then((result) => {
                    window.location.href = "../chef";
                });
              </script>';
    }
    else {
        echo '<script>
                swal.fire({
                    title: "Password Atau Password Salah!", 
                    text: "WKWKWK", 
                    type: "error",
                    footer: "Harusnya ada lupa password dibawah sini, tapi mager :)"
                }).then((result) => {
                    history.go(-1);
                });
              </script>';
    }
?>
</body>
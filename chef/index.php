<head>
    <meta http-equiv="refresh" content="120">
</head>
<body>
<?php

include "../koneksi.php";
include "../tambahan.html";
include "header.php";

$query = mysqli_query($connect, "SELECT * FROM pesanan WHERE Status='belum selesai'");
?>

    <div class="container">
    <h1> Halo Chef, Ada Kerjaan Nih Hari Ini... </h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
            <?php
            while ($tampil = mysqli_fetch_array($query)) {
                echo '<td>
                        <form method="post" action="selesai.php">
                        <div class="well" style="width: 52rem; overflow: hidden;">
                            <h2> PESANAN '.$tampil['Id'].'</h2>
                            <input type="hidden" name="id" value="'.$tampil['Id'].'">';
                            foreach($form as $fo) {
                                $f = preg_replace("/[^a-zA-Z]/", "", $fo);
                                echo '<p class="col-sm-5"> <b>'.$fo.'</b> </p>';
                                echo '<p class="col-sm-1"> : </p>';
                                echo '<p class="col-sm-6">'.$tampil[$f].'<br></p>';
                            }
                echo '  <input type="submit" class="btn btn-lg btn-info center-block" name="status" value="SELESAI">
                        </div>
                        </form>
                      </td>';
            }
            ?>
            </tr>
        </table>
    </div>
    <div class="col-sm-12">
            <div class="col-sm-12">
                <h1 style="margin-bottom: 50px;">Menu Utama </h1>
                <?php
                    while ($tampil = mysqli_fetch_array($menuutamaarr)){
                        echo '<form method="post" action="ubah.php">
                                <div class="col-sm-3 col-sm-offset-1 well" style="margin-bottom: 100px; height: 30em;">
                                    <p style="position: absolute; border-radius: 0 0 8px 0; background-color: yellow; padding: 3px 5px;">'.$tampil['harga'].'</p>
                                    <img id="'.$tampil["nama"].'" class="hover" src="../images/'.$tampil["nama"].'.jpg" style="width: 100%; height: 150px;">
                                    <h2>'.$tampil["nama"].'</h2>
                                    <h3> STOCK: '.$tampil["stok"].'</h2>
                                    <input style="width: 70%;" type="hidden" value="'.$tampil['nama'].'" name="nama" readonly>';
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                    <button class="btn btn-lg btn-danger center-block" name="stok" value="habis"> HABIS </button>
                                </div> </form>';
                        }
                        else {
                            echo '
                                    <button class="btn btn-lg btn-success center-block" name="stok" value="ada"> ADA </button>
                                </div> </form>';
                        }
                    } //preg_replace adalah untuk menghilangkan character, kecuali yang dicantumkan (^a-zA-Z)
                ?>
            </div>
            <div class="col-sm-12">
                <h1 style="margin-bottom: 50px;">Minuman </h1>
                <?php
                    while ($tampil = mysqli_fetch_array($minumanarr)){
                        echo '<form method="post" action="ubah.php">
                                <div class="col-sm-3 col-sm-offset-1 well" style="margin-bottom: 100px; height: 30em;">
                                    <p style="position: absolute; border-radius: 0 0 8px 0; background-color: yellow; padding: 3px 5px;">'.$tampil['harga'].'</p>
                                    <img id="'.$tampil["nama"].'" class="hover" src="../images/'.$tampil["nama"].'.jpg" style="width: 100%; height: 150px;">
                                    <h2>'.$tampil["nama"].'</h2>
                                    <h3> STOCK: '.$tampil["stok"].'</h2>
                                    <input style="width: 70%;" type="hidden" value="'.$tampil['nama'].'" name="nama" readonly>';
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                    <button class="btn btn-lg btn-danger center-block" name="stok" value="habis"> HABIS </button>
                                </div> </form>';
                        }
                        else {
                            echo '
                                    <button class="btn btn-lg btn-success center-block" name="stok" value="ada"> ADA </button>
                                </div> </form>';
                        }
                    } //preg_replace adalah untuk menghilangkan character, kecuali yang dicantumkan (^a-zA-Z)
                ?>
            </div>
            <div class="col-sm-12">
                <h1 style="margin-bottom: 50px;">Camilan </h1>
                <?php
                    while ($tampil = mysqli_fetch_array($camilanarr)){
                        echo '<form method="post" action="ubah.php">
                                <div class="col-sm-3 col-sm-offset-1 well" style="margin-bottom: 100px; height: 30em;">
                                    <p style="position: absolute; border-radius: 0 0 8px 0; background-color: yellow; padding: 3px 5px;">'.$tampil['harga'].'</p>
                                    <img id="'.$tampil["nama"].'" class="hover" src="../images/'.$tampil["nama"].'.jpg" style="width: 100%; height: 150px;">
                                    <h2>'.$tampil["nama"].'</h2>
                                    <h3> STOCK: '.$tampil["stok"].'</h2>
                                    <input style="width: 70%;" type="hidden" value="'.$tampil['nama'].'" name="nama" readonly>';
                        if ($tampil['stok'] == 'ada') {
                            echo '
                                    <button class="btn btn-lg btn-danger center-block" name="stok" value="habis"> HABIS </button>
                                </div> </form>';
                        }
                        else {
                            echo '
                                    <button class="btn btn-lg btn-success center-block" name="stok" value="ada"> ADA </button>
                                </div> </form>';
                        }
                    } //preg_replace adalah untuk menghilangkan character, kecuali yang dicantumkan (^a-zA-Z)
                ?>
            </div>
        </div>
    </div>
<script>
</script>
</body>
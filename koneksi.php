<?php
$connect = mysqli_connect("localhost", "root", "", "db_akun_shelter");
$menuutamaarr = mysqli_query($connect, 'SELECT * FROM menu WHERE jenis = "Menu Utama"');
$minumanarr = mysqli_query($connect, 'SELECT * FROM menu WHERE jenis = "Minuman"');
$camilanarr = mysqli_query($connect, 'SELECT * FROM menu WHERE jenis = "Camilan"');

$form = ["Nama", "Meja", "Nasi Goreng", "Sate Kambing", "Sop Kambing", "Soto Ayam", "Jus Jambu", "Jus Stroberi", "Air Mineral", "Kentang Goreng", "Risoles", "Keterangan", "Tanggal"];
$menu = mysqli_query($connect, 'SELECT * FROM menu');
?>
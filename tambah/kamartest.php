<?php
// include('../header.php');
include('../config/koneksi.php');


$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];


$query = mysqli_query($koneksi, "INSERT INTO kamar (no_kamar, type, harga, status) VALUES ('$no_kamar', '$tipe', '$harga', 'Kosong')");

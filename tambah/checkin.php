<?php

include('../config/koneksi.php');


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$xtra = $_POST['xtra'];
$small = $_POST['small'];
$jml_hari = $_POST['jml_hari'];

$ktp = $_FILES['ktp']['name'];


// proses upload foto~~
// menentukan destinasi untuk menyimpan foro
$dir = "img/";
// temporaari file
$tmpFile = $_FILES['ktp']['tmp_name'];

move_uploaded_file($tmpFile, $dir . $ktp);




$query_pelanggan = mysqli_query($koneksi, "INSERT INTO pelanggan (nama, alamat, no_hp, ktp) VALUES ('$nama', '$alamat', '$hp', '$ktp')");

$query = mysqli_query($koneksi, "INSERT INTO kamar (no_kamar, type, harga, status) VALUES ('$no_kamar', '$tipe', '$harga', 'Kosong')");

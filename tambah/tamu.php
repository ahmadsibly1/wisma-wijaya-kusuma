<?php
// include('../header.php');
include('../config/koneksi.php');


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$ktp = $_POST['ktp'];




$query = mysqli_query($koneksi, "INSERT INTO pelanggan (nama, alamat, no_hp, ktp) VALUES ('$nama', '$alamat', '$hp', '$ktp')");

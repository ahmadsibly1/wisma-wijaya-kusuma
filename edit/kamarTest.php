<?php

include('../config/koneksi.php');


$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$id_kamar = $_POST['id_kamar'];


$query = mysqli_query(
    $koneksi,
    "UPDATE kamar SET
        no_kamar='$no_kamar', 
        type='$tipe', 
        harga='$harga'
        WHERE id_kamar=$id_kamar"
);

<?php
include('../header.php');
include('../config/koneksi.php');
?>
<script src="../assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<?php

$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];

$cekDataganda = mysqli_num_rows(mysqli_query($koneksi, "SELECT no_kamar FROM kamar WHERE no_kamar=$no_kamar"));
if ($cekDataganda >= 1) {
    echo "<script type='text/javascript'>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Maaf...',
            text: 'Nomor kamar yang anda masukan sudah ada!',
            }).then(function() {
                window.location = '../data-kamar.php';
            });
    </script>";
} else {
    $query = mysqli_query($koneksi, "INSERT INTO kamar (no_kamar, type, harga, status) VALUES ('$no_kamar', '$tipe', '$harga', 'Kosong')");
    if ($query == 1) {
        echo "<script type='text/javascript'>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil menambahkan kamar baru!',
            showConfirmButton: false,
            timer: 2000
            }).then(function() {
                window.location = '../data-kamar.php';
            });
    </script>";
    } else {
        echo "<script type='text/javascript'>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal menambahkan data!',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = '../data-kamar.php';
            });
    </script>";
    }
}

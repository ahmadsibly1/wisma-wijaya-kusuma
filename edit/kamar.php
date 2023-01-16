<?php
include('../header.php');
include('../config/koneksi.php');
?>
<script src="../assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<?php

$id_kamar = $_POST['id_kamar'];
$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];

// echo $tipe;
// echo $harga;
// die();
$query = mysqli_query(
    $koneksi,
    "UPDATE kamar SET
        no_kamar='$no_kamar', 
        type='$tipe', 
        harga='$harga'
        WHERE id_kamar=$id_kamar"
);
// echo $query;
// die();
if ($query == 1) {
    echo "<script type='text/javascript'>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil...',
            text: 'Anda berhasil mengubah data kamar!',
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
            title: 'Gagal mengubah data kamar!',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = '../data-kamar.php';
            });
    </script>";
}

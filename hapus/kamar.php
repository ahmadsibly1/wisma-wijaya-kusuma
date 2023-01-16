

    <?php
    include('../config/koneksi.php');

    $id_kamar = $_GET['id'];

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();


    //hapus data dari tabel kontak
    $query = mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar='$id_kamar'");

    //set session sukses
    $_SESSION["sukses"] = 'data Berhasil Dihapus';

    //redirect ke halaman index.php
    header('Location: ../data-kamar.php');

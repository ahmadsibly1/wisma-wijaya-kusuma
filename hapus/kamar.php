

<?php
include('../config/koneksi.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar='$id'");
}

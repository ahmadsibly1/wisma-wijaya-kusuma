<?php

include('../config/koneksi.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar='$id'");
    $data = mysqli_fetch_assoc($query);


    $no_kamar = $data['no_kamar'];
    $tipe = $data['tipe'];
    $harga = $data['harga'];
}

?>

<div class="modal fade" id="updateRoomModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- action="edit/kamar.php?id=<?= $data['id_kamar']; ?>"  -->
                <form action="edit/kamar.php?id=<?= $data['id_kamar']; ?>" id="editRoom" method="post">
                    <div class="mb-3 row">
                        <label for="no_kamar" class="col-sm-3 col-form-label">Nomor Kamar</label>
                        <div class="col-sm-9">
                            <input type="number" name="no_kamar" class="form-control" id="no_kamar" value="<?= $data['no_kamar']; ?>" required>
                            <input type="hidden" name="id_kamar" class="form-control" id="id_kamar" value="<?= $data['id_kamar']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tipe" class="col-sm-3 col-form-label">Tipe Kamar</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="tipe" aria-label="Default select example" required>
                                <option selected><?= $data['type']; ?></option>
                                <option value="Standar">Standar</option>
                                <option value="VIP">VIP</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" name="harga" class="form-control" id="harga" value="<?= $data['harga']; ?>" required>
                        </div>
                    </div>
                    <div class="text-start mt-2">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
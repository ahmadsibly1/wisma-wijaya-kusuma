<?php
session_start();
$title = 'data kamar';
include('config/koneksi.php');
include("header.php");
include("sidebar.php");
?>
<main class="main-content">
    <div class="position-relative iq-banner">
        <?php include("navbar.php"); ?>
        <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 100px;">
            <div class="iq-header-img">
                <img src="assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                <img src="assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                <img src="assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                <img src="assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                <img src="assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                <img src="assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div>
        <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">

                <!-- Star content -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                            <h4 class="card-title">Data Kamar</h4>

                        </div>
                        <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambah Kamar</span>
                        </a>
                        <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Kamar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="newRoom" method="post">
                                            <div class="mb-3 row">
                                                <label for="no_kamar" class="col-sm-3 col-form-label">Nomor Kamar</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="no_kamar" class="form-control" id="no_kamar" placeholder="*" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="tipe" class="col-sm-3 col-form-label">Tipe Kamar</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" name="tipe" aria-label="Default select example" required>
                                                        <option selected>...</option>
                                                        <option value="Standar">Standar</option>
                                                        <option value="VIP">VIP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="harga" class="form-control" id="harga" placeholder="contoh : 125000" required>
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-hover" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>No kamar</th>
                                        <th>Tipe</th>
                                        <th>Harga</th>
                                        <th>status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, 'SELECT * FROM kamar');
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no++
                                    ?>
                                        <tr>
                                            <td><?= $data['no_kamar']; ?></td>
                                            <td><?= $data['type']; ?></td>
                                            <td>Rp. <?= $data['harga']; ?></td>
                                            <td>
                                                <?php if ($data['status'] == 'Kosong') {
                                                    echo "<span class='badge bg-info p-2'>Kosong</span>";
                                                } else {
                                                    echo "<span class='badge bg-danger p-2'>Terisi</span>";
                                                }
                                                ?>

                                            </td>
                                            <td>

                                                <a href="#" class=" text-center btn btn-success btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2<?= $data['id_kamar']; ?>">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    <!-- <span>Edit</span> -->
                                                </a>
                                                <!-- 

                                                <!-- Modal edit -->
                                                <div class="modal fade" id="staticBackdrop-2<?= $data['id_kamar']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kamar</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form id="editRoom" action="edit/kamar.php?id=<?= $data['id_kamar']; ?>" method="post">
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


                                                <button type="button" class="text-center btn btn-danger btn-icon mt-lg-0 mt-md-0 mt-3 deleteRoom" id="<?= $data['id_kamar']; ?>">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        <div class="display_room"></div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="display_room"></div> -->

                <!-- Akhir content -->


            </div>

        </div>
    </div>

    <?php include("footer.php"); ?>
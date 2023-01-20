<?php
$title = 'data tamu';
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
                            <h4 class="card-title">Data Tamu</h4>

                        </div>
                        <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambah Tamu</span>
                        </a>
                        <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Tamu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="*" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="*" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="hp" class="col-sm-3 col-form-label">No Telepon</label>
                                            <div class="col-sm-9">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text" id="addon-wrapping">+62</span>
                                                    <input type="text" name="hp" class="form-control" id="hp" placeholder="8953378978" aria-describedby="addon-wrapping" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="ktp" class="col-sm-3 col-form-label">KTP</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="ktp" class="form-control" id="ktp" placeholder="*" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tipe" class="col-sm-3 col-form-label">Tipe Kamar</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" name="tipe" aria-label="Default select example" required>
                                                    <option selected>Pilih tipe kamar</option>
                                                    <option value="regular">Regular</option>
                                                    <option value="vip">VIP</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jml_hari" class="col-sm-3 col-form-label">Jumlah Hari</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" name="jml_hari" aria-label="Default select example" required>
                                                    <option selected>Pilih jumlah hari menginap</option>
                                                    <option value="1">1 Hari</option>
                                                    <option value="2">2 Hari</option>
                                                    <option value="3">3 Hari</option>
                                                    <option value="4">4 Hari</option>
                                                    <option value="5">5 Hari</option>
                                                    <option value="6">6 Hari</option>
                                                    <option value="seminggu">Paket 1 Minggu</option>
                                                    <option value="sebulan">Paket 1 Bulan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-start mt-2">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Handphone</th>
                                        <th>Jumlah Uang</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, 'SELECT * FROM pelanggan');
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                        <tr>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['no_hp']; ?></td>
                                            <td><?= $data['ktp']; ?></td>
                                            <td><?= $data['status']; ?></td>
                                            <td>
                                                <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                                                    <i class="fa fa-print" aria-hidden="true"></i>
                                                    <!-- <span>Edit</span> -->
                                                </a>
                                                <a href="#" class=" text-center btn btn-secondary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#detail<?= $data['id_pelanggan']; ?>">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <!-- <span>Edit</span> -->
                                                </a>
                                                <!-- modal detail -->
                                                <div class="modal fade" id="detail<?= $data['id_pelanggan']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Detail Data Tamu</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3 row">
                                                                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="disabled" class="form-control" value="<?= $data['nama']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="disabled" class="form-control" value="<?= $data['alamat']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alamat" class="col-sm-3 col-form-label">Nomor Telephone</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="disabled" class="form-control" value="<?= $data['no_hp']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="alamat" class="col-sm-3 col-form-label">Foto Ktp</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="disabled" class="form-control" value="<?= $data['ktp']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="text-start mt-2">

                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a href="#" class=" text-center btn btn-success btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    <!-- <span>Edit</span> -->
                                                </a>
                                                <a href="#" class=" text-center btn btn-danger btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    <!-- <span>Hapus</span> -->
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Akhir content -->


            </div>

        </div>
    </div>

    <?php include("footer.php"); ?>
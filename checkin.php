<?php
session_start();
$title = 'checkin';
include('config/koneksi.php');
include("header.php");
include("sidebar.php");
?>
<main class="main-content">
    <div class="position-relative iq-banner">
        <?php include("navbar.php"); ?>
        <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
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
            <div class="col-md-12 col-lg-12">

                <!-- Star content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-3">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE status = 'kosong' OR status = 'booking'");
                            while ($data = mysqli_fetch_array($query)) {

                            ?>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 ">
                                        <div class="card-body  text-center">
                                            <h1 class="card-title pricing-card-title"><?= $data['no_kamar']; ?></h1>
                                            <h4 class="my-0 fw-normal mt-3"><?= $data['type']; ?></h4>
                                            <ul class="list-unstyled my-2 p-0">
                                                <li>
                                                    <p><?= $data['harga']; ?></p>
                                                    <?php
                                                    if ($data['status'] == 'Kosong') {
                                                        echo "<span class='badge bg-info p-2'>Tidak Berpenghuni</span>";
                                                    } elseif ($data['status'] == 'booking') {
                                                        echo "<span class='badge bg-warning p-2'>Telah di booking</span>";
                                                    }
                                                    ?>
                                                </li>

                                            </ul>
                                            <a href="checkinsee.php?id=<?= $data['id_kamar']; ?>" class="btn btn-sm btn-outline-primary">
                                                Checkin
                                            </a>


                                        </div>
                                        <!-- Modal Checkin -->
                                        <div class="modal fade" id="staticBackdrop-1<?= $data['no_kamar']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Reservasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="tambah_reservasi" method="post" enctype="multipart/form-data">
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
                                                                <label for="layanan" class="col-sm-3 col-form-label">Layanan tambahan</label>
                                                                <div class="col-sm-9 d-flex">
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" name="xtra" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Xtra Bed
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" name="small" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Small Bed
                                                                        </label>
                                                                    </div>
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
                                                                        <option value="duaminggu">Paket 2 Minggu</option>
                                                                        <option value="sebulan">Paket 1 Bulan</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="text-start mt-2">
                                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>



                <!-- <div class="display_room"></div> -->

                <!-- Akhir content -->


            </div>

        </div>
    </div>

    <?php include("footer.php"); ?>
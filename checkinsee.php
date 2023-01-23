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
            <div class="col-lg-3">
                <div class="card mb-4 rounded-3 bg-light text-dark text-center">
                    <div class="card-body">
                        <?php
                        $id_kamar = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
                        $data = mysqli_fetch_array($query)
                        ?>
                        <div class="modal-body">
                            <h1 class="card-title pricing-card-title"><?= $data['no_kamar']; ?></h1>
                            <h4 class="my-0 fw-normal mt-3"><?= $data['type']; ?></h4>
                            <p class="my-0 fw-normal mt-3"><?= $data['harga']; ?>/malam</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4 rounded-3 ">
                    <div class="card-body">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                                <div class="col">
                                    <select class="form-select" name="nama" aria-label="Default select example" required>
                                        <option selected>...Pilih...</option>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT nama from pelanggan");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                                    <span>Klik disini </span>
                                </a>
                                <p>jika nama tamu yang dimaksudkan belum pernah menginap disini untuk di tambahkan ke data tamu</p>

                                <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Tamu</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="tambah_tamu" method="post">
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
                                                            <input type="number" name="ktp" class="form-control" id="ktp" placeholder="*" required>
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


                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-4 rounded-3 ">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                            <div class="col">
                                <select class="form-select" name="nama" aria-label="Default select example" required>
                                    <option selected>..Pilih...</option>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT nama from pelanggan");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Check In</label>
                                    <div class="col">
                                        <input type="date" name="checkin" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                                    <div class="col">
                                        <input type="date" name="checkin" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Check Out</label>
                                    <div class="col">
                                        <input type="date" name="checkin" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                                    <div class="col">
                                        <input type="date" name="checkin" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Hari</label>
                            <div class="col">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">1</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

    </div>
    </div>

    <?php include("footer.php"); ?>
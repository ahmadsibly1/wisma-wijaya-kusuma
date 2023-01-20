<aside class="sidebar sidebar-default navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="dashboard.php" class="navbar-brand">
            <img src="assets/images/logo-rskd.png" alt="Logo RSKD" width="70px" class="me-auto">
            <!-- <h5 class="logo-title">Wisma RSKD</h5> -->
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == 'dashboard') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="dashboard.php">
                        <i class="bi bi-grid-fill"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                        <i class="bi bi-x-diamond-fill"></i>
                        <span class="item-name">Menu Style</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="horizontal-menu" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/index-horizontal.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> H </i>
                                <span class="item-name"> Horizontal </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == 'data tamu') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="data-tamu.php">
                        <i class="bi bi-people-fill"></i>
                        <span>Data Tamu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == 'data kamar') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="data-kamar.php">
                        <i class="bi bi-shop-window"></i>
                        <span>Data Kamar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == 'data transaksi') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="data-transaksi.php">
                        <i class="bi bi-coin"></i>
                        <span>Data Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == 'reservasi') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="reservasi.php">
                        <i class="bi bi-door-open-fill"></i>
                        <span>Reservasi</span>
                    </a>
                </li>
                <li>
                    <hr class="hr-horizontal">
                </li>

            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
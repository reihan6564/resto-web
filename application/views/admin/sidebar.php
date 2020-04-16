<div class="sidebar" data-color="blue" data-image="<?= base_url("assets/img"); ?>/sidebar-5.jpg" id="navbarToggleExternalContent">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
                Tip 2: you can also add an image using data-image tag -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                RW
            </a>
            <a href="" class="simple-text logo-normal">
                Resto Web
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="<?= base_url(''); ?>assets/img/<?= $user['gambar']; ?>" />
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="<?= base_url('admin/edit_profile') ?>" class="collapsed">
                    <span class="text-monospace">
                        <?= $user['nama_pengguna']; ?>
                    </span>
                </a>
            </div>
        </div>

        <!-- navv -->
        <ul class="nav">
            <?php
            if ($this->session->userdata('id_akses') == 1) {
                echo "
                <li class='nav-item'>
                    <a class='nav-link' href='
                    " ?><?= base_url('admin'); ?>
                <?php echo "'>
                        <i class='nc-icon nc-chart-pie-35'></i><p>Dashboard</p>
                    </a>
                </li>";
            } else if ($this->session->userdata('id_akses') == 2) { } else if ($this->session->userdata('id_akses') == 3) { } else if ($this->session->userdata('id_akses') == 4) { }
            ?>
            <?php
            if ($this->session->userdata('id_akses') == 2) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/pembayaran'); ?>">
                        <i class='nc-icon nc-money-coins'></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/pk'); ?>">
                        <i class='nc-icon nc-email-83'></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/lp'); ?>">
                        <i class='nc-icon nc-single-copy-04'></i>
                        <p>Laporan Penjualan</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="<?= base_url('auth/logout'); ?>">
                        <i class="nc-icon nc-button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            <?php
            } else if ($this->session->userdata('id_akses') == 4) {
                ?>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/PA'); ?>">
                        <i class='nc-icon nc-delivery-fast'></i>
                        <p>Pesanan Antar</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/PDM'); ?>">
                        <i class='nc-icon nc-bullet-list-67'></i>
                        <p>Daftar Meja</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="<?= base_url('auth/logout'); ?>">
                        <i class="nc-icon nc-button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            <?php
            } elseif ($this->session->userdata('id_akses') == 3) { ?>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/stok'); ?>">
                        <i class='nc-icon nc-grid-45'></i>
                        <p>Stok</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/pm'); ?>">
                        <i class='nc-icon nc-email-85'></i>
                        <p>Pesanan Masuk</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/tampil_stok'); ?>">
                        <i class='nc-icon nc-bullet-list-67'></i>
                        <p>Tabel Stok</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="<?= base_url('auth/logout'); ?>">
                        <i class="nc-icon nc-button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            <?php
            } elseif ($this->session->userdata('id_akses') == 1) { ?>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('user'); ?>">
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <p>Tambah Karyawan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#kasir">
                        <i class="nc-icon nc-credit-card"></i>
                        <p>
                            Kasir
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="kasir">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="components/buttons.html">
                                    <span class="sidebar-mini">PR</span>
                                    <span class="sidebar-normal">Pembayaran</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/grid.html">
                                    <span class="sidebar-mini">PS</span>
                                    <span class="sidebar-normal">Pesanan</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/panels.html">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Laporan Penjualan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#koki">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            Kepala Koki
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="koki">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="components/buttons.html">
                                    <span class="sidebar-mini">ST</span>
                                    <span class="sidebar-normal">Stok</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/grid.html">
                                    <span class="sidebar-mini">PM</span>
                                    <span class="sidebar-normal">Pesanan Masuk</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pelayan">
                        <i class="nc-icon nc-notes"></i>
                        <p>
                            Pelayan
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="pelayan">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="components/buttons.html">
                                    <span class="sidebar-mini">PA</span>
                                    <span class="sidebar-normal">Pesanan Antar</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/grid.html">
                                    <span class="sidebar-mini">PS</span>
                                    <span class="sidebar-normal">Daftar Meja</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="<?= base_url('auth/logout'); ?>">
                        <i class="nc-icon nc-button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <!-- navv -->
    </div>
</div>
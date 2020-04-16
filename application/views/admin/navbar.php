<div class="main-panel">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-outline-primary btn-fill btn-round btn-icon d-none d-lg-block">
                        <i class="fa fa-navicon visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo"> Akses Anda <b><?= $akses; ?></b> </a>
            </div>
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="dropdown nav-item">
                        <?php
                        if ($akses == "Kepala Koki") {
                            $query = "SELECT count(id_meja) as jumlah_pm FROM tb_detail_pesan where status_pesanan = 'Pesanan Masuk'";
                            $notif1 = $this->db->query($query)->row_array();
                            $query = "SELECT count(id_makanan) as jumlah_stok FROM tb_makanan where stok = '0'";
                            $notif2 = $this->db->query($query)->row_array();
                            $query = "SELECT count(id_minuman) as jumlah_stok FROM tb_minuman where stok = '0'";
                            $notif3 = $this->db->query($query)->row_array();
                            $query = "SELECT * FROM tb_makanan where stok = '0'";
                            $notif4 = $this->db->query($query)->row_array();
                            $query = "SELECT * FROM tb_minuman where stok = '0'";
                            $notif5 = $this->db->query($query)->row_array();
                            $query = "SELECT * FROM tb_detail_pesan where status_pesanan = 'Pesanan Masuk'";
                            $notif6 = $this->db->query($query)->row_array();
                            $notif = $notif1['jumlah_pm'] + $notif2['jumlah_stok'] + $notif3['jumlah_stok'];
                            ?>
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-bell-55"></i>
                                <span class="notification"><?= $notif; ?></span>
                                <span class="d-lg-none">Notification</span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($notif4) { ?><a class="dropdown-item" href="<?= base_url('admin/stok'); ?>">Stok Kosong<?php } ?></a>
                                <?php if ($notif6) { ?><a class="dropdown-item" href="<?= base_url('admin/pm'); ?>">Pesanan Masuk<?php } ?></a>
                            </ul>
                        <?php
                        } else if ($akses == "Pelayan") {
                            $query = "SELECT count(id_meja) as jumlah_pa FROM tb_detail_pesan where status_pesanan = 'Pesanan Antar'";
                            $notif1 = $this->db->query($query)->row_array();
                            $query = "SELECT count(id_meja) as jumlah_stok FROM tb_meja where id_status_meja = '3'";
                            $notif2 = $this->db->query($query)->row_array();
                            $notif = $notif1['jumlah_pa'] + $notif2['jumlah_stok'];
                            ?>
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-bell-55"></i>
                                <span class="notification"><?= $notif; ?></span>
                                <span class="d-lg-none">Notification</span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($notif2) { ?><a class="dropdown-item" href="<?= base_url('admin/stok'); ?>">Bersihkan Meja<?php } ?></a>
                                <?php if ($notif1) { ?><a class="dropdown-item" href="<?= base_url('admin/pa'); ?>">Pesan Antar<?php } ?></a>
                            </ul>
                        <?php
                        } else if ($akses == "Kasir") {
                            $query = "SELECT count(id_meja) as jumlah_pb FROM tb_detail_pesan where status_pesanan = 'Pesanan Diterima'";
                            $notif1 = $this->db->query($query)->row_array();
                            $notif = $notif1['jumlah_pb'];
                            ?>
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-bell-55"></i>
                                <span class="notification"><?= $notif; ?></span>
                                <span class="d-lg-none">Notification</span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($notif1) { ?><a class="dropdown-item" href="<?= base_url('admin/pembayaran'); ?>">Belum Bayar <?php } ?></a>
                            </ul>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-settings-tool-66"></i>
                            <span class="d-lg-none"><?= $user['nama_pengguna']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('admin/edit_profile/' . $user['id_pengguna']); ?>">
                                <i class="nc-icon nc-circle-09"></i> Edit Profile
                            </a>
                            <a class="dropdown-item" href="<?= base_url('admin/kirim_masukan'); ?>">
                                <i class="nc-icon nc-email-85"></i> Kirim masukan
                            </a>
                            <div class="divider"></div>
                            <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                                <i class="nc-icon nc-button-power"></i> Log out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
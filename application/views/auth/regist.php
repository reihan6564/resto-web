<div class="wrapper wrapper-full-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container mt-3">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="<?= base_url('auth'); ?>">
                    <i class="nc-icon nc-badge"></i>&nbsp
                    Resto Web
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="<?= base_url('auth/registrasi') ?>" class="nav-link">
                            <i class="nc-icon nc-badge"></i> Register
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url('auth') ?>" class="nav-link">
                            <i class="nc-icon nc-mobile"></i> Login
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url('user') ?>" class="nav-link">
                            <i class="nc-icon nc-circle-09"></i> Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
    <div class="full-page register-page section-image" data-color="blue" data-image="<?= base_url(); ?>assets/img/full-screen-image-3.jpg">
        <div class="content" style="margin-top:-20px;">
            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="container">
                        <div class="card card-register card-plain text-center" style="background-color: rgba(0,0,0,0);">
                            <div class="card-header">
                                <div class="row  justify-content-center">
                                    <div class="col-md-8">
                                        <div class="header-text">
                                            <?= $this->session->flashdata('message'); ?>
                                            <h2 class="card-title">Registrasi Account Resto Web</h2>
                                            <hr class="bg-light" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 m-auto">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="nc-icon nc-circle-09"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Pelayan</h4>
                                                <p>Orang yang mengantarkan pesanan sesuai pesanan yang sudah dibuat oleh pembeli menggunakan App Resto Web</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="nc-icon nc-preferences-circle-rotate"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Kepala Koki</h4>
                                                <p>Menerima pesanan yang akan dibuat oleh pelayan dan langsung dibuat, serta mengatur ketersedian stok makanan yang harus dibuat agar tidak terjadi kekosongan stok saat pembeli ingin memilih makanan</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="nc-icon nc-planet"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Kasir</h4>
                                                <p>Tempat pembayaran pesanan, pembelian makanan langsung dibawa pulang</p>
                                            </div>
                                        </div>
                                        <hr class="bg-light" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="card card-register card-plain text-center bg-light" style="background-color: rgba(0,0,0,.0);">
                            <div class="card-header">
                                <div class="row  justify-content-center">
                                    <div class="col-md-8">
                                        <div class="header-text">
                                            <h2 class="card-title text-primary">Registrasi Account Resto Web</h2>
                                            <hr style="background-color:blue;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="card card-plain col-md-9 m-auto" style="background-color: rgba(0,0,0,.0);">
                                        <form method="post" action="<?= base_url('auth/registrasi') ?>" enctype="multipart/form-data">
                                            <div class="form-group text-left" style="margin-bottom:-2px;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="" class="text-capitalize text-primary">Email</label>
                                                        <input type="email" value="<?= set_value('email'); ?>" placeholder="Your Email" name="email" class="form-control text-primary">
                                                        <?= form_error('email', '<small class="text-danger ">', '</small>') ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="text-capitalize text-primary">Username</label>
                                                        <input type="text" value="<?= set_value('username'); ?>" placeholder="Your Username" name="username" class="form-control text-primary">
                                                        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left" style="margin-bottom:-2px;">
                                                <label for="" class="text-capitalize text-primary">Password</label>
                                                <input type="password" value="<?= set_value('password'); ?>" placeholder="Your Password" name="password" class="form-control text-primary">
                                                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group text-left" style="margin-bottom:-2px;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="" class="text-capitalize text-primary">Akses</label>
                                                        <select name="akses" id="" class="form-control text-primary">
                                                            <option>Pilih Akses</option>
                                                            <?php
                                                            $query = $this->db->query("SELECT * FROM tb_akses WHERE NOT hak_akses='Manager'")->result_array();
                                                            foreach ($query as $aks) :
                                                                ?>
                                                                <option value="<?= $aks['id_akses']; ?>"><?= $aks['hak_akses']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('akses', '<small class="text-light">', '</small>') ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="text-capitalize text-primary"> Tanggal lahir</label>
                                                        <input type="date" value="<?= set_value('tanggal_lahir'); ?>" placeholder="Tanggal Lahir" name="tanggal_lahir" class="form-control">
                                                        <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left" style="margin-bottom:-2px;">
                                                <label for="" class="text-capitalize text-primary">Alamat</label>
                                                <input type="text" value="<?= set_value('alamat'); ?>" placeholder="Masukkan Alamat" name="alamat" class="form-control text-primary">
                                                <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="row">
                                                <div class="form-group text-left col-md-12">
                                                    <label class="text-capitalize text-primary">Gambar</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="gambar" id="gambar" class="custom-file-input">
                                                        <label for="gambar" class="custom-file-label text-capitalize text-primary">Cari gambar</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-fill btn-outline btn-primary btn-wd">Buat</button>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <small class="text-primary">Anda sudah daftar mari , <b><a href="<?= base_url('auth'); ?>" class="text-light badge badge-primary">login</a></b></small>
                                                </div>
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
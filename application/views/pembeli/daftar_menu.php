<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo_rw.ico">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/all.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Monospace, sans-serif;
        }

        .gambar {
            width: 50px;
            height: 50px;
            position: relative;
            z-index: 1;
            float: left;
            margin-right: 10px;
        }

        h4 {
            margin-top: 10px;
        }
    </style>
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  navbar-inverse" id="atas">
        <img src="<?= base_url('assets/img/warnagradis.png'); ?>" alt="" class="gambar">
        <h4 class="text-light">Resto Web</h4>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <span class="mr-auto"></span>
            <span class="navbar-text">
                <div class="navbar-nav" id="link">
                    <a class="nav-item nav-link" href="<?= base_url('user'); ?>"><i class="fas fa-home"></i> Home</a>
                    <a class="nav-item nav-link" href="<?= base_url('user/pesanan'); ?>"><i class="fas fa-shopping-basket"></i> Pesan</a>
                    <a class="nav-item nav-link" href="<?= base_url('user/daftar_menu'); ?>"><i class="fas fa-tasks"></i> Daftar Menu</a>
                    <a class="nav-item nav-link" href="<?= base_url('auth'); ?>"><i class="fas fa-door-open"></i> Login</a>
                </div>
            </span>
        </div>
    </nav>

    <div class="content" id="carapesan" style="padding-top:5%;">
        <div style="padding-left:8%;padding-right:8%;">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-header">
                        <div class="alert alert-dark">
                            <h5>Makanan</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $mk = $this->db->query('SELECT * FROM tb_makanan')->result_array();
                            foreach ($mk as $mkn) :
                                ?>
                                <div class="col-md-4" style="padding-bottom:5%;">
                                    <div class="card">
                                        <a href="<?= base_url('user/daftarmenu') ?>">
                                            <img src="<?= base_url() ?>assets/img/<?= $mkn['gambar_makanan']; ?>" class="card-img-top" style="width:100%; height:190px;">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $mkn['nama_makanan']; ?></h5>
                                            <p class="card-text">Jenis Makanan <?= $mkn['jenis_makanan']; ?></p>
                                            <p class="card-text">Rp.<?= $mkn['harga_makanan']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="carapesan" style="padding-top:5%;">
        <div style="padding-left:8%;padding-right:8%;">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-header">
                        <div class="alert alert-dark">
                            <h5>Minuman</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $mk = $this->db->query('SELECT * FROM tb_minuman')->result_array();
                            foreach ($mk as $mkn) :
                                ?>
                                <div class="col-md-4" style="padding-bottom:5%;">
                                    <div class="card">
                                        <a href="<?= base_url('user/daftarmenu') ?>">
                                            <img src="<?= base_url() ?>assets/img/<?= $mkn['gambar_minuman']; ?>" class="card-img-top" style="width:100%; height:190px;">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $mkn['nama_minuman']; ?></h5>
                                            <p class="card-text">Jenis Makanan <?= $mkn['jenis_minuman']; ?></p>
                                            <p class="card-text">Rp.<?= $mkn['harga_minuman']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="carapesan" style="padding-top:5%;">
        <div style="padding-left:8%;padding-right:8%;">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-header">
                        <div class="alert alert-dark">
                            <h5>Paket</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $mk = $this->db->query('SELECT * FROM tb_paket')->result_array();
                            foreach ($mk as $mkn) :
                                ?>
                                <div class="col-md-4" style="padding-bottom:5%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title"><?= $mkn['nama_paket']; ?></h4>
                                            <?php
                                                $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_1 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_2 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_3 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_4 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_5 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_1 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_2 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_3 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_4 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                            <?php
                                                $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_5 and id_paket = '" . $mkn['id_paket'] . "'");

                                                foreach ($query->result_array() as $row) :
                                                    ?>
                                                <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                            <?php
                                                endforeach;
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="carapesan" style="padding-top:10%;">
        <div style="padding-left:8%;padding-right:8%;">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-header text-light">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 style="float:right"><a href="#atas"><i class="far fa-arrow-alt-circle-up text-light"></i></a></h2>
                                <h5>Footer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-light">Aplication Responsive & mobile friendly.</p>
                        <a class="text-light">© 2019 Resto Web, your convenience our satisfaction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>

</html>
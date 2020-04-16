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

        .gambar {
            width: 50px;
            height: 50px;
            position: relative;
            z-index: 1;
            float: left;
            margin-right: 10px;
        }

        .navbar-toggler {
            z-index: 1;
        }

        h4 {
            margin-top: 10px;
        }

        .nav-item {
            color: snow;
            font-weight: 500;
        }

        .carousel-caption {
            text-shadow: 2px 2px midnightblue;
        }

        .carousel-item img {
            height: 725px;
        }

        .navbar {
            position: relative;
            z-index: 1;
            background-color: #383c42;
        }

        .kartu {
            padding-bottom: 3%;
        }

        /* Destop versi */
        @media (min-width: 992px) {
            .carousel-item img {
                height: 960px;
            }

            .bd-example {
                margin-top: -127px;
            }

            .navbar {
                position: relative;
                z-index: 1;
                background-color: rgba(0, 0, 0, .0);
            }

            .kartu {
                padding-top: 0%;
            }

        }
    </style>
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="atas">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/warnagradis.png'); ?>" alt="" class="gambar">
            <h4 class="text-light">Resto Web</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <span class="mr-auto"></span>
            <span class="navbar-text">
                <div class="navbar-nav" id="link">
                    <a class="nav-item nav-link text-light" href="#carapesan"><i class="fas fa-clipboard-list"></i> Cara Pesan</a>
                    <a class="nav-item nav-link text-light" href="<?= base_url('user/pesanan'); ?>"><i class="fas fa-shopping-basket"></i> Pesan</a>
                    <a class="nav-item nav-link text-light" href="<?= base_url('user/daftar_menu'); ?>"><i class="fas fa-tasks"></i> Daftar Menu</a>
                    <a class="nav-item nav-link text-light" href="<?= base_url('auth'); ?>"><i class="fas fa-door-open"></i> Login</a>
                </div>
            </span>
        </div>
    </nav>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>assets/img/brick-wall.jpg" class="d-block" alt="..." width="2000px;">
                    <div class="carousel-caption d-inline d-md-block">
                        <h1 style="margin-top:-500px;">Moto kami adalah</h1>
                        <p>Kenyang sudah biasa tetapi kualitas sudah menjadi integritas</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/meja-makan (2).jpg" class="d-block" alt="..." width="2000px;">
                    <div class="carousel-caption d-inline d-md-block">
                        <h1 style="margin-top:-500px;">Menyediakan Beberapa Aneka Ragam Makanan</h1>
                        <p>Tradisional , Internasional dan Lokal</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/meja-makan(3).jpg" class="d-block" alt="..." width="2000px;">
                    <div class="carousel-caption d-inline d-md-block">
                        <h1 style="margin-top:-500px;">Makan banyak akan memuaskan perut</h1>
                        <p>Tetapi ingatlah jika terlalu kenyang dalam makan bisa memperkaya kami :V</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content bg-light" style="padding-bottom:100px; padding-top:100px;">
        <div class="container">
            <div class="card">
                <h4 class="card-header alert-dark">Daftar Menu</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 kartu">
                            <?php
                            $mkn = $this->db->query('SELECT * FROM tb_makanan')->row_array();
                            ?>
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
                        <div class="col-md-4 kartu">
                            <?php
                            $mnm = $this->db->query('SELECT * FROM tb_minuman')->row_array();
                            ?>
                            <div class="card">
                                <a href="<?= base_url('user/daftarmenu') ?>">
                                    <img src="<?= base_url() ?>assets/img/<?= $mnm['gambar_minuman']; ?>" class="card-img-top" style="width:100%; height:190px;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $mnm['nama_minuman']; ?></h5>
                                    <p class="card-text">Jenis Minuman <?= $mnm['jenis_minuman']; ?></p>
                                    <p class="card-text">Rp.<?= $mnm['harga_minuman']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 kartu">
                            <?php
                            $m = $this->db->query('SELECT * FROM tb_makanan order by id_makanan DESC')->row_array();
                            ?>
                            <div class="card">
                                <a href="<?= base_url('user/daftarmenu') ?>">
                                    <img src="<?= base_url() ?>assets/img/<?= $m['gambar_makanan']; ?>" class="card-img-top" style="width:100%; height:190px;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $m['nama_makanan']; ?></h5>
                                    <p class="card-text">Jenis Makanan <?= $m['jenis_makanan']; ?></p>
                                    <p class="card-text">Rp.<?= $m['harga_makanan']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="content bg-dark" id="carapesan" style="padding-bottom:100px; padding-top:100px;">
        <div class="container">
            <div class="card">
                <h4 class="card-header alert-dark">Cara pesan</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-dark" role="alert">
                                <div class="card-body">
                                    Pertama klik link <b>Pesan</b> di bagian navbar , lalu akan dimunculkan beberapa bagian yang harus anda pilih yaitu meja, makanan , minuman atau paket.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-dark" role="alert">
                                <div class="card-body">
                                    Jika ingin melihat pesanan yang akan dipesan, anda bisa mengeceknya dengan menekan tombol <b>Detail Pesan</b>, di detail pesan anda dapat mengecek data pesanan yang anda pesan
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-dark" role="alert">
                                <div class="card-body">
                                    Jika sudah yakin dengan pesanan yang ingin dipesan Klik <b>Buat Pesanan</b>. Terakhir anda akan diberi <b>No Pembayaran / Kode Pembayaran</b> untuk melakukan pembayaran
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h1><span class="badge badge-pill badge-dark"><i class="fas fa-shopping-basket"></i> Pesanan </span></h1>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1><span class="badge badge-pill badge-dark"><i class="fas fa-clipboard-list"></i> Detail Pesanan</span></h1>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1><span class="badge badge-pill badge-dark"><i class="far fa-money-bill-alt"></i> Pembayaran</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content bg-light" id="profile" style="padding-bottom:100px; padding-top:100px;">
        <div class="container">
            <div class="card">
                <h4 class="card-header alert-dark">Profile</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dark" role="alert">
                                <div class="card-body">
                                    <div class="card mb-3" style="max-width: 1000px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="<?= base_url(); ?>assets/img/architecture.jpg" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Resto Web</h5>
                                                    <p class="card-text">Adalah aplikasi web ini menggunakan bahasa pemrograman PHP Codeigniter. Untuk alur sendiri aplikasi ini mengikuti alur yang ada di caffe atau restaurant yang ada. Seperti memesan melalui aplikasi setelah duduk dimeja tertentu setelah memesan makanan akan di antarkan oleh pelayan yang sudah membawa pesanan dan jika selesai makan akan menerima kode yang harus dibayarkan kepada kasir restaurant tersebut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content bg-dark" id="carapesan">
        <div style="padding-left:8%;padding-right:8%;">
            <div class="col-md-12">
                <div class="card bg-dark">
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
<style type="text/javascript">

</style>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>

</html>
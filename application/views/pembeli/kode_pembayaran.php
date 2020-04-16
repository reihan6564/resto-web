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

        .btn {
            cursor: pointer;
        }



        .card {
            margin-top: 10%;
        }

        @media (min-width:992px) {
            .card {
                margin: auto;
            }
        }

        .judul {
            border-style: solid;
            border-width: 1px;
            border-color: snow;
            border-radius: 3px;
            margin-top: 10px;
        }

        .judul h2 {
            margin-top: 5px;
        }
    </style>
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>

    <div class="container" style="padding-top:10%;">

        <div class="container">
            <div class="row">
                <div class="card bg-dark text-light">
                    <div class="col-md-12">
                        <div class="judul col-md-12 text-center">
                            <h2>Kode Pembayaran :<b> <?= $this->session->userdata('kode'); ?></b></h2>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12 text-center">
                            <h5>Jumlah yang harus dibayar : <b>Rp.<?= $this->session->userdata('total'); ?></b></h5>
                        </div>
                        <br>
                        <div class="col-md-12 text-center">
                            <a href="<?= base_url('user/batal'); ?>" class="btn btn-outline-success text-center" onclick="return confirm('Apakah anda yakin sudah membayar');">Selesai</a>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12 text-center">
                            <small>Klik <b>Selesai</b> jika sudah bayar</small>
                            <br>
                            <br>
                            <span>Silahkan Bayar Ke kasir dan Terima kasih telah makan di tempat kami Sampai Jumpa ^_^</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    /*
    echo $this->session->userdata('makanan1') . "<br>";
    echo $this->session->userdata('makanan2') . "<br>";
    echo $this->session->userdata('makanan3') . "<br>";
    echo $this->session->userdata('makanan4') . "<br>";
    echo $this->session->userdata('makanan5') . "<br>";
    echo $this->session->userdata('minuman1') . "<br>";
    echo $this->session->userdata('minuman2') . "<br>";
    echo $this->session->userdata('minuman3') . "<br>";
    echo $this->session->userdata('minuman4') . "<br>";
    echo $this->session->userdata('minuman5') . "<br>";
    echo $this->session->userdata('id1') . "<br>";
    echo $this->session->userdata('id2') . "<br>";
    echo $this->session->userdata('id3') . "<br>";
    echo $this->session->userdata('id4') . "<br>";
    echo $this->session->userdata('id5') . "<br>";
    echo $this->session->userdata('id_m1') . "<br>";
    echo $this->session->userdata('id_m2') . "<br>";
    echo $this->session->userdata('id_m3') . "<br>";
    echo $this->session->userdata('id_m4') . "<br>";
    echo $this->session->userdata('id_m5') . "<br>";
*/
    ?>

</body>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>

</html>
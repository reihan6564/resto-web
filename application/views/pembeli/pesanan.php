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


        #pesanan {
            padding-top: 15px;
        }

        .nav-item .nav-link {
            color: #b2bec3 !important;
        }

        .nav-item .nav-link:hover {
            color: #b2bec3 !important;
        }

        .nav-item .active:hover {
            color: black !important;
        }

        .keranjang {
            margin-left: 10%;
            margin-right: 10%;

        }

        .btn-outline-light:hover {
            color: #2d3436 !important;
        }

        @media (min-width:992px) {
            #pesanan {
                padding-bottom: 10px;
                padding-top: 10px;
            }

            .keranjang2 {
                margin-right: 10%;
                margin-top: 25%;
            }
        }
    </style>
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>
    <div id="pesanan">
        <div class="col-md-12 text-center">
            <div class="card" style="background-color:#0984e3;">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-pizza-slice"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-beer"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-list"></i></a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?= base_url('user'); ?>"><i class="fas fa-backward"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="keranjang-tab" data-toggle="tab" href="#keranjang" role="tab" aria-controls="keranjang" aria-selected="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="notif text-black">
                                    <?php
                                    $jmlhm = 0;
                                    $jmlhmn = 0;
                                    $jmlhp = 0;
                                    $mak1 =  $this->session->userdata('id1');
                                    $mak2 =  $this->session->userdata('id2');
                                    $mak3 =  $this->session->userdata('id3');
                                    $mak4 =  $this->session->userdata('id4');
                                    $mak5 =  $this->session->userdata('id5');
                                    $min1 =  $this->session->userdata('id_m1');
                                    $min2 =  $this->session->userdata('id_m2');
                                    $min3 =  $this->session->userdata('id_m3');
                                    $min4 =  $this->session->userdata('id_m4');
                                    $min5 =  $this->session->userdata('id_m5');
                                    $pak1 =  $this->session->userdata('id_p');
                                    if ($mak1) {
                                        $mak1 = 1;
                                        $jmlhm = $mak1;
                                    }
                                    if ($mak2) {
                                        $mak2 = 1;
                                        $jmlhm = $mak1 + $mak2;
                                    }
                                    if ($mak3) {
                                        $mak3 = 1;
                                        $jmlhm = $mak1 + $mak2 + $mak3;
                                    }
                                    if ($mak4) {
                                        $mak4 = 1;
                                        $jmlhm = $mak1 + $mak2 + $mak3 + $mak4;
                                    }
                                    if ($mak5) {
                                        $mak5 = 1;
                                        $jmlhm = $mak1 + $mak2 + $mak3 + $mak4 + $mak5;
                                    }
                                    if ($min1) {
                                        $min1 = 1;
                                        $jmlhmn = $min1;
                                    }
                                    if ($min2) {
                                        $min2 = 1;
                                        $jmlhmn = $min1 + $min2;
                                    }
                                    if ($min3) {
                                        $min3 = 1;
                                        $jmlhmn = $min1 + $min2 + $min3;
                                    }
                                    if ($min4) {
                                        $min4 = 1;
                                        $jmlhmn = $min1 + $min2 + $min3 + $min4;
                                    }
                                    if ($min5) {
                                        $min5 = 1;
                                        $jmlhmn = $min1 + $min2 + $min3 + $min4 + $min5;
                                    }
                                    if ($pak1) {
                                        $paket = 1;
                                        $jmlhp = $paket;
                                    }
                                    $jmlh = $jmlhm + $jmlhmn + $jmlhp;
                                    echo $jmlh;
                                    ?></span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card card-body">
                                <div class="row">
                                    <?php foreach ($makanan as $mkn) :

                                        ?>
                                        <div class="col-lg-4 col-sm-6 mb-5">
                                            <div class="card card-stats">
                                                <div class="card-body bg-primary">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center icon-warning">
                                                                <img src="<?= base_url('assets/img/') . $mkn['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="numbers">
                                                                <p class="card-category text-light"><?= $mkn['nama_makanan']; ?></p>
                                                                <p class="card-category text-light"><b><?= $mkn['jenis_makanan']; ?></b></p>
                                                                <p class="card-category text-light">Rp. <?= $mkn['harga_makanan']; ?></p>
                                                                <p class="card-category text-light"> Stok = <?= $mkn['stok']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    if ($mkn['stok'] != "0") {

                                                        ?>
                                                    <div class="card-footer">
                                                        <div class="mt-3 text-right">
                                                            <form class="form-inline" action="<?= base_url('user/bakul'); ?>" method="post">
                                                                <div class="form-group">
                                                                    <label for="inputPassword6" class="text-primary">Jumlah :</label>&nbsp&nbsp&nbsp
                                                                    <input type="text" class="form-control col-md-2" name="jml_mkn">
                                                                    <input type="text" name="id_makanan" hidden value="<?= $mkn['id_makanan']; ?>" class="form-control col-md-2" value="0">
                                                                    <span class="col-md-2"></span>
                                                                    <input type="submit" class="form-control col-md-3 btn-outline-primary" name="pesan" value="Pesan">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <?php } else {
                                                        echo " <span class='text-center btn btn-outline-danger'><b>Stok Kosong</b></span> ";
                                                    } ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card card-body ">
                                <div class="row">
                                    <?php foreach ($minuman as $mnm) : ?>
                                        <div class="col-lg-4 col-sm-6 mb-5">
                                            <div class="card card-stats ">
                                                <div class="card-body bg-primary">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center icon-warning">
                                                                <img src="<?= base_url('assets/img/') . $mnm['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="numbers">
                                                                <p class="card-category text-light"><?= $mnm['nama_minuman']; ?></p>
                                                                <p class="card-category text-light"><b><?= $mnm['jenis_minuman']; ?></b></p>
                                                                <p class="card-category text-light">Rp. <?= $mnm['harga_minuman']; ?></p>
                                                                <p class="card-category text-light"> Stok = <?= $mnm['stok']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    if ($mnm['stok'] != "0") {

                                                        ?>
                                                    <div class="card-footer">
                                                        <div class="mt-3 text-right">
                                                            <form class="form-inline" action="<?= base_url('user/bakul2'); ?>" method="post">
                                                                <div class="form-group">
                                                                    <label for="inputPassword6">Jumlah :</label>&nbsp&nbsp&nbsp
                                                                    <input type="text" class="form-control col-md-2" name="jml_mnm">
                                                                    <input type="text" name="id_minuman" hidden value="<?= $mnm['id_minuman']; ?>" class="form-control col-md-2" value="0">
                                                                    <span class="col-md-2"></span>
                                                                    <input type="submit" class="form-control col-md-3 btn-outline-primary" name="pesan" value="Pesan">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <?php } else {
                                                        echo " <span class='text-center btn btn-outline-danger'><b>Stok Kosong</b></span> ";
                                                    } ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="card card-body">
                                <div class="row">
                                    <?php foreach ($pakets as $pkt) : ?>
                                        <div class="col-lg-4 col-sm-6 mb-5">
                                            <div class="card card-stats">
                                                <div class="card-body bg-primary">
                                                    <div class="row">

                                                        <div class="col-7">
                                                            <div class="numbers">
                                                                <p class="card-category text-light"><?= $pkt['nama_paket']; ?></p>
                                                                <p class="card-category text-light">Rp. <?= $pkt['total_hrg_paket']; ?></p>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_1 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_makanan']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_2 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_makanan']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_3 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_makanan']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_4 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_makanan']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_5 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_makanan']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_1 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_minuman']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_2 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_minuman']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_3 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_minuman']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_4 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_minuman']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_5 and id_paket = '" . $pkt['id_paket'] . "'");

                                                                    foreach ($query->result_array() as $row) :
                                                                        ?>
                                                                    <p class="card-category text-light"><b><?= $row['nama_minuman']; ?></b></p>
                                                                <?php
                                                                    endforeach;
                                                                    ?>
                                                                <?php
                                                                    $query = $this->db->query("SELECT gambar_makanan FROM tb_paket,tb_makanan where id_paket = '" . $pkt['id_paket'] . "' and id_makanan = makanan_1");
                                                                    ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="mt-3 text-right">
                                                        <form class="form-inline" action="<?= base_url('user/bakul3'); ?>" method="post">
                                                            <div class="form-group">
                                                                <label class="text-center">Jumlah :</label>&nbsp&nbsp&nbsp
                                                                <input type="text" name="jml_pkt" class="form-control col-md-2">
                                                                <input type="text" class="form-control col-md-2" name="id_paket" value="<?= $pkt['id_paket']; ?>" hidden>
                                                                <span class="col-md-2"></span>
                                                                <input type="submit" class="form-control col-md-3 btn-outline-primary" name="pesan" value="Pesan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keranjang" role="tabpanel" aria-labelledby="keranjang-tab">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-7" style="margin-top:10px;">
                                        <div class="card keranjang">
                                            <div class="card-header bg-primary text-light">
                                                <h6><b>Makanan</b></h6>
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                for ($i = 1; $i < 6; $i++) {
                                                    $id = "id" . $i;
                                                    $makanan = $this->session->userdata($id);
                                                    if ($makanan) {
                                                        ?>
                                                        <div class="card">
                                                            <div class="card-body bg-primary">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-light"><?php
                                                                                                                $query = $this->db->query("select * from tb_makanan where id_makanan = '$makanan'")->row_array();
                                                                                                                echo $query['nama_makanan'];
                                                                                                                ?></div>
                                                                    <div class="col-md-2 text-light"> <a href="<?= base_url('user/hapus_barang_m/') . $makanan; ?>" class="btn btn-outline-light">Hapus</a> </div>
                                                                    <div class="col-md-3 text-light"><?php
                                                                                                                $a = "makanan" . $i;
                                                                                                                $jml = $this->session->userdata($a);
                                                                                                                echo "(" . $jml . ")";
                                                                                                                ?> </div>
                                                                    <div class="col-md-2 text-light "><?php
                                                                                                                $makanan = $this->session->userdata($id);
                                                                                                                $jml_mk1 = $this->session->userdata($a);
                                                                                                                $query = $this->db->query("select * from tb_makanan where id_makanan = '$makanan'")->row_array();
                                                                                                                $h1 = $query['harga_makanan'];
                                                                                                                $hasil =  $h1 * $jml_mk1;
                                                                                                                echo "Rp. " . $hasil;
                                                                                                                ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div class="card-header bg-primary text-light">
                                                <h5><b>Minuman</b></h5>
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                for ($i = 1; $i < 6; $i++) {
                                                    $id = "id_m" . $i;
                                                    $minuman = $this->session->userdata($id);
                                                    if ($minuman) {
                                                        ?>
                                                        <div class="card">
                                                            <div class="card-body bg-primary">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-light"><?php
                                                                                                                $query = $this->db->query("select * from tb_minuman where id_minuman = '$minuman'")->row_array();
                                                                                                                echo $query['nama_minuman'];
                                                                                                                ?></div>
                                                                    <div class="col-md-2 text-light"> <a href="<?= base_url('user/hapus_barang_mn/') . $minuman; ?>" class="btn btn-outline-light">Hapus</a> </div>
                                                                    <div class="col-md-3 text-light"><?php
                                                                                                                $a = "minuman" . $i;
                                                                                                                $jml = $this->session->userdata($a);
                                                                                                                echo "(" . $jml . ")";
                                                                                                                ?> </div>
                                                                    <div class="col-md-2 text-light"><?php
                                                                                                                $minuman = $this->session->userdata($id);
                                                                                                                $jml_mk1 = $this->session->userdata($a);
                                                                                                                $query = $this->db->query("select * from tb_minuman where id_minuman = '$minuman'")->row_array();
                                                                                                                $h1 = $query['harga_minuman'];
                                                                                                                $hasil = $h1 * $jml_mk1;
                                                                                                                echo "Rp. " . $hasil;
                                                                                                                ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div class="card-header bg-primary text-light">
                                                <h5><b>Paket</b></h5>
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                $id = "id_p";
                                                $pkt = $this->session->userdata($id);
                                                $jml = $this->session->userdata('jml_pkt');
                                                if ($pkt) {
                                                    ?>
                                                    <div class="card">
                                                        <div class="card-body bg-primary">
                                                            <div class="row">
                                                                <div class="col-md-5 text-light"><?php

                                                                                                        $query = $this->db->query("select * from tb_paket where id_paket = '$pkt'")->row_array();
                                                                                                        echo $query['nama_paket'];
                                                                                                        ?></div>
                                                                <div class="col-md-2 text-light"> <a href="<?= base_url('user/hapus_barang_p'); ?>" class="btn btn-outline-light">Hapus</a> </div>
                                                                <div class="col-md-3 text-light"><?php
                                                                                                        echo "(" . $jml . ")";
                                                                                                        ?> </div>
                                                                <div class="col-md-2 text-light"><?php
                                                                                                        $hasil = $jml * $query['total_hrg_paket'];
                                                                                                        echo "Rp. " . $hasil;
                                                                                                        ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card keranjang2">
                                            <div class="card-body bg-primary">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <hr>
                                                        <a href="<?= base_url('user/batal_'); ?>" class="btn btn-outline-danger">Hapus Semua</a>
                                                        <hr>
                                                        <a href="<?= base_url('user/detail_pesan'); ?>" class="btn btn-outline-success">Lanjutkan ke pembayaran</a>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">

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
</body>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" type="text/javascript">
</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>

</html>
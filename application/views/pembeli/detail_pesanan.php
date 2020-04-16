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

        .ringkasan {
            margin-top: 15px;
        }

        @media (min-width:992px) {
            .ringkasan {
                margin-top: 0px;
            }
        }
    </style>
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head>

<body>

    <div class="container" style="padding-top:5%;">

        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card" style="margin-left:-15px;margin-right:-15px;">
                            <div class="card-header bg-dark text-light">
                                <h5>Detail Pesanan</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                for ($i = 1; $i < 6; $i++) {
                                    $id = "id" . $i;
                                    $makanan = $this->session->userdata($id);
                                    if ($makanan) {
                                        ?>
                                        <div class="card">
                                            <div class="card-body bg-dark text-light">
                                                <div class="row">
                                                    <div class="col-md-5 "><?php
                                                                            $query = $this->db->query("select * from tb_makanan where id_makanan = '$makanan'")->row_array();
                                                                            echo $query['nama_makanan'];
                                                                            ?></div>
                                                    <div class="col-md-2 "></div>
                                                    <div class="col-md-3 "><?php
                                                                            $a = "makanan" . $i;
                                                                            $jml = $this->session->userdata($a);
                                                                            echo "(" . $jml . ") * " . $query['harga_makanan'];
                                                                            ?> </div>
                                                    <div class="col-md-2 "><?php
                                                                            $makanan = $this->session->userdata($id);
                                                                            $jml_mk1 = $this->session->userdata($a);
                                                                            $query = $this->db->query("select * from tb_makanan where id_makanan = '$makanan'")->row_array();
                                                                            $h1 = $query['harga_makanan'];
                                                                            echo $mkn = $h1 * $jml_mk1;
                                                                            $mk = "mkn" . $i;
                                                                            $this->session->set_userdata($mk, $mkn);
                                                                            ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                                <?php
                                for ($i = 1; $i < 6; $i++) {
                                    $id = "id_m" . $i;
                                    $minuman = $this->session->userdata($id);
                                    if ($minuman) {
                                        ?>
                                        <div class="card">
                                            <div class="card-body bg-dark text-light">
                                                <div class="row">
                                                    <div class="col-md-5 "><?php

                                                                            $query = $this->db->query("select * from tb_minuman where id_minuman = '$minuman'")->row_array();
                                                                            echo $query['nama_minuman'];
                                                                            ?></div>
                                                    <div class="col-md-2 "> </div>
                                                    <div class="col-md-3 "><?php
                                                                            $a = "minuman" . $i;
                                                                            $jml = $this->session->userdata($a);
                                                                            echo "(" . $jml . ") * " . $query['harga_minuman'];
                                                                            ?> </div>
                                                    <div class="col-md-2 "><?php
                                                                            $minuman = $this->session->userdata($id);
                                                                            $jml_mk1 = $this->session->userdata($a);
                                                                            $query = $this->db->query("select * from tb_minuman where id_minuman = '$minuman'")->row_array();
                                                                            $h1 = $query['harga_minuman'];
                                                                            echo $mnm = $h1 * $jml_mk1;
                                                                            $mn = "mnm" . $i;
                                                                            $this->session->set_userdata($mn, $mnm);
                                                                            ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                                <?php
                                $id = "id_p";
                                $pkt = $this->session->userdata($id);
                                $jml = $this->session->userdata('jml_pkt');
                                if ($pkt) {
                                    ?>
                                    <div class="card">
                                        <div class="card-body bg-dark text-light">
                                            <div class="row">
                                                <div class="col-md-5"><?php

                                                                        $query = $this->db->query("select * from tb_paket where id_paket = '$pkt'")->row_array();
                                                                        echo $query['nama_paket'];
                                                                        ?></div>
                                                <div class="col-md-2 "> </div>
                                                <div class="col-md-3 "><?php
                                                                        echo "(" . $jml . ") * " . $query['total_hrg_paket'];
                                                                        ?> </div>
                                                <div class="col-md-2 "><?php
                                                                        echo $pkt = $jml * $query['total_hrg_paket'];
                                                                        $this->session->set_userdata('tpaket', $pkt);
                                                                        ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ringkasan" style="margin-right:-15px;margin-left:-15px;"">
                            <div class=" card-header bg-dark text-light">
                            <h5>Ringkasan Belanja</h5>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body bg-dark text-light">
                                    <?php
                                    $mkn1 = $this->session->userdata('mkn1');
                                    $mkn2 = $this->session->userdata('mkn2');
                                    $mkn3 = $this->session->userdata('mkn3');
                                    $mkn4 = $this->session->userdata('mkn4');
                                    $mkn5 = $this->session->userdata('mkn5');
                                    $mnm1 = $this->session->userdata('mnm1');
                                    $mnm2 = $this->session->userdata('mnm2');
                                    $mnm3 = $this->session->userdata('mnm3');
                                    $mnm4 = $this->session->userdata('mnm4');
                                    $mnm5 = $this->session->userdata('mnm5');
                                    $pkt = $this->session->userdata('tpaket');
                                    $totalmkn = $mkn1 + $mkn2 + $mkn3 + $mkn4 + $mkn5;
                                    $totalmnm = $mnm1 + $mnm2 + $mnm3 + $mnm4 + $mnm5;
                                    echo "Total Makanan <b>Rp." . $totalmkn . "</b>";
                                    echo "<br><hr class='bg-light'>";
                                    echo "Total Minuman <b>Rp." . $totalmnm . "</b>";
                                    echo "<br><hr class='bg-light'>";
                                    echo "Total Paket <b>Rp." . $pkt . "</b>";
                                    ?>

                                    <hr class="bg-light">
                                    <div><b>Total Harga : <?php
                                                            $mkn1 = $this->session->userdata('mkn1');
                                                            $mkn2 = $this->session->userdata('mkn2');
                                                            $mkn3 = $this->session->userdata('mkn3');
                                                            $mkn4 = $this->session->userdata('mkn4');
                                                            $mkn5 = $this->session->userdata('mkn5');
                                                            $mnm1 = $this->session->userdata('mnm1');
                                                            $mnm2 = $this->session->userdata('mnm2');
                                                            $mnm3 = $this->session->userdata('mnm3');
                                                            $mnm4 = $this->session->userdata('mnm4');
                                                            $mnm5 = $this->session->userdata('mnm5');
                                                            $pkt = $this->session->userdata('tpaket');
                                                            $total = $mkn1 + $mkn2 + $mkn3 + $mkn4 + $mkn5 + $mnm1 + $mnm2 + $mnm3 + $mnm4 + $mnm5 + $pkt;
                                                            $this->session->set_userdata('total', $total);
                                                            echo $total;
                                                            ?></b></div>
                                    <hr class="bg-light">
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <form action="<?= base_url('user/pesanmakanan'); ?>" method="post">
                                                <label for="">Pilih Meja</label>
                                                <select name="id_meja" class="form-control">
                                                    <option value=""></option>
                                                    <?php
                                                    $query = $this->db->query("SELECT * FROM tb_meja where id_status_meja = '2'")->result_array();
                                                    foreach ($query as $mj) :
                                                        ?>
                                                        <option value="<?= $mj['id_meja']; ?>"><?= $mj['nomor_meja']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="col-md-12 text-center mt-3">
                                                    <label for="">.</label>
                                                    <input type="submit" class="btn-outline-success btn" onclick="return confirm('Apakah data pesanan sudah yakin');" value="Pesan sekarang">
                                                </div>
                                                <div class="col-md-12 text-center mt-3">
                                                    <a class="btn-outline-danger btn" href="<?= base_url('user/batal') ?>" onclick="return confirm('Apakah anda ingin menghapus yang ada dibakul?');">Batal</a>
                                                </div>
                                                <div class="col-md-12 text-center mt-3">
                                                    <a class="btn-outline-info btn" href="<?= base_url('user/pesanan') ?>">Kembali</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

</body>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>

</html>
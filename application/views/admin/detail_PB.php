<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php foreach ($detail_PB as $dpPB) : ?>
                        <div class="card-header col-md-12">
                            <div class="row">
                                <div class="alert alert-danger col-md-4 text-center">
                                    <h4 class="card-title text-light">Detail Pembayaran </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 class="text-left">Kode Pembayaran :
                                        <hr><b><?= $dpPB['kode_pembayaran']; ?></b>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="text-left">ID Meja :
                                        <hr><b><?= $dpPB['id_meja']; ?></b>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="text-left">Paket :
                                        <?php
                                        $query = $this->db->query("SELECT * FROM tb_detail_pesan where kode = '$dpPB[kode_pembayaran]'");
                                        foreach ($query->result_array() as $dp) :
                                            ?>
                                            <hr><b><?= $dp['paket']; ?></b>
                                        <?php endforeach; ?>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="text-left">Status Pembayaran :
                                        <hr><b><?= $dpPB['status_pembayaran']; ?></b>
                                    </h5>
                                </div>
                                <div class="col-md-3 text-right">
                                    <h5>Total Pembayaran :
                                        <hr><b><?= $dpPB['total_pembayaran']; ?></b>
                                    </h5>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <?php
                                $query = $this->db->query("SELECT * FROM tb_detail_pesan where kode = '$dpPB[kode_pembayaran]'");
                                foreach ($query->result_array() as $dp) :
                                    ?>
                                    <div class="row">
                                        <!-- makanan 1-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan = '$dp[makanan_1]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_makanan']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mkn_1']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- makanan 2-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan = '$dp[makanan_2]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_makanan']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mkn_2']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- makanan 3-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan = '$dp[makanan_3]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_makanan']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mkn_3']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- makanan 4-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan = '$dp[makanan_4]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_makanan']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mkn_4']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- makanan 5-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan = '$dp[makanan_5]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_makanan']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mkn_5']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- minuman 1-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman = '$dp[minuman_1]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_minuman']; ?></h4>
                                                            <p class="card-category">Jumlah Minuman : <b><?= $dp['jml_mnm_1']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- Minuman 2-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman = '$dp[minuman_2]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_minuman']; ?></h4>
                                                            <p class="card-category">Jumlah Minuman : <b><?= $dp['jml_mnm_2']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- Minuman 3-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman = '$dp[minuman_3]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_minuman']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mnm_3']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- Minuman 4-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman = '$dp[minuman_4]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_minuman']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mnm_4']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                        <!-- Minuman 5-->
                                        <div class="col-lg-2 col-sm-6">
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman = '$dp[minuman_5]'");
                                            foreach ($query->result_array() as $row) :
                                                ?>
                                                <div class="card card-stats">
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="icon-big text-center icon-warning">
                                                                    <img src="<?= base_url('assets/img/') . $row['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <hr>
                                                        <div class="stats">
                                                            <h4 class="card-title"><?= $row['nama_minuman']; ?></h4>
                                                            <p class="card-category">Jumlah Makanan : <b><?= $dp['jml_mnm_5']; ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <form action="<?= base_url('admin/update_transaksi') ?>" method="post">
                                <?php
                                $sisi = $this->db->query("SELECT * FROM tb_pembayaran where id_pembayaran = '$id'")->row();
                                ?>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-8">
                                        <div>
                                            <?php
                                            if ($dpPB['status_pembayaran'] == 'Belum Bayar') {
                                                ?>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <input hidden type="text" name="id" value="<?= $id; ?>" class="form-control">
                                                        <input hidden type="text" name="kode" value="<?= $sisi->kode_pembayaran; ?>" class="form-control">
                                                        <input hidden id="total" type="text" name="total" value="<?= $sisi->total_pembayaran; ?>" class="form-control">
                                                        <label for="">Membayar</label>
                                                        <input type="text" id="bayar" name="bayar" onkeyup="sum();" class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="">Kembalian</label>
                                                        <input type="text" id="kembalian" name="kembalian" class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for=""></label>
                                                        <input type="submit" class="form-control btn btn-wd btn-outline btn-danger right" onclick="return confirm('Bayar Sekarang');" value="Bayar">
                                                    </div>

                                                </div>
                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">&nbsp</label>
                                        <a target="_blank" href="<?= base_url('admin/print_pembayaran/') . $sisi->kode_pembayaran; ?>" class="form-control btn btn-wd btn-outline btn-primary right" role="button" aria-pressed="true">Print</a>
                                    </div>
                                    <div class="col-md-2 align-right">
                                        <label for="">&nbsp</label>
                                        <a href="../pembayaran" class="form-control btn btn-wd btn-outline btn-success right" role="button" aria-pressed="true">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
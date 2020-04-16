<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php foreach ($detail_p as $dp) : ?>
                        <div class="card-header col-md-12">
                            <div class="row">
                                <div class="alert alert-danger col-md-4 text-center">
                                    <h4 class="card-title text-light">Detail Paket </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-left">Nama Paket :
                                        <hr><b><?= $dp['nama_paket']; ?></b>
                                    </h5>
                                </div>
                                <div class="col-md-5"></div>
                                <div class="col-md-3 text-right">
                                    <h5>Total Harga Paket :
                                        <hr><b><?= $dp['total_hrg_paket']; ?></b>
                                    </h5>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <!-- makanan 1-->
                                    <div class="col-lg-2 col-sm-6">
                                        <?php
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_makanan where id_makanan = makanan_1 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_makanan where id_makanan = makanan_2 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_makanan where id_makanan = makanan_3 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_makanan where id_makanan = makanan_4 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_makanan where id_makanan = makanan_5 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_minuman where id_minuman = minuman_1 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_minuman where id_minuman = minuman_2 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_minuman where id_minuman = minuman_3 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_minuman where id_minuman = minuman_4 and id_paket = '" . $dp['id_paket'] . "'");
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
                                        $query = $this->db->query("SELECT * FROM tb_paket,tb_minuman where id_minuman = minuman_5 and id_paket = '" . $dp['id_paket'] . "'");
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
                            </div>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <a href="../tampil_stok" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Kembali</a>
                                        <a href="../edit_p/<?= $dp['id_paket']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                                        <a href="../hapus_paket/<?= $dp['id_paket']; ?>" onclick="return confirm('Apakah data akan dihapus');" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Hapus</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
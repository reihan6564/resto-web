<div class="content">

    <div class="container-fluid">
        <div class="row">
            <!-- Stok makanan ////////// -->
            <div class="col-md-12">
                <div class="card" style="width: 20rem;">
                    <div class="card-body alert-primary">
                        <h5 class="card-title text-center text-light">Stok Makanan</h5>
                    </div>
                </div>
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="row">
                <?php foreach ($makanan as $mkn) : ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <img src="<?= base_url('assets/img/') . $mkn['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category"><?= $mkn['nama_makanan']; ?></p>
                                            <h4 class="card-title"><?= $mkn['jenis_makanan']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    <div class="row">
                                        <div class="col-md-6">Rp. <?= $mkn['harga_makanan']; ?></div>
                                        <?php
                                        if ($mkn['stok'] == 0) {
                                            ?>
                                            <div class='col-md-2'>
                                                <a href="" class="btn btn-outline btn-danger text-danger tampilubahstokmkn" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?= $mkn['id_makanan']; ?>">Isi</a>
                                            </div>
                                            <div class="col-md-4 text-danger text-right">
                                                Stok : <?= $mkn['stok']; ?>
                                            </div>
                                        <?php
                                        } else {
                                            ?>
                                            <div class="col-md-6 text-right"> Stok = <?= $mkn['stok']; ?></div>
                                        <?php
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlestok">Update Stok</h5>
                    </div>
                    <form action="<?= base_url('admin/stok'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok Makanan">
                                <input type="text" hidden class="form-control" id="id" name="id" placeholder="Stok Makanan">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <!-- Stok minuman ////////// -->
    <div class="col-md-12">
        <div class="card" style="width: 20rem;">
            <div class="card-body alert-primary">
                <h5 class="card-title text-center text-light">Stok Minuman</h5>
            </div>
        </div>
        <div class="row">
            <?php foreach ($minuman as $mnm) : ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center icon-warning">
                                        <img src="<?= base_url('assets/img/') . $mnm['gambar_minuman']; ?>" alt="..." class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="numbers">
                                        <p class="card-category"><?= $mnm['nama_minuman']; ?></p>
                                        <h4 class="card-title"><?= $mnm['jenis_minuman']; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i>
                                <div class="row">
                                    <div class="col-lg-6">Rp. <?= $mnm['harga_minuman']; ?></div>
                                    <?php
                                    if ($mnm['stok'] == 0) {
                                        ?>
                                        <div class='col-md-2'>
                                            <button class="btn btn-outline btn-danger text-danger tampilmodalubahminuman" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?= $mnm['id_minuman']; ?>">Isi</button>
                                        </div>
                                        <div class="col-md-4 text-danger text-right">
                                            Stok : <?= $mnm['stok']; ?>
                                        </div>
                                    <?php
                                    } else {
                                        ?>
                                        <div class="col-lg-6 text-right"> Stok = <?= $mnm['stok']; ?></div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Paket Makanan ////////// -->
    <div class="col-md-12">
        <div class="card" style="width: 20rem;">
            <div class="card-body alert-primary">
                <h5 class="card-title text-center text-light">Paket</h5>
            </div>
        </div>
        <div class="row">
            <?php foreach ($paket as $pkt) : ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="icon-big text-left icon-warning">
                                        <h4 class="card-title"><?= $pkt['nama_paket']; ?></h4>
                                        <h4 class="card-title"><?= $pkt['id_paket']; ?></h4>
                                        <?php
                                        $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_1 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_2 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_3 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_4 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_makanan FROM tb_paket,tb_makanan where id_makanan = makanan_5 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_makanan']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_1 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_2 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_3 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_4 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT nama_minuman FROM tb_paket,tb_minuman where id_minuman = minuman_5 and id_paket = '" . $pkt['id_paket'] . "'");

                                        foreach ($query->result_array() as $row) :
                                            ?>
                                            <p class="card-category"><?= $row['nama_minuman']; ?></p>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $query = $this->db->query("SELECT gambar_makanan FROM tb_paket,tb_makanan where id_paket = '" . $pkt['id_paket'] . "' and id_makanan = makanan_1");

                                        foreach ($query->result_array() as $mmm) :
                                            ?>
                                            <img src="<?= base_url('assets/img/') . $mmm['gambar_makanan']; ?>" alt="..." class="img-thumbnail">
                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i>
                                <div class="row">
                                    <div class="col-lg-6">Total Harga Paket Rp. <?= $pkt['total_hrg_paket']; ?></div>
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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-send text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category">Pesanan Masuk</p>
                                    <h4 class="card-title text-danger"><b>
                                            <?php
                                            foreach ($hitung_pm as $hpm) :
                                                echo $hpm['jumlah_pm'];
                                            endforeach; ?> Pesanan Masuk</b>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="alert alert-danger">
                            Pesanan Akan dibuat oleh koki
                        </div>
                    </div>
                </div>
            </div>
            <!------ antar pesanan -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="card-title text-light">Table Pesanan Masuk </h4>
                        </div>
                    </div>
                    <!-- table--- stok ---- minuman ----- -->
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card data-tables">
                                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                        <div class="toolbar">
                                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        </div>
                                        <div class="fresh-datatables">
                                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="disabled-sorting text-center"><b>ID</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jumlah Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jumlah Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Waktu Pesanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Status Pesanan</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pesanan_m as $pm) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pm['id_meja']; ?></td>
                                                            <?php
                                                            $query = $this->db->query("SELECT SUM(jml_mkn_1 + jml_mkn_2 + jml_mkn_3 + jml_mkn_4 + jml_mkn_5) as jumlah_f FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Masuk' and waktu_pesanan = '" . $pm['waktu_pesanan']  . "'");
                                                            foreach ($query->result_array() as $jf) :
                                                                ?>
                                                                <td><?= $jf['jumlah_f']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <?php
                                                            $kuery = $this->db->query("SELECT SUM(jml_mnm_1 + jml_mnm_2 + jml_mnm_3 + jml_mnm_4 + jml_mnm_5) as jumlah_d FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Masuk' and waktu_pesanan = '" . $pm['waktu_pesanan']  . "'");
                                                            foreach ($kuery->result_array() as $jd) :
                                                                ?>
                                                                <td><?= $jd['jumlah_d']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <td><?= $pm['waktu_pesanan']; ?></td>
                                                            <td><?= $pm['status_pesanan']; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form class="col-md-12" method="post" action="<?= base_url('admin/tambah_pesananK'); ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Tambah pesanan pembeli</h4>
                            <p class="card-category">Data yang dibuat ini akan diteruskan kepada kepala koki</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card stacked-form">
                                        <div class="card-body ">
                                            <form method="#" action="#">
                                                <div class="form-group">
                                                    <label>Id Meja</label>
                                                    <select class="custom-select form-control" name="id_meja" id="id_meja">
                                                        <option></option>
                                                        <?php
                                                        $query = $this->db->query("SELECT id_meja FROM tb_meja WHERE id_status_meja ='1'");
                                                        foreach ($query->result_array() as $tampil) :
                                                            ?>
                                                            <option value="<?= $tampil['id_meja']; ?>"><?= $tampil['id_meja']; ?></option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                                <!-- makanan pilih -->
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label>Makanan 1</label>
                                                        <select class="custom-select form-control" name="makanan_1" id="makanan_1">
                                                            <option></option>
                                                            <?php
                                                            $query = $this->db->query("SELECT id_makanan,nama_makanan FROM tb_makanan");
                                                            foreach ($query->result_array() as $tampil) :
                                                                ?>
                                                                <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                            <?php endforeach; ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Jumlah</label>
                                                        <input type="text" name="jmakanan_1" placeholder="" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Tambah</label>
                                                        <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#m2" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="m2">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Makanan 2</label>
                                                            <select class="custom-select form-control" name="makanan_2" id="makanan_2">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_makanan,nama_makanan FROM tb_makanan");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jmakanan_2" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#m3" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="m3">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Makanan 3</label>
                                                            <select class="custom-select form-control" name="makanan_3" id="makanan_3">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_makanan,nama_makanan FROM tb_makanan");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jmakanan_3" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#m4" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="m4">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Makanan 4</label>
                                                            <select class="custom-select form-control" name="makanan_4" id="makanan_4">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_makanan,nama_makanan FROM tb_makanan");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jmakanan_4" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#m5" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="m5">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Makanan 5</label>
                                                            <select class="custom-select form-control" name="makanan_5" id="makanan_5">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_makanan,nama_makanan FROM tb_makanan");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jmakanan_5" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- minuman pilih -->
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label>Minuman 1</label>
                                                        <select class="custom-select form-control" name="minuman_1" id="minuman_1">
                                                            <option></option>
                                                            <?php
                                                            $query = $this->db->query("SELECT id_minuman,nama_minuman FROM tb_minuman");
                                                            foreach ($query->result_array() as $tampil) :
                                                                ?>
                                                                <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                            <?php endforeach; ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Jumlah</label>
                                                        <input type="text" name="jminuman_1" placeholder="" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Tambah</label>
                                                        <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#mn2" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="mn2">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Minuman 2</label>
                                                            <select class="custom-select form-control" name="minuman_2" id="minuman_2">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_minuman,nama_minuman FROM tb_minuman");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jminuman_2" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#mn3" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="mn3">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Minuman 3</label>
                                                            <select class="custom-select form-control" name="minuman_3" id="minuman_3">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_minuman,nama_minuman FROM tb_minuman");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jminuman_3" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#mn4" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="mn4">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Minuman 4</label>
                                                            <select class="custom-select form-control" name="minuman_4" id="minuman_4">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_minuman,nama_minuman FROM tb_minuman");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jminuman_4" placeholder="" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tambah</label>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#mn5" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="mn5">
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label>Minuman 5</label>
                                                            <select class="custom-select form-control" name="minuman_5" id="minuman_5">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT id_minuman,nama_minuman FROM tb_minuman");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jminuman_5" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="form-group col-md-10">
                                                            <label>Paket</label>
                                                            <select class="custom-select form-control" name="id_paket" id="minuman_5">
                                                                <option></option>
                                                                <?php
                                                                $query = $this->db->query("SELECT * FROM tb_paket");
                                                                foreach ($query->result_array() as $tampil) :
                                                                    ?>
                                                                    <option value="<?= $tampil['id_paket']; ?>"><?= $tampil['nama_paket']; ?></option>
                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="jml_paket" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Waktu Pesanan</label>
                                                    <input type="text" name="waktu" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                                            echo $tgl = date('Y-m-d H:i:s'); ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Pesanan</label>
                                                    <input type="text" name="status" value="Pesanan Masuk" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer ">
                                            <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!------ antar pesanan -->
    </div>
</div>
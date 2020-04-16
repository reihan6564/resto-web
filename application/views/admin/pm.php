<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-email-85 text-danger"></i>
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
                            Pesanan yang harus dibuat !!!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-delivery-fast text-info"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category">Pesanan Antar</p>
                                    <h4 class="card-title text-info"><b>
                                            <?php
                                            foreach ($hitung_pa as $hpa) :
                                                echo $hpa['jumlah_pa'];
                                            endforeach; ?> Pesanan Diantar</b>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="alert alert-info">
                            Pesanan telah diantarkan
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <div class="alert alert-danger col-md-3 text-center" role="alert">
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
                                                        <th class="disabled-sorting text-center "><b>ID </b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Makanan</b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Minuman</b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Paket</b></th>
                                                        <th class="disabled-sorting text-center "><b>Waktu Pesanan</b></th>
                                                        <th class="disabled-sorting text-center "><b>Status Pesanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Actions</b></th>
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
                                                            <?php
                                                            $kuery = $this->db->query("SELECT * FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Masuk' and waktu_pesanan = '" . $pm['waktu_pesanan']  . "'");
                                                            foreach ($kuery->result_array() as $jd) :
                                                                ?>
                                                                <td><?= $jd['jml_paket']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <td><?= $pm['waktu_pesanan']; ?></td>
                                                            <td><?= $pm['status_pesanan']; ?></td>
                                                            <td><a href="" class="badge badge-danger ubahstatus" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?= $pm['waktu_pesanan']; ?>">Ubah Status</a></td>
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

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <div class="alert alert-info col-md-3 text-center" role="alert">
                            <h4 class="card-title text-light">Table Pesanan Antar </h4>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card data-tables">
                                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                        <div class="toolbar">
                                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        </div>
                                        <div class="fresh-datatables">
                                            <table id="datatables" class="table table-striped table-no-bordered table-hover display" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="disabled-sorting text-center "><b>Id</b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Makanan</b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Minuman</b></th>
                                                        <th class="disabled-sorting text-center "><b>Jumlah Paket</b></th>
                                                        <th class="disabled-sorting text-center "><b>Waktu Pesanan</b></th>
                                                        <th class="disabled-sorting text-center "><b>Status Pesanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Actions</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pesanan_a as $pa) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pa['id_meja']; ?></td>
                                                            <?php
                                                            $query = $this->db->query("SELECT SUM(jml_mkn_1 + jml_mkn_2 + jml_mkn_3 + jml_mkn_4 + jml_mkn_5) as jumlah_f FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Antar' and waktu_pesanan = '" . $pa['waktu_pesanan']  . "'");
                                                            foreach ($query->result_array() as $jf) :
                                                                ?>
                                                                <td><?= $jf['jumlah_f']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <?php
                                                            $kuery = $this->db->query("SELECT SUM(jml_mnm_1 + jml_mnm_2 + jml_mnm_3 + jml_mnm_4 + jml_mnm_5) as jumlah_d FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Antar' and waktu_pesanan = '" . $pa['waktu_pesanan']  . "'");
                                                            foreach ($kuery->result_array() as $jd) :
                                                                ?>
                                                                <td><?= $jd['jumlah_d']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <?php
                                                            $kuery = $this->db->query("SELECT * FROM tb_detail_pesan WHERE status_pesanan = 'Pesanan Antar' and waktu_pesanan = '" . $pa['waktu_pesanan']  . "'");
                                                            foreach ($kuery->result_array() as $jd) :
                                                                ?>
                                                                <td><?= $jd['jml_paket']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <td><?= $pa['waktu_pesanan']; ?></td>
                                                            <td><?= $pa['status_pesanan']; ?></td>
                                                            <td><a class="badge badge-info text-light">Status Terubah</a></td>
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

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="alert alert-primary" style="margin-bottom:-10px;">
                                    <h5 class="modal-title text-center" id="titlestok">Ubah Status</h5>
                                </div>
                                <form action="<?= base_url('admin/pm'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="inputState">Status Awal</label>
                                            <input type="text" disabled class="form-control" id="status" name="status" placeholder="Status ... ">
                                            <label for="inputState">Status Baru</label>
                                            <input type="text" class="form-control" id="status_b" name="status_b" value="Pesanan Antar">
                                            <input type="text" hidden class="form-control" id="waktu" name="waktu" placeholder="waktu ... ">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary btn-outline">Simpan Status</button>
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
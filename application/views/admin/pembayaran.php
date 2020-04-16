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
                                    <p class="card-category">Pesanan Belum Dibayar</p>
                                    <h4 class="card-title text-danger"><b>
                                            <?php
                                            foreach ($hitung_pb as $hpb) :
                                                echo $hpb['jumlah_pb'];
                                            endforeach; ?> Belum bayar</b>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="alert alert-danger">
                            Pesanan belum dibayar oleh pembeli
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
                                    <p class="card-category">Pesanan Sudah dibayar</p>
                                    <h4 class="card-title text-info"><b>
                                            <?php
                                            foreach ($hitung_ps as $hps) :
                                                echo $hps['jumlah_ps'];
                                            endforeach; ?> Pesanan Sudah dibayar</b>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="alert alert-info">
                            Pesanan sudah dibayar
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Pembayaran</h4>
                        <p class="card-category">Data yang dibuat ini akan diteruskan kepada kepala koki</p>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card stacked-form">
                                    <div class="card-body ">
                                        <form method="post" action="<?= base_url('admin/tampil_kode') ?>">
                                            <!-- makanan pilih -->
                                            <div class="row">
                                                <div class="form-group col-md-8">
                                                    <label>Kode Pembayaran</label>
                                                    <input type="text" name="kode" value="<?= set_value('kode'); ?>" placeholder="Kode" class="form-control">
                                                    <?= form_error('kode', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Cek Kode</label><br>
                                                    <button type="submit" class="btn btn-outline-primary CekKode">Cek</button>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Opsi lain</label><br>
                                                    <button type="submit" class="btn btn-outline-primary" data-toggle="collapse" data-target="#opsi" aria-expanded="false" aria-controls="collapseExample">+</button>
                                                </div>
                                            </div>
                                        </form>
                                        <form method="post" action="<?= base_url('admin/tampil_meja') ?>" id="opsi" class="collapse">
                                            <div class="row">
                                                <div class="form-group col-md-8">
                                                    <label>Id Meja</label>
                                                    <input type="text" name="nomor_meja" placeholder="Nomor meja" class="form-control" value="<?= set_value('kode'); ?>">
                                                    <?= form_error('kode', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Cek Meja</label><br>
                                                    <button type="submit" class="btn btn-outline-primary">Cek</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-tasks">
                                    <div class="card-header ">
                                        <h4 class="card-title">Jumlah yang harus dibayar</h4>
                                        <p class="card-category"><b>Nominal Pembayaran</b></p>
                                        <div class="text-right">
                                            <?php
                                            if (isset($tampil)) {
                                                echo $tampil;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="card-body collapse" id="hasil">
                                        <div class="table-full-width">
                                            <table class="table">
                                                <?php
                                                foreach ($tampil_pembayaran as $pmb) :
                                                    if ($pmb['id_pembayaran']) {
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>ID Pembayaran : <?= $pmb['id_pembayaran'] ?></td>
                                                                <td class="td-actions">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>Nomor Meja : <b><?= $pmb['id_meja'] ?></b></td>
                                                                <td class="td-actions text-right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>Kode Pembayaran : <b><?= $pmb['kode_pembayaran'] ?></b></td>
                                                                </td>
                                                                <td class="td-actions text-right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>Total Pembayaran : <?= $pmb['total_pembayaran'] ?></td>
                                                                <td class="td-actions text-right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>Status Pembayaran : <?= $pmb['status_pembayaran'] ?></td>
                                                                <td class="td-actions text-right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($pmb['status_pembayaran'] == "Belum Bayar") {
                                                                        ?>
                                                                        <a href="detail_PB/<?= $pmb['id_pembayaran']; ?>" class="btn btn-wd btn-outline btn-primary right">Detail Makanan</a>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td class="td-actions text-right">
                                                                </td>
                                                            </tr>
                                                        <?php  } else {
                                                            echo "<h5>Maaf Kode yang anda kirimkan Tidak Benar</h5>";
                                                        } ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer ">
                                        <hr>
                                        <div class="stats">
                                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
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
                        <div class="row">
                            <div class="alert alert-danger text-center col-md-3" role="alert">
                                <h4 class="card-title text-light">Table Pembayaran</h4>
                            </div>
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
                                                        <th class="disabled-sorting text-center"><b>ID Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center"><b>ID Meja</b></th>
                                                        <th class="disabled-sorting text-center"><b>Kode Pembayaran</b></th>
                                                        <th class="disabled-sorting disabled-sorting text-center "><b>Total Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center "><b>Status Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center"><b>Actions</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pembayaran_b as $pbb) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pbb['id_pembayaran']; ?></td>
                                                            <td><?= $pbb['id_meja']; ?></td>
                                                            <td><?= $pbb['kode_pembayaran']; ?></td>
                                                            <td><?= $pbb['total_pembayaran']; ?></td>
                                                            <td><?= $pbb['status_pembayaran']; ?></td>
                                                            <td><a href="<?= base_url("admin/detail_PB/") . $pbb['id_pembayaran']; ?>" class="badge badge-success">Detail</a></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                        <th class="disabled-sorting text-center"><b>ID Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center"><b>ID Meja</b></th>
                                                        <th class="disabled-sorting text-center"><b>Kode Pembayaran</b></th>
                                                        <th class="disabled-sorting disabled-sorting text-center "><b>Total Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center "><b>Status Pembayaran</b></th>
                                                        <th class="disabled-sorting text-center"><b>Actions</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pembayaran as $pb) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pb['id_pembayaran']; ?></td>
                                                            <td><?= $pb['id_meja']; ?></td>
                                                            <td><?= $pb['kode_pembayaran']; ?></td>
                                                            <td><?= $pb['total_pembayaran']; ?></td>
                                                            <td><?= $pb['status_pembayaran']; ?></td>
                                                            <td><a href="<?= base_url("admin/detail_PB/") . $pb['id_pembayaran']; ?>" class="badge badge-success">Detail</a></td>
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
                            <h4 class="card-title text-light">Table Pesanan Selesai </h4>
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
                                                        <th class="text-center"><b>ID Meja</b></th>
                                                        <th class="text-center"><b>Jumlah Makanan dipesan</b></th>
                                                        <th class="text-center"><b>Jumlah Minuman dipesan</b></th>
                                                        <th class="text-center"><b>Waktu Pesan</b></th>
                                                        <th class="text-center"><b>Status Pesanan</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pesanan_s as $ps) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pd['id_meja']; ?></td>
                                                            <?php
                                                            $query = $this->db->query("SELECT SUM(jml_mkn_1 + jml_mkn_2 + jml_mkn_3 + jml_mkn_4 + jml_mkn_5) as jumlah_f FROM tb_detail_pesan WHERE status_pesanan = 'Selesai' and waktu_pesanan = '" . $ps['waktu_pesanan']  . "'");
                                                            foreach ($query->result_array() as $j) :
                                                                ?>
                                                                <td><?= $j['jumlah_f']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <?php
                                                            $kuery = $this->db->query("SELECT SUM(jml_mnm_1 + jml_mnm_2 + jml_mnm_3 + jml_mnm_4 + jml_mnm_5) as jumlah_d FROM tb_detail_pesan WHERE status_pesanan = 'Selesai' and waktu_pesanan = '" . $ps['waktu_pesanan']  . "'");
                                                            foreach ($kuery->result_array() as $jd) :
                                                                ?>
                                                                <td><?= $jd['jumlah_d']; ?></td>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                            <td><?= $ps['waktu_pesanan']; ?></td>
                                                            <td><?= $ps['status_pesanan']; ?></td>
                                                            <td><a class="badge badge-success text-light ubahstatusPA">Pesanan Selesai</a></td>
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
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Laporan Penjualan</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card stacked-form">
                                    <form method="post" action="<?= base_url('admin/laporan_p_penjualan'); ?>">
                                        <div class="card-body ">
                                            <p class="card-category"><b>Laporan Penjualan Per-Periode</b></p>
                                            <hr>
                                            <div class="form-group">
                                                <label>Dari Tanggal</label>
                                                <input type="date" name="tanggal_1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Sampai Tanggal</label>
                                                <input type="date" name="tanggal_2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <!-- ditampilkan berdasarkan status selesai dari penjualan detail pesan dan juga waktu yang di explode -->
                                            <input type="submit" name="print" class="btn btn-outline btn-fill btn-info form-control" value="Print">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stacked-form">
                                <form method="post" action="<?= base_url('admin/laporan_b_penjualan'); ?>">
                                    <div class="card-body ">
                                        <p class="card-category"><b>Laporan pesanan pembeli Per-Bulan</b></p>
                                        <hr>
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="custom-select form-control" name="bulan" id="bulan">
                                                <option></option>
                                                <option value="01">Januari</option>
                                                <option value="02">Febuari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="custom-select form-control" name="tahun" id="tahun">
                                                <?php
                                                $tanggal = date('Y');
                                                for ($i = 1990; $i <= $tanggal; $i++) {
                                                    ?>
                                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer ">
                                        <input type="submit" name="print" class="btn btn-fill btn-outline btn-info form-control" value="Print">
                                    </div>
                                </form>
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
                    <h4 class="card-title">Laporan data makanan & minuman</h4>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card stacked-form">
                                <div class="card-body ">
                                    <p class="card-category"><b>Laporan Table Makanan</b></p>
                                    <hr>
                                    <a href="laporan_mkn" class="btn btn-outline btn-info form-control">Print</a>
                                </div>
                                <div class="card-footer ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card stacked-form">
                                <div class="card-body ">
                                    <p class="card-category"><b>Laporan Table Minuman</b></p>
                                    <hr>
                                    <a href="laporan_mnm" class="btn btn-outline btn-info form-control">Print</a>

                                </div>
                                <div class="card-footer ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card stacked-form">
                                <div class="card-body ">
                                    <p class="card-category"><b>Laporan Table Paket</b></p>
                                    <hr>
                                    <a href="laporan_pkt" class="btn btn-outline btn-info form-control">Print</a>
                                </div>
                                <div class="card-footer ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
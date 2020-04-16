<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header col-md-12">
                        <div class="row">
                            <div class="alert alert-danger col-md-2 text-center">
                                <h4 class="card-title text-light">Table Makanan </h4>
                            </div>
                            <div class="col-md-10 text-right">
                                <h4 class="card-title text-dark"><a class="TambahModalMakanan" href="#" data-toggle="modal" data-target="#modal_makanan"><span class="text-center badge badge-info">Tambah Makanan</span></a></h4>
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
                                                        <th class="disabled-sorting text-center"><b>ID</b></th>
                                                        <th class="disabled-sorting text-center"><b>Nama Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jenis Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Harga Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Gambar Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Stok Makanan</b></th>
                                                        <th class="disabled-sorting text-center"><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tampil_mkn as $mkn) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $mkn['id_makanan']; ?></td>
                                                            <td><?= $mkn['nama_makanan']; ?></td>
                                                            <td><?= $mkn['jenis_makanan']; ?></td>
                                                            <td><?= $mkn['harga_makanan']; ?></td>
                                                            <td><img src="<?= base_url('assets/img/' . $mkn['gambar_makanan']); ?>" width="50px" height="50px"></td>
                                                            <td><?= $mkn['stok']; ?></td>
                                                            <td><a href="<?= $mkn['id_makanan']; ?>" class="badge badge-primary EditModalMakanan" id="editmodalmakanan" data-toggle="modal" data-target="#modal_makanan" data-id="<?= $mkn['id_makanan']; ?>">Edit</a> | <a href="hapus_makanan/<?= $mkn['id_makanan']; ?>" onclick="return confirm('Apakah data akan dihapus');" class="badge badge-danger">Hapus</a></td>
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
                    <div class="card-header col-md-12">
                        <div class="row">
                            <div class="alert alert-info col-md-2 text-center">
                                <h4 class="card-title text-light">Table Minuman </h4>
                            </div>
                            <div class="col-md-10 text-right">
                                <h4 class="card-title text-dark"><a href="#" class="TambahModalMinuman" data-toggle="modal" data-target="#modal_minuman"><span class="text-center badge badge-info">Tambah Minuman</span></a></h4>
                            </div>
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
                                                        <th class="disabled-sorting text-center"><b>ID</b></th>
                                                        <th class="disabled-sorting text-center"><b>Nama Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jenis Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Harga Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Gambar Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Stok Minuman</b></th>
                                                        <th class="disabled-sorting text-center"><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tampil_mnm as $mnm) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $mnm['id_minuman']; ?></td>
                                                            <td><?= $mnm['nama_minuman']; ?></td>
                                                            <td><?= $mnm['jenis_minuman']; ?></td>
                                                            <td><?= $mnm['harga_minuman']; ?></td>
                                                            <td><img src="<?= base_url('assets/img/' . $mnm['gambar_minuman']); ?>" width="50px" height="50px"></td>
                                                            <td><?= $mnm['stok']; ?></td>
                                                            <td><a href="#" class="badge badge-primary EditModalMinuman" id="" data-toggle="modal" data-target="#modal_minuman" data-id="<?= $mnm['id_minuman']; ?>">Edit</a> | <a href="hapus_minuman/<?= $mnm['id_minuman']; ?>" onclick="return confirm('Apakah data akan dihapus');" class="badge badge-danger">Hapus</a></td>
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
                    <div class="card-header col-md-12">
                        <div class="row">
                            <div class="alert alert-primary col-md-2 text-center">
                                <h4 class="card-title text-light">Table Paket </h4>
                            </div>
                            <div class="col-md-10 text-right">
                                <h4 class="card-title text-dark"><a class="TambahModalPaket" href="tambah_p"><span class="text-center badge badge-info">Tambah Paket</span></a></h4>
                            </div>
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
                                                        <th class="disabled-sorting text-center"><b>ID</b></th>
                                                        <th class="disabled-sorting text-center"><b>Nama Paket</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jumlah Makanan per-paket</b></th>
                                                        <th class="disabled-sorting text-center"><b>Jumlah Minuman per-paket</b></th>
                                                        <th class="disabled-sorting text-center"><b>Total Harga Paket</b></th>
                                                        <th class="disabled-sorting text-center"><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tampil_pkt as $pkt) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $pkt['id_paket']; ?></td>
                                                            <td><?= $pkt['nama_paket']; ?></td>
                                                            <td>
                                                                <?php
                                                                $paket = 0;
                                                                if ($pkt['makanan_1'] == null) {
                                                                    echo $paket;
                                                                } else {
                                                                    $paket++;
                                                                    if ($pkt['makanan_2'] == null) {
                                                                        echo $paket;
                                                                    } else {
                                                                        $paket++;
                                                                        if ($pkt['makanan_3'] == null) {
                                                                            echo $paket;
                                                                        } else {
                                                                            $paket++;
                                                                            if ($pkt['makanan_4'] == null) {
                                                                                echo $paket;
                                                                            } else {
                                                                                $paket++;
                                                                                if ($pkt['makanan_5'] == null) {
                                                                                    echo $paket;
                                                                                } else {
                                                                                    $paket++;
                                                                                    echo $paket;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $paket = 0;
                                                                if ($pkt['minuman_1'] == null) {
                                                                    echo $paket;
                                                                } else {
                                                                    $paket++;
                                                                    if ($pkt['minuman_2'] == null) {
                                                                        echo $paket;
                                                                    } else {
                                                                        $paket++;
                                                                        if ($pkt['minuman_3'] == null) {
                                                                            echo $paket;
                                                                        } else {
                                                                            $paket++;
                                                                            if ($pkt['minuman_4'] == null) {
                                                                                echo $paket;
                                                                            } else {
                                                                                $paket++;
                                                                                if ($pkt['minuman_5'] == null) {
                                                                                    echo $paket;
                                                                                } else {
                                                                                    $paket++;
                                                                                    echo $paket;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td><?= $pkt['total_hrg_paket']; ?></td>
                                                            <td><a href="<?= base_url("admin/detail_p/") . $pkt['id_paket']; ?>" class="badge badge-success">Detail</a></td>
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

        <!-- Modal makanan -->
        <div class="modal fade" id="modal_makanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <div class="col-md-12 text-center alert alert-info">
                            <h3 class="modal-title text-light" id="titel">Tambah Makanan</h3>
                        </div>
                    </div>
                    <form action="<?= base_url('admin/tambah_makanan') ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group" hidden id="lbl_id_makanan">
                                    <label id="lbl_id">ID Makanan</label>
                                    <input type="text" class="form-control" id="id_makanan" name="id_makanan">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Makanan</label>
                                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Jenis Makanan</label>
                                    <input type="text" class="form-control" id="jenis_makanan" name="jenis_makanan" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Harga Makanan</label>
                                    <input type="text" class="form-control" id="harga_makanan" name="harga_makanan" placeholder="...">
                                </div>
                                <div class="form-group mak">
                                    <label class="text-capitalize">Gambar</label>
                                    <input type="file" name="gambar" id="gambar" class="custom-file-input" value="">
                                    <label for="gambar" class="custom-file-label text-capitalize form-control">Klik Cari</label>
                                    <small class="text-warning">File Gambar tidak boleh lebih dari 2 MB</small>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Stok Makanan</label>
                                    <input type="text" class="form-control" id="stok_makanan" name="stok_makanan" placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-info">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal minuman -->
        <div class="modal fade" id="modal_minuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <div class="col-md-12 text-center alert alert-primary">
                            <h3 class="modal-title text-light" id="titel_m">Tambah Minuman</h3>
                        </div>
                    </div>
                    <form action="<?= base_url('admin/tambah_minuman') ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group" hidden id="lbl_id_minuman">
                                    <label id="lbl_id">ID Minuman</label>
                                    <input type="text" class="form-control" id="id_minuman" name="id_minuman">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Minuman</label>
                                    <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Jenis Minuman</label>
                                    <input type="text" class="form-control" id="jenis_minuman" name="jenis_minuman" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Harga Minuman</label>
                                    <input type="text" class="form-control" id="harga_minuman" name="harga_minuman" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize">Gambar</label>
                                    <input type="file" name="gambar" id="gambar1" class="custom-file-input" value="">
                                    <label for="gambar1" class="custom-file-label text-capitalize form-control">Cari gambar</label>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Stok Minuman</label>
                                    <input type="text" class="form-control" id="stok_minuman" name="stok_minuman" placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
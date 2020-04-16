<div class="content">
    <?= $this->session->flashdata('message'); ?>
    <form class="col-md-12" method="post" action="<?= base_url('admin/update_pembayaran'); ?>">
        <?php foreach ($edit_p as $ep) : ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="alert alert-primary col-md-4 text-center">
                                    <h4 class="card-title text-light">Edit Pembayaran </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group" hidden id="lbl_id_paket">
                                    <label class="text-capitalize" id="lbl_id">ID Paket</label>
                                    <input type="text" class="form-control" id="id_paket" name="id_paket">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="text-capitalize" for="formGroupExampleInput">ID Meja</label>
                                            <select class="custom-select form-control" name="id_meja" id="id_meja">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_meja where id_meja =  '$ep[id_meja]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_meja']; ?>"><?= $tampil['id_meja']; ?></option>
                                                <?php endforeach; ?>
                                                <option value=""></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_meja");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_meja']; ?>"><?= $tampil['id_meja']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" for="formGroupExampleInput">Nama Paket</label>
                                    <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 2</label>
                                            <select class="custom-select form-control" name="makanan_2" id="makanan_2">
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jmakanan_2" name="jmakanan_2" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 3</label>
                                            <select class="custom-select form-control" name="makanan_3" id="makanan_3">
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jmakanan_3" name="jmakanan_3" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 4</label>
                                            <select class="custom-select form-control" name="makanan_4" id="makanan_4">
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jmakanan_4" name="jmakanan_4" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 5</label>
                                            <select class="custom-select form-control" name="makanan_5" id="makanan_5">
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jmakanan_5" name="jmakanan_5" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2" style="margin-top:250px;">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-lg active" type="submit" role="button" aria-pressed="true">Edit</button>
                        <a class="btn btn-success btn-lg active" href="tampil_stok" role="button" aria-pressed="true">Kembali</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </form>
</div>
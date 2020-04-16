<div class="content">
    <?= $this->session->flashdata('message'); ?>
    <form class="col-md-12" method="post" action="<?= base_url('admin/update_paket'); ?>">
        <?php foreach ($edit_p as $ep) : ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="alert alert-warning col-md-4 text-center">
                                    <h4 class="card-title text-light">Edit Paket </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group" hidden id="lbl_id_paket">
                                    <label class="text-capitalize" id="lbl_id">ID Paket</label>
                                    <input type="text" class="form-control" id="id_paket" value="<?= $ep['id_paket']; ?>" name="id_paket">
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" for="formGroupExampleInput">Nama Paket</label>
                                    <input type="text" class="form-control" id="nama_paket" value="<?= $ep['nama_paket']; ?>" name="nama_paket" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 1</label>
                                            <select class="custom-select form-control" name="makanan_1" id="makanan_1">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan =  '$ep[makanan_1]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>
                                                <option value=""></option>
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
                                            <input type="text" class="form-control" id="jmakanan_1" value="<?= $ep['jml_mkn_1']; ?>" name="jmakanan_1" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 2</label>
                                            <select class="custom-select form-control" name="makanan_2" id="makanan_2">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan =  '$ep[makanan_2]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>
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
                                            <input type="text" class="form-control" id="jmakanan_2" value="<?= $ep['jml_mkn_2']; ?>" name="jmakanan_2" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 3</label>
                                            <select class="custom-select form-control" name="makanan_3" id="makanan_3">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan =  '$ep[makanan_3]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>
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
                                            <input type="text" class="form-control" id="jmakanan_3" value="<?= $ep['jml_mkn_3']; ?>" name="jmakanan_3" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 4</label>
                                            <select class="custom-select form-control" name="makanan_4" id="makanan_4">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan =  '$ep[makanan_4]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>
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
                                            <input type="text" class="form-control" id="jmakanan_4" value="<?= $ep['jml_mkn_4']; ?>" name="jmakanan_4" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Makanan 5</label>
                                            <select class="custom-select form-control" name="makanan_5" id="makanan_5">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_makanan where id_makanan =  '$ep[makanan_5]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_makanan']; ?>"><?= $tampil['nama_makanan']; ?></option>
                                                <?php endforeach; ?>
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
                                            <input type="text" class="form-control" id="jmakanan_5" value="<?= $ep['jml_mkn_5']; ?>" name="jmakanan_5" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="alert alert-warning col-md-4 text-center">
                                    <h4 class="card-title text-light">Edit Paket </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="text-capitalize" for="formGroupExampleInput">Total Harga Paket</label>
                                    <input type="text" class="form-control" id="harga_paket" value="<?= $ep['total_hrg_paket']; ?>" name="harga_paket" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Minuman 1</label>
                                            <select class="custom-select form-control" name="minuman_1" id="minuman_1">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman =  '$ep[minuman_1]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jminuman_1" value="<?= $ep['jml_mnm_1']; ?>" name="jminuman_1" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Minuman 2</label>
                                            <select class="custom-select form-control" name="minuman_2" id="minuman_2">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman =  '$ep[minuman_2]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jminuman_2" value="<?= $ep['jml_mnm_2']; ?>" name="jminuman_2" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Minuman 3</label>
                                            <select class="custom-select form-control" name="minuman_3" id="minuman_3">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman =  '$ep[minuman_3]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jminuman_3" value="<?= $ep['jml_mnm_3']; ?>" name="jminuman_3" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Minuman 4</label>
                                            <select class="custom-select form-control" name="minuman_4" id="minuman_4">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman =  '$ep[minuman_4]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jminuman_4" value="<?= $ep['jml_mnm_4']; ?>" name="jminuman_4" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-capitalize" for="formGroupExampleInput">Minuman 5</label>
                                            <select class="custom-select form-control" name="minuman_5" id="minuman_5">
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman where id_minuman =  '$ep[minuman_5]'");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>
                                                <option></option>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM tb_minuman");
                                                foreach ($query->result_array() as $tampil) :
                                                    ?>
                                                    <option value="<?= $tampil['id_minuman']; ?>"><?= $tampil['nama_minuman']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="text-capitalize" for="formGroupExampleInput">Jumlah</label>
                                            <input type="text" class="form-control" id="jminuman_5" value="<?= $ep['jml_mnm_5']; ?>" name="jminuman_5" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2" style="margin-top:250px;">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-warning btn-lg active" type="submit" role="button" aria-pressed="true">Edit</button>
                        <a class="btn btn-success btn-lg active" href="../detail_p/<?= $ep['id_paket']; ?>" role="button" aria-pressed="true">Kembali</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </form>
</div>
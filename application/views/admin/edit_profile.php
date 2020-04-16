<div class="content">
    <form class="col-md-12" method="post" action="<?= base_url('admin/update_profile'); ?>" enctype="multipart/form-data">
        <?php foreach ($edit as $e) : ?>
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-12 text-center">
                                <div class="alert alert-primary col-md-12 text-center">
                                    <h4 class="card-title text-light">My Pict</h4>
                                </div>
                                <img src="<?= base_url(''); ?>/assets/img/<?= $e['gambar']; ?>" alt="" width="100px" height="100px" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group text-left col-md-12">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" id="gambar" class="custom-file-input" value="">
                                        <label for="gambar" class="custom-file-label text-capitalize text-primary form-control">Cari gambar</label>
                                    </div>
                                </div>
                                <div class="form-group text-center col-md-12 mt-4">
                                    <button class="btn btn-primary btn-lg active" type="submit" role="button" aria-pressed="true">Update</button>
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
                                <div class="alert alert-primary col-md-4 text-center">
                                    <h4 class="card-title text-light">Edit</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group-lg">
                                <div class="form-group">
                                    <label class="text-capitalize" id="lbl_id">Id Pengguna</label>
                                    <input type="text" name="id_pengguna" class="form-control" id="id_paket" value="<?= $e['id_pengguna']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" id="lbl_id">Email</label>
                                    <input type="text" name="email" class="form-control" id="id_paket" value="<?= $e['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" id="lbl_id">Username</label>
                                    <input type="text" name="username" class="form-control" id="id_paket" value="<?= $e['nama_pengguna']; ?>">
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
                                <div class="alert alert-primary col-md-4 text-center">
                                    <h4 class="card-title text-light">My Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group-lg">
                                <div class="form-group">
                                    <label for="" class="text-capitalize">Akses</label>
                                    <select name="akses" id="" class="form-control">
                                        <?php
                                        $query = $this->db->query("SELECT * FROM tb_akses WHERE NOT hak_akses='Manager' AND id_akses = '$e[id_akses]'")->result_array();
                                        foreach ($query as $aks) :
                                            ?>
                                            <option value="<?= $aks['id_akses']; ?>"><?= $aks['hak_akses']; ?></option>
                                        <?php endforeach; ?>
                                        <?php
                                        $query = $this->db->query("SELECT * FROM tb_akses WHERE NOT hak_akses='Manager' AND NOT id_akses ='$e[id_akses]'")->result_array();
                                        foreach ($query as $aks) :
                                            ?>
                                            <option value="<?= $aks['id_akses']; ?>"><?= $aks['hak_akses']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" id="lbl_id">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="id_paket" value="<?= $e['tanggal_lahir']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="text-capitalize" id="lbl_id">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="id_paket" value="<?= $e['alamat']; ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </form>
    <div class="col-md-12">
        <form action="<?= base_url('admin/update_password'); ?>" method="post">
            <div class="card">
                <div class="card-header col-md-12">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="alert alert-primary col-md-4 text-center">
                            <h4 class="card-title text-light">Update Password</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group-lg">
                        <div class="form-group">
                            <input hidden type="text" name="id_pengguna" class="form-control" value="<?= $e['id_pengguna']; ?>">
                            <label class="text-capitalize" id="lbl_id">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" maxlength="16">
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize" id="lbl_id">Password Baru</label>
                            <input type="password" name="password_baru" class="form-control" maxlength="16">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg active" type="submit" role="button" aria-pressed="true">Update Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
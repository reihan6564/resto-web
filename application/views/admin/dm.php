<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <span class="">
                            <h4 class="card-title">Meja Pesanan</h4>
                        </span>
                        <p class="card-category"><br>
                            <span class="badge badge-danger"> Red untuk meja yang harus dibersihkan</span> <br>
                            <span class="badge badge-success">Green untuk meja yang Terisi</span> <br>
                            <span class="badge badge-primary">Blue untuk meja yang Kosong</span>
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <!-- content tengah -->
                            <?php foreach ($join_meja as $mj) : ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5>Meja <?= $mj['nomor_meja']; ?></h5>
                                            <button class="<?= $mj['warna_status']; ?>" type="button" data-toggle="collapse" data-target="#<?= $mj['nomor_meja']; ?>" aria-expanded="false" aria-controls="collapseExample"><?= $mj['status_meja']; ?></button>
                                        </div>
                                    </div>
                                    <!-- collapse -->
                                    <div class="collapse" id="<?= $mj['nomor_meja']; ?>">
                                        <div class="card card-body">
                                            <?php
                                            if ($mj['id_status_meja'] == 1) {
                                                $m = $this->db->query("SELECT * FROM tb_detail_pesan WHERE status_pesanan LIKE 'Pesanan%' AND id_meja ='$mj[id_meja]'")->row_array();
                                                ?>
                                                <p>Makanan 1 : <b><?php
                                                $mk = $this->db->query("SELECT nama_makanan FROM tb_makanan WHERE id_makanan = '$m[makanan_1]'")->row_array();
                                               if($mk){
                                                    echo $mk['nama_makanan'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mkn_1']; ?></p>
                                                <p>Makanan 2 : <b><?php
                                                $mk = $this->db->query("SELECT nama_makanan FROM tb_makanan WHERE id_makanan = '$m[makanan_2]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_makanan'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mkn_2']; ?></p>

                                                <p>Makanan 3 : <b><?php
                                                $mk = $this->db->query("SELECT nama_makanan FROM tb_makanan WHERE id_makanan = '$m[makanan_3]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_makanan'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mkn_3']; ?></p>
                                                <p>Makanan 4 : <b><?php
                                                $mk = $this->db->query("SELECT nama_makanan FROM tb_makanan WHERE id_makanan = '$m[makanan_4]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_makanan'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mkn_4']; ?></p>
                                                <p>Makanan 5 : <b><?php
                                                $mk = $this->db->query("SELECT nama_makanan FROM tb_makanan WHERE id_makanan = '$m[makanan_5]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_makanan'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mkn_5']; ?></p>
                                                <p>Minuman 1 : <b><?php
                                                $mk = $this->db->query("SELECT nama_minuman FROM tb_minuman WHERE id_minuman = '$m[minuman_1]'")->row_array();
                                               if($mk){
                                                    echo $mk['nama_minuman'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mnm_1']; ?></p>
                                                <p>Minuman 2 : <b><?php
                                                $mk = $this->db->query("SELECT nama_minuman FROM tb_minuman WHERE id_minuman = '$m[minuman_2]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_minuman'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mnm_2']; ?></p>
                                                <p>Minuman 3 : <b><?php
                                                $mk = $this->db->query("SELECT nama_minuman FROM tb_minuman WHERE id_minuman = '$m[minuman_3]'")->row_array();
                                               if($mk){
                                                    echo $mk['nama_minuman'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mnm_3']; ?></p>
                                                <p>Minuman 4 : <b><?php
                                                $mk = $this->db->query("SELECT nama_minuman FROM tb_minuman WHERE id_minuman = '$m[minuman_4]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_minuman'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mnm_4']; ?></p>
                                                <p>Minuman 5 : <b><?php
                                                $mk = $this->db->query("SELECT nama_minuman FROM tb_minuman WHERE id_minuman = '$m[minuman_5]'")->row_array();
                                                if($mk){
                                                    echo $mk['nama_minuman'];

                                                }else{
                                                    echo "";
                                                }
                                                ?></b> = <?= $m['jml_mnm_5']; ?></p>


                                                <?php
                                            } else if ($mj['id_status_meja'] == 2) {
                                                echo "<p class='text-center'>Meja Tersedia Silahkan Duduk dan Memesan :)</p>";
                                            } else if ($mj['id_status_meja'] == 3) {
                                                ?>
                                                <button class="btn btn-danger ubahstatusMJ" data-id="<?= $mj['id_meja']; ?>" type="button" data-toggle="modal" data-target="#exampleModalCenter" aria-expanded="false" aria-controls="collapseExample">Ubah Status</button>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class=" alert alert-primary" style="margin-bottom:-10px;">
                                            <h5 class="modal-title text-center" id="titlestok">Ubah Status</h5>
                                        </div>
                                        <form action="<?= base_url('admin/PDM'); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="inputState">Status Awal</label>
                                                    <input type="text" disabled class="form-control" id="status" name="status" placeholder="Status ... ">
                                                    <label for="inputState">Status Baru</label>
                                                    <input type="text" class="form-control" id="status_b" name="status_b" value="Tersedia">
                                                    <input type="text" hidden class="form-control" id="id_meja" name="id_meja" placeholder="waktu ... ">
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
                            <!-- content tengah -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
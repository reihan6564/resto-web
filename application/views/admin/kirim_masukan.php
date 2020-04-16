<div class="content">
    <form class="col-md-12" method="post" action="<?= base_url('admin/tambah_masukan'); ?>">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="alert alert-primary col-md-6 text-center">
                                <h4 class="card-title text-light">Kirim Masukan dan saran</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="text-capitalize" id="lbl_id">Judul Masukan</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="formGroupExampleInput">isian</label>
                                <textarea name="isian" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary btn-lg active" type="submit" role="button" aria-pressed="true">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
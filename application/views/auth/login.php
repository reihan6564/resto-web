<!-- End Google Tag Manager (noscript) -->
<div class="wrapper wrapper-full-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container mt-3">
            <a class="navbar-brand" href="<?= base_url('auth'); ?>">
                <i class="nc-icon nc-mobile"></i>&nbsp
                Resto Web</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="<?= base_url('user') ?>" class="nav-link">
                            <i class="nc-icon nc-circle-09"></i> Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="full-page section-image" data-color="black" data-image="<?= base_url(); ?>assets/img/brick-wall.jpg" ;>
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content" style="margin-top:-30px;">
            <div class="container">
                <div class="col-md-4 col-sm-6 m-auto">
                    <form class="form" method="post" action="<?= base_url('auth'); ?>">
                        <div class="card card-login card-hidden" style="background-color: rgba(0,0,0,.0);border-color:ghostwhite">
                            <div class="card-header" style="background-color: rgba(0,0,0,.0);">
                                <div class="row">
                                    <div class="col-md-6 login">
                                        <?= $this->session->flashdata('message'); ?>
                                        <a href="<?= base_url('user'); ?>" class="btn btn-outline-light btn-lg btn-block text-light">Home</a>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $this->session->flashdata('message'); ?>
                                        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-outline-light btn-lg btn-block text-light">Registrasi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label style="color:white;">Email address</label>
                                        <input value="<?= set_value('email'); ?>" style="color:white; background-color: rgba(0,0,0,.0);" name="email" type="email" class="form-control" />
                                        <?= form_error('email', '<small class="text-light">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label style="color:white;">Password</label>
                                        <input style="color:white; background-color: rgba(0,0,0,.0);" name="password" type="password" class="form-control">
                                        <?= form_error('password', '<small class="text-light">', '</small>') ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-outline-light btn-wd">Login</button>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <small class="text-light">Anda belum daftar mari , <b><a href="<?= base_url('auth/registrasi'); ?>" class="text-light badge badge-dark">daftar</a></b></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
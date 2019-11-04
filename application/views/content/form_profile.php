<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>profit.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <img src="<?php echo base_url() ?>assets/img/<?= $this->session->userdata('foto') ?>" alt="foto profil">
        <p class="text-centered mt-3 text-white size-20"><?= $this->session->userdata('nama') ?></p>
        <div class="container">
            <div class="row size-20 mt-5">
                <div class="col-sm-12">
                    <a href="<?= site_url('edit_profile') ?>">
                        <p><i class="fas fa-user pr-3"></i>EDIT PROFILE ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/graphic') ?>">
                        <p><i class="fas fa-chart-line pr-3"></i>CHART ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/product') ?>">
                        <p><i class="fas fa-box-open pr-3"></i>PRODUCTS ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/profit') ?>">
                        <p><i class="fas fa-money-bill-wave pr-3"></i>PROFIT ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/print') ?>">
                        <p><i class="fas fa-print pr-3"></i>PRINT ></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <a href="<?= site_url('login/logout') ?>">
            <p class="mr-5 float-right">LOGOUT</p>
        </a>
    </div>
    <div class="overlay" onclick="close_navbar()" style="cursor:pointer" id="myOverlay"></div>
    <div class="navbar">
        <span class="bars" id="bars">
            <i class="fas fa-bars" onclick="open_navbar()"></i>
        </span>
        <span class="title">
            <p class="title_toko">toko bunga cengkeh</p>
        </span>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 border-whitesmoke">
                <form action="<?= base_url('edit_profile/update') ?>" method="post" enctype="multipart/form-data">
                    <img src="<?= base_url(); ?>/assets/img/<?= $this->session->userdata('foto'); ?>" class="foto-profil">
                    <div class="form-group mt-5">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="mt-2">Nama</label>
                            </div>
                            <div class="col-sm">
                                <input type="hidden" name="id" value="<?= $this->session->userdata('id') ?>">
                                <input type="text" class="form-control" name="nama" placeholder="<?= $this->session->userdata('nama') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="mt-2">Password</label>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" name="password" placeholder="Ubah Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="mt-2">Foto</label>
                            </div>
                            <div class="col-sm">
                                <input type="file" class="form-control-file" name="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary width-100">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
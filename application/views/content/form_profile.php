<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>profit.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <img src="<?php echo base_url() ?>assets/img/foto-profil/<?= $this->session->userdata('foto') ?>" class="rounded-circle" alt="foto profil">
        <p class="text-centered mt-3 text-white size-20"><?= $this->session->userdata('nama') ?></p>
        <div class="container">
            <div class="row size-20 mt-5">
                <div class="col-sm-12">
                    <a href="<?= site_url('edit_profile') ?>">
                        <p><i class="fas fa-user pr-3"></i>EDIT PROFILE <i class="fas fa-chevron-right ml-4"></i></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('graphic') ?>">
                        <p><i class="fas fa-chart-line pr-3"></i>CHART<i class="fas fa-chevron-right ml-5 pl-5"></i></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('product') ?>">
                        <p><i class="fas fa-box-open pr-3"></i>PRODUCTS<i class="fas fa-chevron-right ml-5"></i></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('profit') ?>">
                        <p><i class="fas fa-money-bill-wave pr-4"></i>OMSET <i class="fas fa-chevron-right  ml-5 pl-4"></i></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('printpage') ?>">
                        <p><i class="fas fa-print pr-3"></i>PRINT <i class="fas fa-chevron-right ml-5 pl-5"></i></p>
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
            <i class="fas fa-bars text-white" onclick="open_navbar()"></i>
        </span>
        <span class="title">
            <p class="title_toko">toko bunga cengkeh</p>
        </span>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 border-whitesmoke card-profile">
                <div class="box-header">
                    <a href="#" id="link-gambar" class="active">Ubah Foto</a>
                    <a href="#" id="link-password">Ubah Password</a>
                </div>
                <form action="<?= base_url('edit_profile/update_gambar') ?>" method="post" enctype="multipart/form-data" class="mt-4 form-gambar">
                    <h6 class="text-center text-green pb-4"><?= @$success_gambar ?></h6>
                    <img src="<?= base_url(); ?>/assets/img/foto-profil/<?= $this->session->userdata('foto'); ?>" class="foto-profil">
                    <div class="form-group mt-5">
                        <div class="custom-file">
                            <input type="hidden" name="id" value="<?= $this->session->userdata('id') ?>">
                            <input type="hidden" class="form-control" name="nama" value="<?= $this->session->userdata('nama') ?>">
                            <input type="file" class="custom-file-input" id="customFile" name="foto">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary width-100">Submit</button>
                    </div>
                </form>
                <form action="<?= base_url('edit_profile/update_password') ?>" method="post" class="mt-4 form-password">
                    <h6 class="text-center text-green pb-4"><?= @$success_password ?></h6>
                    <div class="form-group mt-5">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="mt-2">Ubah Password</label>
                            </div>
                            <div class="col-sm">
                                <input type="hidden" name="id" value="<?= $this->session->userdata('id') ?>">
                                <input type="password" class="form-control" name="password" placeholder="Ubah Password">
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
    <script>
        $(document).ready(function() {
            $(".form-password").hide();
            $("#link-password").click(function() {
                $(".form-gambar").hide();
                $(".form-password").show();
                $("#link-gambar").removeClass("active");
                $("#link-password").addClass("active");
            });
            $("#link-gambar").click(function() {
                $(".form-gambar").show();
                $(".form-password").hide();
                $("#link-gambar").addClass("active");
                $("#link-password").removeClass("active");
            });
        });
    </script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>

</html>
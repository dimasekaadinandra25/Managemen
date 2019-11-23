<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>product.css">
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
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 border-whitesmoke mt-5 card-barang">
                <form action="<?= site_url('product/tambah') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <div class="row text-center">
                            <div class="back">
                                <a href="<?= site_url('product') ?>"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <div class="col-sm">
                                <h3>Form Tambah Barang</h3>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-3">
                                <label class="mt-2">Nama Barang</label>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" name="nama_barang" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="mt-2">Stok Barang</label>
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="stock" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="mt-2">Harga Beli</label>
                            </div>
                            <div class="col-sm">
                                <input type="hidden" class="form-control" name="last_update" value="<?= $tanggal ?>">
                                <input type="number" class="form-control" name="harga" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="mt-2">Foto Barang</label>
                            </div>
                            <div class="col-sm">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary width-full">Tambah</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
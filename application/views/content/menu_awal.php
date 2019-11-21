<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <div class="container">
            <div class="row mt-5 size-20">
                <div class="col-sm-12">
                    <a href="<?php echo site_url('linked/form_login') ?>">
                        <p>LOGIN ADMIN <i class="fas fa-chevron-right ml-3"></i></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?php echo site_url('linked/about') ?>">
                        <p>ABOUT ME <i class="fas fa-chevron-right ml-5"></i></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
    <div class="overlay" onclick="close_navbar()" style="cursor:pointer" id="myOverlay"></div>
    <div class="navbar">
        <span class="bars" id="bars">
            <i class="fas fa-bars text-white" onclick="open_navbar()"></i>
        </span>
        <span class="title">
            <p class="title_toko">toko bunga cengkeh</p>
            <p class="jalan">Jl. Cengkeh No.52,Tulusrejo, Kec. Lowokwaru,<br> Kota Malang, Jawa Timur 65141</p>
        </span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <form action="<?= site_url('menu_awal/search') ?>" method="post">
                        <div class="input-container">
                            <input type="text" name="search" class="input-field" placeholder="Type to search..." autocomplete="off">
                            <i class="fas fa-search icon" type="submit"></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-80">
            <?php foreach ($data->result() as $databarang) : ?>
                <div class="col-md-3 my-4">
                    <div class="data-barang">
                        <div class="product-top text-center">
                            <img src="<?php echo base_url("assets/img/foto-barang/$databarang->foto_barang") ?>" width='180px' height='180px'>
                        </div>
                        <div class="product-bottom text-center">
                            <p class="size-20"><?php echo $databarang->nama_barang ?> <float class="div1"><?php echo $databarang->stock ?></float>
                            </p>
                            <?php
                                if ($databarang->stock == 0 || $databarang->harga_jual_pcs == 0) {
                                    ?>
                                <h5 class="text-danger">Sold Out</h5>
                            <?php } else { ?>
                                <h5>Rp. <?php echo number_format($databarang->harga_jual_pcs) ?></h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mb-50">
            <div class="col">
                <?= $pagination ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
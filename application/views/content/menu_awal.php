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
            <i class="fas fa-bars" onclick="open_navbar()"></i>
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
                    <div class="input-container">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="input-field" placeholder="Type to search...">
                        <i class="fas fa-search icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>


    <div class="row text-center" id="myTable">
        <div class="col-md-3">
            <div class="product-top">
                <img src="<?= base_url('assets/img/ItemUser/') ?>Tcoklat.jpg" width="300px" height="230px">
                <div class="product-bottom text-center">
                    <p class="size-20">Tango 130 GR <float class="div1">21</float>
                    </p>
                    <h5>Rp.5.000 /item</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-top">
                <img src="<?= base_url('assets/img/ItemUser/') ?>Aqua.jpg" width="300px" height="230px">
            </div>
            <div class="product-bottom text-center">
                <p class="size-20">Aqua 600 ML <float class="div1">7</float>
                </p>
                <h5>Rp.3.000 /item</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-top">
                <img src="<?= base_url('assets/img/ItemUser/') ?>sold.jpg" width="300px" height="230px">
            </div>
            <div class="product-bottom text-center">
                <p class="size-20">lifebuoy <float class="div1">0</float>
                </p>
                <h5>Rp.16.000 /item</h5>
            </div>

        </div>
        <div class="col-md-3">
            <div class="product-top">
                <img src="<?= base_url('assets/img/ItemUser/') ?>Bedak.jpg" width="300px" height="230px">
            </div>
            <div class="product-bottom text-center">
                <p class="size-20">Cussons 200G <float class="div1">1</float>
                </p>
                <h5>Rp.25.000 /item</h5>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
    <script>
        function myFunction() {
            var input, filter, row, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            row = document.getElementById("myTable");
        }
    </script>
</body>

</html>
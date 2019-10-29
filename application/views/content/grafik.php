<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>grafik.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <img src="img/background/pp.jpg" alt="foto profil">
        <p class="text-centered mt-3 text-white size-20">WP-Team</p>
        <div class="container">
            <div class="row mt-5 size-20">
                <div class="col-sm-12">
                    <a href="grafik.php">
                        <p><i class="fas fa-chart-line pr-3"></i>CHART ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="product.php">
                        <p><i class="fas fa-box-open pr-3"></i>PRODUCTS ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="profit.php">
                        <p><i class="fas fa-money-bill-wave pr-3"></i>PROFIT ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="print.php">
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
        <p class="link ml-2 mt-3">Admin / Chart</p>
        <div class="row">
            <div class="col-sm-4">
                <div class="barang-baru">
                    <p class="set-title">Barang Baru</p>
                    <i class="fas fa-box-open set-icon"></i>
                    <p class="set-sub-title">Total : 4</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="penjualan">
                    <p class="set-title">Penjualan</p>
                    <i class="fas fa-money-bill-wave set-icon"></i>
                    <p class="set-sub-title">Total : 250000</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pembelian">
                    <p class="set-title">Pembelian</p>
                    <i class="fas fa-shopping-cart set-icon"></i>
                    <p class="set-sub-title">Total : 150000</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div id="chartPembelian"></div>
            </div>
            <div class="col-sm-6">
                <div id="myChart"></div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
    <script src="<?= base_url('assets/js/') ?>chartPembelian.js"></script>
</body>

</html>
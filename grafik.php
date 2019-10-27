<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-cartesian.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/grafik.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar" id="mySidebar">
        <img src="img/background/pp.jpg" alt="foto profil">
        <p class="text-centered mt-3 text-white size-20">WP-Team</p>
        <div class="container">
            <div class="row mt-5 size-20">
                <div class="col-sm-12">
                    <a href="grafik.php"><p><i class="fas fa-chart-line pr-3"></i>CHART ></p></a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="product.php"><p><i class="fas fa-box-open pr-3"></i>PRODUCTS ></p></a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="profit.php"><p><i class="fas fa-money-bill-wave pr-3"></i>PROFIT ></p></a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="print.php"><p><i class="fas fa-print pr-3"></i>PRINT ></p></a>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <a href="index.php"><p class="mr-5 float-right">LOGOUT</p></a>
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
    <div class="footer">
        <p class="content-1"><i class="fas fa-phone"></i> +62 822-4545-7789</i></p>
        <p class="content-2">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </p>
    </div>
    <script src="js/javascript.js"></script>
    <script src="js/chartPembelian.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php include 'headerPrint.php' ?>
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
        <p class="link ml-2 mt-2">Admin / Print</p>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <select class="custom-select mt-3" id="ubahField" onchange="change(this)">
                        <option value="penjualan">Penjualan</option>
                        <option value="pembelian">Pembelian</option>
                        <option value="laba">Laba</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <select class="custom-select mt-3">
                        <option value="">Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="print-btn"><i class="fas fa-print"></i></div>
            </div>
        </div>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-penjualan">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="cl-1">no</th>
                                <th class="cl-2">Bulan</th>
                                <th class="cl-3">Products</th>
                                <th class="cl-4">Qty</th>
                                <th class="cl-5">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="cl-1">1</th>
                                <th class="cl-2">02-10-2019</th>
                                <th class="cl-3">Tango</th>
                                <th class="cl-4">15</th>
                                <th class="cl-5">20.000</th>
                            </tr>
                            <tr>
                                <th class="cl-1">2</th>
                                <th class="cl-2">05-10-2018</th>
                                <th class="cl-3">Sprite</th>
                                <th class="cl-4">2</th>
                                <th class="cl-5">10.000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-pembelian">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-danger text-white">
                                <th class="cl-1">no</th>
                                <th class="cl-2">Bulan</th>
                                <th class="cl-3">Products</th>
                                <th class="cl-4">Qty</th>
                                <th class="cl-5">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="cl-1">1</th>
                                <th class="cl-2">05-10-2019</th>
                                <th class="cl-3">Milo</th>
                                <th class="cl-4">3</th>
                                <th class="cl-5">15.000</th>
                            </tr>
                            <tr>
                                <th class="cl-1">2</th>
                                <th class="cl-2">05-10-2018</th>
                                <th class="cl-3">Cola</th>
                                <th class="cl-4">2</th>
                                <th class="cl-5">20.000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-laba">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-warning text-white">
                                <th class="cl-1">no</th>
                                <th class="cl-2">Bulan</th>
                                <th class="cl-3">Penjualan</th>
                                <th class="cl-4">Pembelian</th>
                                <th class="cl-5">Laba</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="cl-1">1</th>
                                <th class="cl-2">September</th>
                                <th class="cl-3">200.000</th>
                                <th class="cl-4">150.000</th>
                                <th class="cl-5">Untung 50.000</th>
                            </tr>
                            <tr>
                                <th class="cl-1">2</th>
                                <th class="cl-2">Oktober</th>
                                <th class="cl-3">100.000</th>
                                <th class="cl-4">130.000</th>
                                <th class="cl-5">Rugi 30.000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
    <?php include 'footer.php' ?>
    <script>
        function change(select){
            var selObj = document.getElementById("ubahField");
            var selValue = selObj.options[selObj.selectedIndex].value;
            if(selValue == "pembelian"){
                document.getElementById('tampil-pembelian').style.display = 'block';
                document.getElementById('tampil-penjualan').style.display = 'none';
                document.getElementById('tampil-laba').style.display = 'none';
            }else if(selValue == "penjualan"){
                document.getElementById('tampil-pembelian').style.display = 'none';
                document.getElementById('tampil-penjualan').style.display = 'block';
                document.getElementById('tampil-laba').style.display = 'none';
            }else if(selValue == "laba"){
                document.getElementById('tampil-pembelian').style.display = 'none';
                document.getElementById('tampil-penjualan').style.display = 'none';
                document.getElementById('tampil-laba').style.display = 'block';
            }
        }
    </script>
    <script src="js/javascript.js"></script>
</body>
</html>
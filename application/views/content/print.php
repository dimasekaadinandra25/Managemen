<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>print.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <img src="<?php echo base_url() ?>assets/img/<?= $this->session->userdata('foto') ?>" alt="foto profil">
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
                        <p><i class="fas fa-money-bill-wave pr-4"></i>PROFIT <i class="fas fa-chevron-right  ml-5 pl-4"></i></p>
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
                    <select class="custom-select mt-3" id="bulan">
                        <option value="<?= month() ?>"><?= option1() ?></option>
                        <option value="<?= prev1_month() ?>"><?= option2() ?></option>
                        <option value="<?= prev2_month() ?>"><?= option3() ?></option>
                        <option value="<?= prev3_month() ?>"><?= option4() ?></option>
                        <option value="<?= prev4_month() ?>"><?= option5() ?></option>
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
                        <tbody id="hasil">
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
    <script type="text/javascript">
        $(document).ready(function() {

            $('#bulan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('printpage/data_penjualan'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].idpenjualan + '</td>' +
                                '<td>' + data[i].date_penjualan + '</td>' +
                                '<td>' + data[i].nama_barang + '</td>' +
                                '<td>' + data[i].stock + '</td>' +
                                '<td> Rp.' + data[i].harga + '</td>' +
                                '</tr>';
                        }
                        $('#hasil').html(html);

                    }
                });
                return false;
            });

        });
    </script>
    <script>
        function change(select) {
            var selObj = document.getElementById("ubahField");
            var selValue = selObj.options[selObj.selectedIndex].value;
            if (selValue == "pembelian") {
                document.getElementById('tampil-pembelian').style.display = 'block';
                document.getElementById('tampil-penjualan').style.display = 'none';
                document.getElementById('tampil-laba').style.display = 'none';
            } else if (selValue == "penjualan") {
                document.getElementById('tampil-pembelian').style.display = 'none';
                document.getElementById('tampil-penjualan').style.display = 'block';
                document.getElementById('tampil-laba').style.display = 'none';
            } else if (selValue == "laba") {
                document.getElementById('tampil-pembelian').style.display = 'none';
                document.getElementById('tampil-penjualan').style.display = 'none';
                document.getElementById('tampil-laba').style.display = 'block';
            }
        }
    </script>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
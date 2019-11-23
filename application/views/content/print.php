<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>print.css">
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
        <p class="link ml-2 mt-2">Admin / Print</p>
        <div class="row">
            <div class="col-sm text-center text-danger text-18">
                <?= @$this->session->flashdata('error') ?>
            </div>
        </div>
        <form action="<?= site_url('print_data') ?>" method="post">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <select class="custom-select mt-3" id="ubahField" name="type" onchange="change(this)">
                            <option value="penjualan">Penjualan</option>
                            <option value="pembelian">Pembelian</option>
                            <option value="laba">Laba</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <select class="custom-select mt-3" name="data_bulan" id="bulan">
                            <option>Pilih</option>
                            <option value="<?= month() ?>"><?= option1() ?></option>
                            <option value="<?= prev1_month() ?>"><?= option2() ?></option>
                            <option value="<?= prev2_month() ?>"><?= option3() ?></option>
                            <option value="<?= prev3_month() ?>"><?= option4() ?></option>
                            <option value="<?= prev4_month() ?>"><?= option5() ?></option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2 mt-2">
                    <button class="btn width-full">
                        <div class="print-btn"><i class="fas fa-print"></i></div>
                    </button>
                </div>
            </div>
        </form>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-penjualan" class="mb-100">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="cl-1">no</th>
                                <th class="cl-2">Bulan</th>
                                <th class="cl-3">Products</th>
                                <th class="cl-4">Stock</th>
                                <th class="cl-5">Value</th>
                            </tr>
                        </thead>
                        <tbody id="hasil_penjualan">
                        </tbody>
                        <tfoot id="sub_penjualan">
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-pembelian" class="mb-100">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-danger text-white">
                                <th class="cl-1">no</th>
                                <th class="cl-2">Bulan</th>
                                <th class="cl-3">Products</th>
                                <th class="cl-4">Stock</th>
                                <th class="cl-5">Value</th>
                            </tr>
                        </thead>
                        <tbody id="hasil_pembelian">
                        </tbody>
                        <tfoot id="sub_pembelian">
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mr-2">
            <div class="col-sm-12">
                <div id="tampil-laba" class="mb-100">
                    <table class="table table-striped table-bordered text-center mt-2">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th class="claba-1">No</th>
                                <th class="claba-2">Nama Barang</th>
                                <th class="claba-3">Penjualan</th>
                                <th class="claba-4">Pembelian</th>
                            </tr>
                        </thead>
                        <tbody id="hasil_laba">
                        </tbody>
                        <tfoot id="sub_laba">
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 2
            })

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
                        var count = 1;
                        var total = '';
                        var total_all = '';
                        var sub = '';
                        for (i = 0; i < data.length; i++) {
                            total = data[i].stock_penjualan * data[i].harga_jual_pcs;
                            total_all = parseInt(total_all + total);
                            html += '<tr>' +
                                '<td class="cl-1">' + count++ + '</td>' +
                                '<td class="cl-2">' + data[i].date_penjualan + '</td>' +
                                '<td class="cl-3">' + data[i].nama_barang + '</td>' +
                                '<td class="cl-4">' + data[i].stock_penjualan + '</td>' +
                                '<td class="cl-5">' + formatter.format(total) + '</td>' +
                                '</tr>';
                        }
                        sub = '<tr>' +
                            '<td class="bg-primary text-white cl-1" style="border: none;" class="cl-1"></td>' +
                            '<td class="bg-primary text-white cl-2" style="border: none;"></td>' +
                            '<td class="bg-primary text-white cl-3" style="border: none;"></td>' +
                            '<td class="bg-primary text-white cl-4" style="font-weight: bold">Total </td>' +
                            '<td class="bg-primary text-white cl-5">' + formatter.format(total_all) + '</td>' +
                            '</tr>';
                        $('#hasil_penjualan').html(html);
                        $('#sub_penjualan').html(sub);
                    }
                });
                return false;
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 2
            })

            $('#bulan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('printpage/data_pembelian'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        var count = 1;
                        var total = '';
                        var total_all = '';
                        var sub = '';
                        for (i = 0; i < data.length; i++) {
                            total = data[i].stock_pembelian * data[i].harga_beli_pcs;
                            total_all = parseInt(total_all + total);
                            html += '<tr>' +
                                '<td class="cl-1">' + count++ + '</td>' +
                                '<td class="cl-2">' + data[i].date_pembelian + '</td>' +
                                '<td class="cl-3">' + data[i].nama_barang + '</td>' +
                                '<td class="cl-4">' + data[i].stock_pembelian + '</td>' +
                                '<td class="cl-5">' + formatter.format(total) + '</td>' +
                                '</tr>';
                        }
                        sub = '<tr>' +
                            '<td class="bg-danger text-white cl-1" style="border: none;" class="cl-1"></td>' +
                            '<td class="bg-danger text-white cl-2" style="border: none;"></td>' +
                            '<td class="bg-danger text-white cl-3" style="border: none;"></td>' +
                            '<td class="bg-danger text-white cl-4" style="font-weight: bold">Total </td>' +
                            '<td class="bg-danger text-white cl-5">' + formatter.format(total_all) + '</td>' +
                            '</tr>';
                        $('#hasil_pembelian').html(html);
                        $('#sub_pembelian').html(sub);
                    }
                });
                return false;
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 2
            })

            $('#bulan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('printpage/data_laba'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        var count = 1;
                        var total = '';
                        var total_all_pembelian = '';
                        var total_all_penjualan = '';
                        var sub = '';
                        var laba = '';
                        for (i = 0; i < data.length; i++) {
                            total_pembelian = data[i].st_beli * data[i].harga_beli_pcs;
                            total_penjualan = data[i].st_jual * data[i].harga_jual_pcs;
                            total_all_pembelian = parseInt(total_all_pembelian + total_pembelian);
                            total_all_penjualan = parseInt(total_all_penjualan + total_penjualan);
                            laba = parseInt(total_all_penjualan - total_all_pembelian);
                            html += '<tr>' +
                                '<td class="claba-1">' + count++ + '</td>' +
                                '<td class="claba-2">' + data[i].nama_barang + '</td>' +
                                '<td class="claba-3">' + formatter.format(total_penjualan) + '</td>' +
                                '<td class="claba-4">' + formatter.format(total_pembelian) + '</td>' +
                                '</tr>';
                        }
                        if (total_all_penjualan > total_all_pembelian) {
                            sub = '<tr>' +
                                '<td class="claba-1 bg-secondary text-white"></td>' +
                                '<td class="claba-2 bg-secondary text-white" style="font-weight: bold">Total</td>' +
                                '<td class="claba-3 bg-secondary text-white">' + formatter.format(total_all_penjualan) + '</td>' +
                                '<td class="claba-4 bg-secondary text-white">' + formatter.format(total_all_pembelian) + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td class="claba-1 bg-success text-white"></td>' +
                                '<td class="claba-2 bg-success text-white" style="font-weight: bold">Hasil</td>' +
                                '<td class="claba-3 bg-success text-white">Untung</td>' +
                                '<td class="claba-4 bg-success text-white">' + formatter.format(laba) + '</td>' +
                                '</tr>';
                        } else {
                            sub = '<tr>' +
                                '<td class="claba-1 bg-secondary text-white"></td>' +
                                '<td class="claba-2 bg-secondary text-white" style="font-weight: bold">Total</td>' +
                                '<td class="claba-3 bg-secondary text-white">' + formatter.format(total_all_penjualan) + '</td>' +
                                '<td class="claba-4 bg-secondary text-white">' + formatter.format(total_all_pembelian) + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td class="claba-1 bg-danger text-white"></td>' +
                                '<td class="claba-2 bg-danger text-white" style="font-weight: bold">Hasil</td>' +
                                '<td class="claba-3 bg-danger text-white">Rugi</td>' +
                                '<td class="claba-4 bg-danger text-white">' + formatter.format(Math.abs(laba)) + '</td>' +
                                '</tr>';
                        }
                        $('#hasil_laba').html(html);
                        $('#sub_laba').html(sub);
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
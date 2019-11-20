<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>grafik.css">
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
            <i class="fas fa-bars text-white" onclick="open_navbar()"></i>
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
                    <p class="set-title">Total Barang</p>
                    <i class="fas fa-box-open set-icon"></i>
                    <p class="set-sub-title">Total : <?= $total_barang->num_rows() ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="penjualan">
                    <p class="set-title">Penjualan Bulan lalu</p>
                    <i class="fas fa-money-bill-wave set-icon"></i>
                    <?php
                    $total_penjualan = 0;
                    $total_all_penjualan = 0;
                    foreach ($prev_penjualan->result() as $data_jual) {
                        $total_penjualan = $data_jual->stock_penjualan * $data_jual->harga;
                        $total_all_penjualan = $total_all_penjualan + $total_penjualan;
                    }
                    ?>
                    <p class="set-sub-title">Total : Rp. <?= number_format($total_all_penjualan) ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pembelian">
                    <p class="set-title">Pembelian Bulan lalu</p>
                    <i class="fas fa-shopping-cart set-icon"></i>
                    <?php
                    $total_pembelian = 0;
                    $total_all_pembelian = 0;
                    foreach ($prev_pembelian->result() as $data_beli) {
                        $total_pembelian = $data_beli->stock_pembelian * $data_beli->harga;
                        $total_all_pembelian = $total_all_pembelian + $total_pembelian;
                    }
                    ?>
                    <p class="set-sub-title">Total : Rp. <?= number_format($total_all_pembelian) ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-6">
                <div id="chartPembelian"></div>
            </div>
            <div class="col-sm-6">
                <div id="myChart"></div>
            </div>
        </div>
    </div>
    <?php
    $dataPoints = array(
        array("label" => prev4_month(), "y" => $prev4_pembelian),
        array("label" => prev3_month(), "y" => $prev3_pembelian),
        array("label" => prev2_month(), "y" => $prev2_pembelian),
        array("label" => prev1_month(), "y" => $prev1_pembelian),
        array("label" => month(), "y" => $month_pembelian)
    );
    $dataP = array(
        array("label" => prev4_month(), "y" => $prev4_penjualan),
        array("label" => prev3_month(), "y" => $prev3_penjualan),
        array("label" => prev2_month(), "y" => $prev2_penjualan),
        array("label" => prev1_month(), "y" => $prev1_penjualan),
        array("label" => month(), "y" => $month_penjualan)
    )
    ?>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartPembelian", {

                title: {
                    text: "Pembelian"
                },
                axisX: {
                    valueFormatString: "MMMM-YYYY",
                    labelAngel: -50
                },
                data: [{
                    type: "area",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
    <script>
        anychart.onDocumentReady(function() {
            var data = <?php echo json_encode($dataP, JSON_NUMERIC_CHECK); ?>;
            var chart = anychart.bar();
            chart.title("Penjualan");
            chart.data(data);
            chart.container('myChart');
            chart.draw();
        });
    </script>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
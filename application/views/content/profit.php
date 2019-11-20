<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>profit.css">
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
                        <p><i class="fas fa-chart-line pr-3"></i>CHART<i class="pl-5 fas fa-chevron-right ml-5"></i></p>
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
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <p class="link">Admin / Profit</p>
                    <div class="input-container">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="input-field" placeholder="Type to search...">
                        <i class="fas fa-search icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm text-center text-green text-18">
                <?= @$this->session->flashdata('pesan') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-center text-danger text-18">
                <?= @$this->session->flashdata('error') ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tabel">
                    <table class="table table-bordered table-striped text-center" id="myTable">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th class="column-1">No</th>
                                <th class="column-2">Product</th>
                                <th class="column-3">Qty</th>
                                <th class="column-4">Harga</th>
                                <th class="column-5">Gambar</th>
                                <th class="column-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($data_product->result() as $data) {
                                ?>
                                <tr>
                                    <td scope="row" class="column-1"><?= $count++ ?></td>
                                    <td class="column-2"><?= $data->nama_barang ?></td>
                                    <td class="column-3"><?= $data->stock ?></td>
                                    <td class="column-4">Rp. <?= number_format($data->harga_beli) ?></td>
                                    <td class="column-5"><?= "<img src='" . base_url("assets/img/foto-barang/" . $data->foto_barang) . "' width='100' height='100'>" ?></td>
                                    <td class="column-6">
                                        <button class="sold btn" data-toggle="modal" data-target="#ModalSold-<?= $data->idbarang ?>">SOLD</button>
                                        <button class="buy btn" data-toggle="modal" data-target="#ModalBuy-<?= $data->idbarang ?>">BUY</button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="ModalSold-<?= $data->idbarang ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="<?= site_url('profit/Penjualan') ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="modal-title">
                                                        product
                                                    </div>
                                                    <div class="modal-image">
                                                        <img src="<?php echo base_url() ?>assets/img/foto-barang/<?= $data->foto_barang ?>" alt="Gambar Barang">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <p class="text-white text-centered"><?= $data->nama_barang ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white sold-title">Stock Saat Ini</label>
                                                        <input type="text" class="form-control" value="<?php echo $data->stock ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data->idbarang ?>">
                                                        <input type="hidden" class="form-control" name="current_stock" value="<?php echo $data->stock ?>">
                                                        <label class="text-white sold-title">Terjual:</label>
                                                        <input type="number" class="form-control sold-input" name="sold_stock">
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-default">Simpan</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="ModalBuy-<?= $data->idbarang ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="<?= site_url('profit/Pembelian') ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="modal-title">
                                                        product
                                                    </div>
                                                    <div class="modal-image">
                                                        <img src="<?php echo base_url() ?>assets/img/foto-barang/<?= $data->foto_barang ?>" alt="Gambar Barang">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <p class="text-white text-centered"><?= $data->nama_barang ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white sold-title">Stock Saat Ini</label>
                                                        <input type="text" class="form-control" value="<?php echo $data->stock ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white sold-title">Harga PCS</label>
                                                        <input type="text" class="form-control" value="Rp. <?php echo number_format($data->harga_beli_pcs) ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white sold-title">Harga Beli</label>
                                                        <input type="text" class="form-control" name="harga_beli" placeholder="Rp. <?php echo number_format($data->harga_beli) ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data->idbarang ?>">
                                                        <input type="hidden" class="form-control" name="current_stock" value="<?php echo $data->stock ?>">
                                                        <label class="text-white buy-title">Tambah Stok:</label>
                                                        <input type="number" class="form-control buy-input" name="add_stock">
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-default">Simpan</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-50 pagination">
            <div class="col">
                <?= $pagination ?>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
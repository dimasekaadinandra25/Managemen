<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>product.css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <img src="<?php echo base_url() ?>assets/img/<?= $this->session->userdata('foto') ?>" alt="foto profil">
        <p class="text-centered mt-3 text-white size-20"><?= $this->session->userdata('nama') ?></p>
        <div class="container">
            <div class="row size-20 mt-5">
                <div class="col-sm-12">
                    <a href="<?= site_url('edit_profile') ?>">
                        <p><i class="fas fa-user pr-3"></i>EDIT PROFILE ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/graphic') ?>">
                        <p><i class="fas fa-chart-line pr-3"></i>CHART ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('product') ?>">
                        <p><i class="fas fa-box-open pr-3"></i>PRODUCTS ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/profit') ?>">
                        <p><i class="fas fa-money-bill-wave pr-3"></i>PROFIT ></p>
                    </a>
                </div>
            </div>
            <div class="row size-20">
                <div class="col-sm-12">
                    <a href="<?= site_url('linked/print') ?>">
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
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <p class="link">Admin / Products</p>
                    <div class="input-container">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="input-field" placeholder="Type to search...">
                        <i class="fas fa-search icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-60">
                <div class="form-group">
                    <a href="<?= site_url('product/form') ?>"><button type="button" class="btn btn-warning font-bold height-5 width-full">Tambah Barang</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm text-center text-green text-18">
                <?= @$this->session->flashdata('pesan') ?>
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
                                <th class="column-5">Terakhir Diubah</th>
                                <th class="column-6">Gambar</th>
                                <th class="column-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data->result() as $databarang) {
                                ?>
                                <tr>
                                    <td class="column-1"><?php echo $databarang->idbarang ?></td>
                                    <td class="column-2"><?php echo $databarang->nama_barang ?></td>
                                    <td class="column-3"><?php echo $databarang->stok ?></td>
                                    <td class="column-4"><?php echo $databarang->harga ?></td>
                                    <td class="column-5"><?php echo date('d-m-Y', strtotime($databarang->last_update)) ?></td>
                                    <td class="column-6"><?php echo "<img src='" . base_url("assets/img/foto-barang/" . $databarang->foto_barang) . "' width='100' height='100'>" ?></td>
                                    <td class="column-7"><i class="fas fa-share-square" data-toggle="modal" data-target="#editBarang-<?= $databarang->idbarang ?>"></i></td>
                                </tr>
                                <div class="modal fade" id="EditBarang-<?= $databarang->idbarang ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-title">
                                                    product
                                                </div>
                                                <div class="modal-image">
                                                    <?php echo "<img src='" . base_url("assets/img/foto-barang/" . $databarang->foto_barang) . "' width='100' height='100'>" ?>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="text-white">Name Product</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $databarang->nama_barang ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-white">Price</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $databarang->harga ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-white">Qty</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $databarang->stok ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-50">
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
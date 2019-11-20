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
            <div class="col-sm text-center text-danger text-18">
                <?= @$this->session->flashdata('error') ?>
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
                                <th class="column-4">Stock</th>
                                <th class="column-4">Harga Beli</th>
                                <th class="column-4">Harga PCS</th>
                                <th class="column-4">Harga Jual</th>
                                <th class="column-5">Terakhir Diubah</th>
                                <th class="column-6">Gambar</th>
                                <th class="column-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($data->result() as $databarang) {
                                ?>
                                <tr>
                                    <td class="column-1"><?php echo $count++ ?></td>
                                    <td class="column-2"><?php echo $databarang->nama_barang ?></td>
                                    <td class="column-4"><?php echo $databarang->stock ?></td>
                                    <td class="column-4">Rp. <?php echo number_format($databarang->harga_beli) ?></td>
                                    <td class="column-4">Rp. <?php echo number_format($databarang->harga_beli_pcs) ?></td>
                                    <?php if ($databarang->harga_jual_pcs > 0) { ?>
                                        <td class="column-4">Rp. <?php echo number_format($databarang->harga_jual_pcs) ?></td>
                                    <?php } else { ?>
                                        <td class="column-4">Rp. <?php echo ($databarang->harga_jual_pcs) ?></td>
                                    <?php } ?>
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
                                                    <?php echo "<img src='" . base_url("assets/img/foto-barang/" . $databarang->foto_barang) . "' width='50' height='50'>" ?>
                                                </div>
                                                <form action="<?= site_url('product/ubah') ?>" method="post">
                                                    <div class="form-group mt-3">
                                                        <label class="text-white">Name Product</label>
                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $databarang->idbarang ?>">
                                                        <input type="text" class="form-control" value="<?php echo $databarang->nama_barang ?>" autocomplete="off" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Stock</label>
                                                        <input type="text" class="form-control" value="<?php echo $databarang->stock ?>" autocomplete="off" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Harga Beli</label>
                                                        <input type="text" class="form-control" value="Rp. <?php echo number_format($databarang->harga_beli) ?>" autocomplete="off" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Harga PCS</label>
                                                        <input type="text" class="form-control" value="Rp. <?php echo number_format($databarang->harga_beli_pcs) ?>" autocomplete="off" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-white">Harga Jual</label>
                                                        <?php if ($databarang->harga_jual_pcs > 0) { ?>
                                                            <input type="text" class="form-control" name="harga_jual" placeholder="Rp. <?php echo number_format($databarang->harga_jual_pcs) ?>" autocomplete="off">
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" name="harga_jual" placeholder="Rp <?php echo $databarang->harga_jual_pcs ?>" autocomplete="off">
                                                        <?php } ?>
                                                        <input type="hidden" class="form-control" name="last_update" value="<?= $tanggal ?>">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
        <div class="row mb-50 page">
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
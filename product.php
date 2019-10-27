<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/product.css">
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
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <p class= "link">Admin / Products</p>
                    <div class="input-container">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="input-field" placeholder="Type to search...">
                        <i class="fas fa-search icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
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
                                <th class="column-4">Harga Pcs</th>
                                <th class="column-5">Harga Box</th>
                                <th class="column-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td scope="row" class="column-1">1</td>
                                <td class="column-2">Tango 150GR</td>
                                <td class="column-3">21</td>
                                <td class="column-4">5.000</td>
                                <td class="column-5">34.000</td>
                                <td class="column-6"><i class="fas fa-share-square" data-toggle="modal" data-target="#modelId"></i></td>
                            </tr>
                            <tr >
                                <td scope="row" class="column-1">2</td>
                                <td class="column-2">Aqua 600ML</td>
                                <td class="column-3">7</td>
                                <td class="column-4">3.000</td>
                                <td class="column-5">25.000</td>
                                <td class="column-6"><i class="fas fa-share-square"></i></td>
                            </tr>
                            <tr >
                                <td scope="row" class="column-1">3</td>
                                <td class="column-2">Shampo lifebuoy hijau</td>
                                <td class="column-3">0</td>
                                <td class="column-4">16.000</td>
                                <td class="column-5">98.000</td>
                                <td class="column-6"><i class="fas fa-share-square"></i></td>
                            </tr>
                            <tr >
                                <td scope="row" class="column-1">4</td>
                                <td class="column-2">Cussons 200G</td>
                                <td class="column-3">1</td>
                                <td class="column-4">25.000</td>
                                <td class="column-5">100.000</td>
                                <td class="column-6"><i class="fas fa-share-square"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">
                        product
                    </div>
                    <div class="modal-image">
                        <img src="img/background/wafer.jpg" alt="Gambar Barang">
                    </div>
                    <div class="form-group mt-3">
                      <label class="text-white">Name Product</label>
                      <input type="text" class="form-control" placeholder="Tango 130GR">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Price</label>
                        <input type="text" class="form-control" placeholder="RP. 5.000/item">
                        <input type="text" class="form-control" placeholder="RP. 34.000/box">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Qty</label>
                        <input type="text" class="form-control" placeholder="21">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
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
    <script src="js/javascript.js"></script>
</body>
</html>
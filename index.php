<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Data Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="sidebar" id="mySidebar">
            <div class="container">
                <div class="row mt-5 size-20">
                    <div class="col-sm-12">
                        <a href="login.php"><p>LOGIN ADMIN <i class="fas fa-chevron-right ml-3"></i></p></a>
                    </div>
                </div>
                <div class="row size-20">
                    <div class="col-sm-12">
                        <a href="about.php"><p>ABOUT ME <i class="fas fa-chevron-right ml-5"></i></p></a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
        <div class="overlay" onclick="close_navbar()" style="cursor:pointer" id="myOverlay"></div>
        <div class="navbar">
            <span class="bars" id="bars">
                <i class="fas fa-bars" onclick="open_navbar()"></i>
            </span>
            <span class="title">
                <p class="title_toko">toko bunga cengkeh</p>
                <p class="jalan">Jl. Cengkeh No.52,Tulusrejo, Kec. Lowokwaru,<br> Kota Malang, Jawa Timur 65141</p>
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-container">
                            <input type="text" id="myInput" onkeyup="myFunction()" class="input-field" placeholder="Type to search...">
                            <i class="fas fa-search icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>


        <div class="row text-center" id="myTable">
			<div class="col-md-3">
				<div class="product-top">
				    <img src="img/ItemUser/Tcoklat.jpg" width="300px" height="230px">
				    <div class="product-bottom text-center">
                        <p class="size-20">Tango 130 GR <float class="div1">21</float></p>
                        <h5>Rp.5.000 /item</h5>
                    </div>
                </div>
            </div>
			<div class="col-md-3">
				<div class="product-top">
				    <img src="img/ItemUser/Aqua.jpg" width="300px" height="230px">
				</div>
				<div class="product-bottom text-center">
                    <p class="size-20">Aqua 600 ML <float class="div1">7</float></p>
					<h5>Rp.3.000 /item</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
				<img src="img/ItemUser/sold.jpg" width="300px" height="230px">
				</div>
				<div class="product-bottom text-center">
                    <p class="size-20">lifebuoy <float class="div1">0</float></p>
					<h5>Rp.16.000 /item</h5>
				</div>

			</div>
			<div class="col-md-3">
				<div class="product-top">
				<img src="img/ItemUser/Bedak.jpg" width="300px" height="230px">
				</div>
				<div class="product-bottom text-center">
                    <p class="size-20">Cussons 200G <float class="div1">1</float></p>
					<h5>Rp.25.000 /item</h5>
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
        <script>
            function myFunction() {
                var input, filter, row, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                row = document.getElementById("myTable");
            }
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/style_login.css">
    </head>
    <body>
        <div class="navbar">
            <i class="fas fa-times-circle" onclick="goBack()"></i>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <form action="#">
                            <div class="form-group">
                                <div class="title">
                                    <p>Login Admin</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-container">
                                    <i class="fa fa-user icon" aria-hidden="true"></i>
                                    <input type="text" class="input-field" placeholder="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-container">
                                    <i class="fa fa-key icon" aria-hidden="true"></i>
                                    <input type="password" class="input-field" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Remember Me
                                </div>
                            </div>
                            <div class="form-group" >
                                <a href="product.php"><input type="button" value="Login" class="btn float-right login_btn"></a>
                            </div>
                        </form>
                        <div class="form-group">
                            <p class = "warning">login specifically for shop owner !</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        <script src="js/javascript.js"></script>
    </body>
</html>
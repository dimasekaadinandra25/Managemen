<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style_login.css">
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
                        <div class="form-group">
                            <a href="product.php"><input type="button" value="Login" class="btn float-right login_btn"></a>
                        </div>
                    </form>
                    <div class="form-group">
                        <p class="warning">login specifically for shop owner !</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/') ?>javascript.js"></script>
</body>

</html>
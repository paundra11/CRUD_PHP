<?php
include('konek.php');



?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="template/css/style.css">


</head>

<body class="img js-fullheight" style="background-image: url(gambar/register.JPG);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Mendaftar Sebagai Anggota?</h3>
                        <form action="daftar-proses.php" class="signin-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group">
                                <div class="w-100 btn-right btn">
                                    <a href="login.php" style="color: #fff">Sudah Menjadi Anggota?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/popper.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/main.js"></script>

</body>

</html>
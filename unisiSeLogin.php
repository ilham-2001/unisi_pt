<?php 
    require_once('Conf/bootstrap.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unisi Student Employment - Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="App/assets/bootstrap/dist/css/bootstrap.min.css">
    <style src="App/assets/bootstrap/dist/js/bootstrap.bundle.min.js" defer></style>
    <!-- Custom CSS and JS -->
    <link rel="stylesheet" href="./App/assets/bootstrap/dist/css/style.css">
    <!-- Icon -->
    <link rel="Icon" href="App/assets/icon/icon.png">
    <script src="https://kit.fontawesome.com/915b8e3f91.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 login-col">
                    <img class="login-side-img" src="App/assets/img/login/login.sideimage.png" alt="UII Boulevard">
                </div>
                <div class="col-5 login-col">
                    <div class="login-rg-wrapper">
                        <h1>UII Student Employment</h1>

                        <div class="form-container">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="login-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="login-email" name="login-email" placeholder="udingepeng@gmail.com">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="login-password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="login-password" name="login-password" placeholder="**********">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Ingat saya</label>
                                    <a href="#">Lupa Password?</a>
                                </div>
                                <button type="submit" class="btn btn-primary-uii mb-3" name="btn-login">Masuk</button>
                                <button type="submit" class="btn btn-light mb-3" name=""><i class="fa-brands fa-google"></i> Masuk dengan Google</button>
                            </form>
                            <p class="sign-up">Belum punya akun? <a href="#">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    include("./db.php");
} else {
    header("location: ./layout/dashboard.php");
}



echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign Up Page</title>
</head>

<body>
    <div class="backgroundAll"></div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="./">
                <img src="./image/logo.png" width="112" height="28">
            </a>
        </div>
    </nav>
    <div class="columns" style="margin-top: 80px;">
        <div class="column is-one-quarter" style="margin:auto;">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                    <a href="register_page.php"> <img src="./image/form.png" height="50" width="50"></a>
                     &nbsp &nbspSign Up Page
                        </p>
                </header>
                <form name="register" action="./proses/prosesRegister.php" onsubmit="return (validateRegisterForm())" method="post">
                    <div class="card-content">
                        <div class="field">
                            <p class="control">
                                <label class="label">Nama</label>
                                    <input class="input" type="text" name="nama" placeholder="Nama">
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <label class="label">Email</label>
                                    <input class="input" type="text" name="email" placeholder="Email">
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <label class="label">Password</label>
                                    <input class="input" type="password" name="password" placeholder="Password">
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <label class="label">Nomor Handphone</label>
                                    <input class="input" type="number" name="nomorHandphone" placeholder="Nomor Handphone">
                            </p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <input name="store" type="submit" value="Sign Up" style="padding: 0px !important" class="card-footer-item button is-warning">
                    </footer>
                </div>
                </form>
            <small>Already have account ? <a href="./login_page.php">Login</a></small>
        </div>
    </div>
</body>
<script src="./script/script.js"></script>
</html>

'
?>
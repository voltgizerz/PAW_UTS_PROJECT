<?php 
session_start();
if (!isset($_SESSION['isLoginAdmin'])) {
    include("./db.php");
}
else{
    header("location: ./dashboard/indexAdmin.php");
}

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Page</title>
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
                    <a href="login_page_admin.php"> <img src="./image/ad.png" height="100" width="100"></a>
                     &nbspLogin Page Admin
                    </p>
                </header>
                <form action="./proses/prosesLoginAdmin.php" method="post">
                <div class="card-content">
                    <div class="field">
                        <p class="control">
                            <label class="label">Email</label>
                            <input class="input" type="email" name="email" placeholder="Email">
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <label class="label">Password</label>
                            <input class="input" type="password" name="password" placeholder="Password">
                        </p>
                    </div>
                </div>
                <footer class="card-footer">
                    <input name="loginAdmin" type="submit" value="Log In" style="padding: 0px !important" class="card-footer-item is-link button">
                </footer>
            </div>
            <small> Gunakan Akun Admin anda untuk Login!</a></small>
        </div>
    </div>
</body>

</html>
'
?>
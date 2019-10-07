<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./image/logo.png">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Login Pilihan</title>
</head>

<body>
    <div class="backgroundAll"></div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="./index.php">
                <img src="./image/logo.png" width="100" height="100">
            </a>
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-light" href="./index.php">
                        Home
                    </a>
                    <a class="button is-light" href="./about.php">
                        About Us
                    </a>
                    <a class="button is-light" href="./kontak.php">
                        Contact Us
                    </a>
                    <div class="barinfo">
                        <div class="dropdown">
                            <button class="dropbtn">Store</button>
                            <div class="dropdown-content">
                                <a href="">McLaren</a>
                                <a href="">Lamborghini</a>
                                <a href="">Ferrari</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./register_page.php">
                            <strong>Sign Up Member</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="homeStyle">
        <h1 style="center">
            <p align="center"><b>LOGIN SEBAGAI</b></p>
            <table style="width:100%">
                <tr>
                    <th><a href="login_page.php"> <img src="./image/user.png" height="250" width="250"></a></th>
                    <th><a href="login_page_admin.php"><img src="./image/ad.png" height="250" width="250"></a><br></th>
                </tr>
                <tr>
                    <td style="text-align:center;"><a class="button is-primary" href="./login_page.php">
                            <strong>MEMBER</strong>
                        </a></td>
                    <td style="text-align:center;"> <a class="button is-primary" href="./login_page_admin.php">
                            <strong>ADMIN</strong>
                        </a></td>
                </tr>
            </table>


        </h1>

    </div>
</body>

</html>
<style lang="css">
    .homeStyle {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        font-size: 50px;
        font-weight: bold;
        background:silver;
    }

    .homeStyle h1 {
        margin: 0px auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./image/logo.png">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Ferrari</title>
</head>

<body>
    <div class="backgroundAll"></div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="./image/logo.png" width="100" height="100">
            </a>
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-light" href="index.php">
                        Home
                    </a>
                    <a class="button is-light" href="about.php">
                        About Us
                    </a>
                    <a class="button is-light" href="kontak.php">
                        Contact Us
                    </a>

                    <div class="barinfo">
                        <div class="dropdown">
                            <button class="dropbtn">Store</button>
                            <div class="dropdown-content">
                                <a href="store_mclaren.php">McLaren</a>
                                <a href="store_lambo.php">Lamborghini</a>
                                <a href="store_ferarri.php">Ferrari</a>
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
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="./login_pilihan.php">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <p align="center">
        <h1 class="judul">Ferarri</h1>
        <p>

            <div class="columns" style="padding-left:40px; ">
                <div class="columns" style="padding:40px;  text-align: center;">

                </div>
            </div>
            <div class="columns">
                <div class="column" style="padding:100px">
                    <table border=2>
                        <tr>
                            <td>
                                <img src="./image/ferrari.488.png" width="100%" height="200px">
                            </td>
                            <td>
                                <h1 class="nama_mobil">Ferrari 488</h1>
                                <br />
                                <p>- Good Quality</p>
                                <p>- Mulus</p>
                                <p>- No Minus</p>
                                <div class="buttons">
                                    <a class="button is-light" href="kontak.php">Contact Us</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width=400 height=100>
                                <img src="./image/ferrari.812.png" width="100%" height="200px">
                            </td>
                            <td width=500>
                                <h1 class="nama_mobil">Ferrari 812</h1>
                                <br />
                                <p>- Good Quality</p>
                                <p>- Mulus</p>
                                <p>- No Minus</p>
                                <div class="buttons">
                                    <a class="button is-light" href="kontak.php">Contact Us</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <p class="gambar">

                        <center>
                            <table>
                                <tr>
                                    <b>SPONSORS</b></<b>
                                    <td>
                                        <center><img src="./image/ferrari-logo.png" width="180" height="100">
                                    </td>
                                    <td>
                                        <center><img src="./image/laren-logo.png" width="250" height="250">
                                    </td>
                                    <td>
                                        <center> <img src="./image/lambor-logo.png" width="250" height="250">
                                    </td>
                                </tr>
                            </table>
                    </p>

                </div>
                <div>
</body>

</html>
<style>
    .judul {
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        padding-top: 20px;
    }

    .nama_mobil {
        font-size: 24px;
        font-weight: bold;
        padding-left: 10px;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./image/logo.png">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>About Us</title>
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
                                <a href="store_ferarri.php">Lamborghini</a>
                                <a href="store_lambo.php">Ferrari</a>
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
    <div class="about">
        <h1 class="judul"> About Us</h1>

        <center><img src="./image/aston.jpg" width="500" height="200"></center>
        <center>
            <h1>Kami adalah Showroom jual beli supercar, terbaik terkece terhits dan tersolid.</p>
                Kami tidak hanya menjual super car saja, kami juga dapat membantu anda</p>
                dalam menjual mobil probadi dan spare part bekas anda.</p>
            </h1>

            <b>Alamat showroom:</b></p>
            Jl. Panjang No.54, RT.5/RW.1, Kedoya Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
            Indonesia</p>
            </p>
            <p class="gambar">
                <table>
                    <tr>
                        <b>SPONSORS</b></<b>
                        <td><img src="./image/ferrari-logo.png" width="180" height="100"></td>
                        <td><img src="./image/laren-logo.png" width="250" height="250"></td>
                        <td> <img src="./image/lambor-logo.png" width="250" height="250"></td>
                    </tr>
                </table>
            </p>

    </div>
</body>

</html>
<style lang="about">
    .judul {
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        padding-top: 20px;
    }

    .gambar {
        padding-left: 420px;
    }

    p {
        padding-left: 350px;
    }

    /*.grid-one {*/
    /*grid-area: menu;*/
    /*}*/
    /**/
    /*.grid-two {*/

    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./image/logo.png">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Home</title>
</head>

<body>
    <div class="backgroundAll"></div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
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
    <div class="homeStyle">
        <iframe style="position: absolute; height: 100%; width:100%; " src="./video/video.html"></iframe>
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
    }

    .homeStyle h1 {
        margin: 0px auto;
    }
</style>
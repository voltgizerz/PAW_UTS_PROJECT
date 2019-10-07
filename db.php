<?php
$dbServer = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "tb_paw_b_kel6";
$con = mysqli_connect($dbServer, $username, $password, $dbName);
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

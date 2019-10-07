<?php
session_start();
if (isset($_POST['store'])) {
    include('../db.php');
    $namaPembeli = $_POST['namaPembeli'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    if (isset($_SESSION['email'])) {
        $cek = $_SESSION['email'];
    }

    $input = mysqli_query($con, "INSERT INTO pembelian(namaPembeli,gender,alamat,kota,nomorTelepon,merk,type,warna,harga,cek) VALUES('$namaPembeli','$gender','$alamat','$kota','$nomorTelepon','$merk','$type','$warna','$harga','$cek')") or die(mysqli_error($con));
    if ($input) {
        echo '<script>alert("Success Melakukan Pembelian!"); window.location ="../dashboard/listPembelianMobil.php"</script>';
    } else {
        echo '<script>alert("Gagal Melakukan Pembelian!"); window.location ="../dashboard/formBeliMobil.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

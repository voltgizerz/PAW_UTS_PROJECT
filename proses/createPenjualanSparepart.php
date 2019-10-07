<?php
session_start();
if (isset($_POST['storeSp'])) {
    include('../db.php');
    $namaPenjual = $_POST['namaPenjual'];
    $namaSparepart = $_POST['namaSparepart'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kondisi = $_POST['kondisi'];
    if (isset($_SESSION['email'])) {
        $cek = $_SESSION['email'];
    }

    $input = mysqli_query($con, "INSERT INTO sparepart(namaPenjual,namaSparepart,deskripsi,harga,kondisi,cek) VALUES('$namaPenjual','$namaSparepart','$deskripsi','$harga','$kondisi','$cek')") or die(mysqli_error($con));
    if ($input) {
        echo '<script>alert("Success Menambah Penjualan Sparepart!"); window.location ="../dashboard/listSparepart.php"</script>';
    } else {
        echo '<script>alert("Gagal Menambah Penjualan Sparepart"); window.location ="../dashboard/formJualSparepart.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

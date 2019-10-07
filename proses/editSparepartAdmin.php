<?php
session_start();
if (isset($_POST['storeSp'])) {
    include('../db.php');
    $id = $_POST['id'];
    $namaPenjual = $_POST['namaPenjual'];
    $namaSparepart = $_POST['namaSparepart'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kondisi = $_POST['kondisi'];
    if (isset($_SESSION['email'])) {
        $cek = $_SESSION['email'];
    }

    $input = mysqli_query($con, "UPDATE sparepart SET namaPenjual='$namaPenjual',namaSparepart='$namaSparepart',deskripsi='$deskripsi',harga='$harga',kondisi='$kondisi' WHERE id='$id'") or die(mysqli_error($con));
    if ($input) {
        echo '<script>alert("[ADMIN] Success Edit Penjualan Sparepart!"); window.location ="../dashboard/listSparepartAdmin.php"</script>';
    } else {
        echo '<script>alert("Gagal Edit Penjualan Sparepart"); window.location ="../dashboard/formJualSparepartAdmin.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
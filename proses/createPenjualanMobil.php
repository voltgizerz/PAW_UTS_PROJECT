<?php
session_start();
if(isset($_POST['storeMobil'])){
    include('../db.php');
    $namaPenjual = $_POST['namaPenjual'];
    $merk = $_POST['merk'];
    $tahun = $_POST['tahun'];
    $jarak = $_POST['jarak'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    if (isset($_SESSION['email'])) {
        $cek = $_SESSION['email'];
    }
    
    $input = mysqli_query($con,"INSERT INTO penjualanm(namaPenjual,merk,tahun,jarak,warna,harga,jenis,cek) VALUES('$namaPenjual','$merk','$tahun','$jarak','$warna','$harga','$jenis','$cek')")or die(mysqli_error($con));
    if($input){
         echo '<script>alert("Success Menambah Penjualan Mobil!"); window.location ="../dashboard/listPenjualanMobil.php"</script>';
    }else{
        echo '<script>alert("Gagal Menambah Penjualan Mobil"); window.location ="../dashboard/formJualMobil.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }

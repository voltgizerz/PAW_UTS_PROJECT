<?php
if(isset($_POST['storeMobil']) && ! empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $namaPenjual = $_POST['namaPenjual'];
    $merk = $_POST['merk'];
    $tahun = $_POST['tahun'];
    $jarak = $_POST['jarak'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];

    $edit = mysqli_query($con,"UPDATE penjualanm SET namaPenjual='$namaPenjual',merk='$merk',
    tahun='$tahun',jarak='$jarak',warna='$warna',harga='$harga',jenis='$jenis' WHERE id='$id' ")or die(mysqli_error($con));
    if($edit){
        echo '<script>alert("[ADMIN]Success Edit Data Penjualan Mobil!"); window.location ="../dashboard/listPenjualanMobilAdmin.php"</script>';
    }else{
        echo '<script>alert("Gagal Edit Data Penjualan Mobil!"); window.location ="../dashboard/formJualMobilAdmin.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }

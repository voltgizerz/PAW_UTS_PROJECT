<?php
if (isset($_POST['store'])) {
    include('../db.php');
    $id = $_POST['id'];
    $namaPembeli = $_POST['namaPembeli'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $edit = mysqli_query($con, "UPDATE pembelian SET namaPembeli='$namaPembeli',gender='$gender',alamat='$alamat',kota='$kota',nomorTelepon='$nomorTelepon',
    merk='$merk',type='$type',warna='$warna',harga='$harga' WHERE id='$id'") or die(mysqli_error($con));
    if ($edit) {
        echo '<script>alert("Success Edit Pembelian!"); window.location ="../dashboard/listPembelianMobil.php"</script>';
    } else {
        echo '<script>alert("Gagal Edit Pembelian!"); window.location ="../dashboard/formBeliMobil.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

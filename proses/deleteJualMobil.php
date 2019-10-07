<?php
if(isset($_GET['id'])){
    include('../db.php');
    $id = $_GET['id'];
    $delete = mysqli_query($con,"DELETE FROM penjualanm WHERE id='$id'")or die(mysqli_error($con));
 if($delete){
    echo '<script>alert("Sukses Hapus Data Penjualan Mobil!"); window.location ="../dashboard/listPenjualanMobil.php"</script>';
 }else{
    echo '<script>alert("Gagal Hapus Data Penjualan Mobil!"); window.location ="../dashboard/listPenjualanMobil.php"</script>';
 }
}else{
    echo '<script>window.history.back()</script>';
}
?>
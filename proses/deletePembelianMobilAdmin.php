<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $id = $_GET['id'];
    $delete = mysqli_query($con, "DELETE FROM pembelian WHERE id='$id'") or die(mysqli_error($con));
    if ($delete) {
        echo '<script>alert("Sukses Hapus Pembelian!"); window.location ="../dashboard/listPembelianAdmin.php"</script>';
    } else {
        echo '<script>alert("Gagal Hapus Pembelian!"); window.location ="../dashboard/listPembelianAdmin.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

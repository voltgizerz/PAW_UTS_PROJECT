<?php
if (isset($_GET['id'])) {
   include('../db.php');
   $id = $_GET['id'];
   $delete = mysqli_query($con, "DELETE FROM member WHERE id='$id'") or die(mysqli_error($con));
   if ($delete) {
      echo '<script>alert("Sukses Hapus Member!"); window.location ="../dashboard/listProfileAdmin.php"</script>';
   } else {
      echo '<script>alert("Gagal Hapus Member!"); window.location ="../dashboard/listProfileAdmin.php"</script>';
   }
} else {
   echo '<script>window.history.back()</script>';
}

<?php
if (isset($_GET['id'])) {
   include('../db.php');
   $id = $_GET['id'];
   $delete = mysqli_query($con, "DELETE FROM member WHERE id='$id'") or die(mysqli_error($con));
   if ($delete) {
      ob_start();
      session_start();
      session_destroy();
      echo '<script>alert("Sukses Hapus Akun!"); window.location ="../login_page.php"</script>';
   } else {
      echo '<script>alert("Gagal Hapus Akun!"); window.location ="../dashboard/listPeserta.php"</script>';
   }
} else {
   echo '<script>window.history.back()</script>';
}

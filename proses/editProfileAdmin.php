<?php
if (isset($_POST['updateProfile'])) {
    include('../db.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nomorHandphone = $_POST['nomorHandphone'];

    $edit = mysqli_query($con, "UPDATE member SET nama='$nama',password='$password',nomorHandphone='$nomorHandphone' WHERE id='$id'") or die(mysqli_error($con));
    if ($edit) {
        echo '<script>alert("[ADMIN] Success Edit Profile!"); window.location ="../dashboard/listProfileAdmin.php"</script>';
    } else {
        echo '<script>alert("Failed Edit Profile!"); window.location ="../dashboard/listProfileAdmin.php"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

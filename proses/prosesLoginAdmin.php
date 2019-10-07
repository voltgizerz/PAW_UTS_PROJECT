<?php
if (isset($_POST['loginAdmin'])) {
    include("../db.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' Limit 1") or die(mysqli_error($con));
    if (mysqli_num_rows($query) == 0) {
        echo '<script>alert("Email not Found!"); window.location = "../login_page_admin.php"</script>';
    } else {
        $user = mysqli_fetch_assoc($query);
        if ($user['password'] == $password) {
            session_start();
            $_SESSION['isLoginAdmin'] = true;
            $_SESSION['user'] = $user;

            echo '<script>alert("Success Login Admin!"); window.location = "../dashboard/indexAdmin.php"</script>';
        } else {
            echo '<script>alert("Email or Password Invalid!"); window.location ="../login_page_admin.php"</script>';
        }
    }
} else {
    echo '<script>window.history.back()</script>';
}

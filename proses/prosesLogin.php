<?php
session_start();
if (isset($_POST['login'])) {
    include("../db.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM member WHERE email = '$email' Limit 1") or die(mysqli_error($con));
    $query1 = mysqli_query($con, "SELECT * FROM member WHERE email = '$email' AND status=1 Limit 1") or die(mysqli_error($con));
    if (mysqli_num_rows($query) == 0) {
        echo '<script>alert("Email not Found!"); window.location = "../login_page.php"</script>';
    } else if (mysqli_num_rows($query1) == 0) {
        echo '<script>alert("Please Check Your Email or SPAM FOLDER For Verification Code!"); window.location = "../login_page.php" </script>';
    } else {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;

            echo '<script>alert("Success Login Member!"); window.location = "../dashboard/index.php"</script>';
        } else {
            echo '<script>alert("Email or Password Invalid!"); window.location ="../login_page.php"</script>';
        }
    }
} else {
    echo '<script>window.history.back()</script>';
}

<?php
if (isset($_POST['store'])) {
    include("../db.php");
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = mysqli_query($con, "SELECT * FROM member WHERE email = '$email' Limit 1") or die(mysqli_error($con));
    if (mysqli_num_rows($sql) == 1) {
        echo '<script>alert("Registrasi Gagal, Email ini sudah digunakan!"); window.location = "../register_page.php"</script>';
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nomorHandphone = $_POST['nomorHandphone'];
        $status = 0;
        $activationcode = md5($email . time());
        $query = mysqli_query($con, "INSERT INTO member (nama,email,password,nomorHandphone,activationcode,status) values('$nama','$email','$password','$nomorHandphone','$activationcode','$status')") or die(mysqli_error($con));
        if ($query) {
            $to = $email;
            $msg = "Thanks for new Registration.";
            $subject = "Email verification";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers = 'From:felix.asui@gmail.com' . "\r\n";
            $ms = "<html></body><div><div>Dear $nama,</div></br></br>";
            $ms = "Please click The following link For verifying and activation of your account
                Link='http://127.0.0.1:8080/TUGAS_BESAR_PAW/email_verification.php?code=$activationcode'";
            mail($to, $subject, $ms, $headers);
            echo "<script>alert('Registration successful, please verify in the registered Email Address');</script>";
            echo "<script>window.location = '../login_page.php';</script>";;
        } else {
            echo "<script>alert('Data not inserted');</script>";
        }
    }
}

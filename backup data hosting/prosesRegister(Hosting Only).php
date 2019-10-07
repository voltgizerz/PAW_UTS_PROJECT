<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['store'])) {

    require '../mail/Exception.php';
    require '../mail/PHPMailer.php';
    require '../mail//SMTP.php';

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
            $subject = "Email verification";
            $body = "Please click The following link For verifying and activation of your account 
             http://richzautopaw.000webhostapp.com/email_verification.php?code=$activationcode
             Richz Auto Admin";
            
            $headers = 'From:PAW TUGAS BESAR C | RichzAuto>' . "\r\n";
            $headers = "MIME-Version: 1.0 Content-Type: text/html; charset=UTF-8";
            mail ($to, $subject, $body, $headers);
            
            echo "<script>alert('Registration successful, please verify in the registered Email Address');</script>";
            echo "<script>window.location = '../login_page.php';</script>";;
        } else {
            echo "<script>alert('Data not inserted');</script>";
        }
    }
}

<?php
include("db.php");
if (!empty($_GET['code']) && isset($_GET['code'])) {
    $code = $_GET['code'];
    $sql = mysqli_query($con, "SELECT * FROM member WHERE activationcode='$code'");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
        $st = 0;
        $result = mysqli_query($con, "SELECT id FROM member WHERE activationcode='$code' and status='$st'");
        $result4 = mysqli_fetch_array($result);
        if ($result4 > 0) {
            $st = 1;
            $result1 = mysqli_query($con, "UPDATE member SET status='$st' WHERE activationcode='$code'");
            echo '<script>alert("Your Account Activated!"); window.location = "./login_page.php"</script>';
        } else {
            echo '<script>alert("Your account is already active, no need to activate again!"); window.location = "./login_page.php"</script>';
        }
    } else {
        echo '<script>alert("Wrong activation code!"); window.location = "./login_page.php"</script>';
    }
}

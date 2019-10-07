<?php
include '../layout/dashboard.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM member WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <div id="inputan">
        <form name="myFormProfile" action="../proses/editProfile.php" onsubmit="return validateFormProfile()" method="post">
            <p class="user"> PROFILE MANAGER</p>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            Nama<br> <input type="text" id=inputtext name="nama" value="<?php echo $data['nama']; ?>"><br><br>
            Password<Br> <input type="password" id=inputtext name="password" value="<?php echo $data['password']; ?>"><br><br>
            Nomor Handphone<Br> <input type="number" id=inputtext name="nomorHandphone" value="<?php echo $data['nomorHandphone']; ?>"><br><br>

            <input id=submit class="inputButton" type="submit" name="updateProfile" value="UPDATE">

        </form>

    </div>
</div>
</body>
<script src="../script/script.js"></script>

<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>
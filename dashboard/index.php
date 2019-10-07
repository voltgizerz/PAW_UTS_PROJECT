<?php
include '../layout/dashboard.php';


?>

<div id="dashboardData">
    <?php
    if (isset($_SESSION['email'])) {
        $user = $_SESSION['email'];
        echo "<marquee behavior='alternate'> Selamat Datang di Web RichzAuto! <b>$user</b></marquee> ";
    } ?>
    <iframe width="100%" height="1600"" src="./tgs/TGS1_B_9455.HTML"></iframe>
</div>
</body>
<script src="../script/script.js"></script>
<script>
    var elm = document.getElementById("dashboardTab").classList.add("isActive")
</script>

</html>
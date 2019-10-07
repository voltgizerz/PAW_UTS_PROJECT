<?php
include '../layout/dashboard.php';
?>
<link rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<div id="dashboardData">
    <div id="inputan">
        <?php
        if (isset($_SESSION['email'])) {
            $user = $_SESSION['email'];
            echo "<i>Verified Email : <b>$user</b></i> ";
        } ?>
        <h1 class="user">FORM PEMBELIAN MOBIL</h1><br>
        <form name="myForm2" action="../proses/createBeliMobil.php" onsubmit="return (validateFormPembelian())" method="post">
            <fieldset>
                <legend class="legend">Identitas Pembeli</legend>

                Nama Lengkap
                <input class="form-control" type="text" id=inputtext name="namaPembeli"><br><br>

                Jenis Kelamin<br>
                <input type="radio" name="gender" id="male" value="0">Laki-Laki<br>
                <input type="radio" name="gender" id="female" value="1">Perempuan <br><br>

                Alamat&emsp;
                <input class="form-control" type="text" id=inputtext name="alamat"><br><br>

                Kota &emsp;&emsp;
                <input class="form-control" type="text" id=inputtext name="kota"><br><br>

                Nomor Telepon
                <input class="form-control" type="number" id=inputtext name="nomorTelepon">
            </fieldset>

            <fieldset>
                <legend class="legend">Indentitas Kendaraan</legend>
                Merk&nbsp;&nbsp;
                <select class="radio-inline" name="merk" id="grade">
                    <option value=''></option>
                    <option value="" style="font-weight:bold">McLaren</option>
                    <option value="1">McLaren 540C</option>
                    <option value="2">McLaren 570S</option>
                    <option value="3">McLaren 650s</option>
                    <option value=''></option>
                    <option value="" style="font-weight:bold">Ferrari</option>
                    <option value="4">Ferrari 458</option>
                    <option value="5">Ferrari F12</option>
                    <option value="6">Ferrari 288</option>
                    <option value=''></option>
                    <option value="" style="font-weight:bold">Lamborghini</option>
                    <option value="7">Lamborghini Uruz</option>
                    <option value="8">Lamborghini Hurican</option>
                    <option value="9">Lamborghini Aventador</option>
                </select><br><br>
                Type &nbsp;&nbsp;
                <select class="radio-inline" name="type" id="grade1">
                    <option value=''></option>
                    <option value="1">Grade A</option>
                    <option value="2">Grade B</option>
                    <option value="3">Grade C</option>
                    <option value="4">Grade D</option>
                </select><br><br>

                Warna
                <select class="radio-inline" name="warna" id="grade2">
                    <option value=''></option>
                    <option value="1">Hitam</option>
                    <option value="2">Putih</option>
                    <option value="3">Merah</option>
                </select><br><br>

                Harga Deal &emsp;&emsp;
                <input class="form-control" type="number" id=inputtext name="harga"><br><br>
            </fieldset> <br>
            <input id=submit class="inputButton" type="submit" name="store" value="BELI">
    </div>
</div>
</body>
<script src="../script/script.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>
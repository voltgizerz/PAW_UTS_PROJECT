<?php
include '../layout/dashboard.php';
?>

<div id="dashboardData">
    <div id="inputan">
        <?php
        if (isset($_SESSION['email'])) {
            $user = $_SESSION['email'];
            echo "<i>Verified Email : <b>$user</b></i> ";
        } ?>
        <h1 class="user">FORM PENJUALAN SPAREPART</h1><br>
        <form name="myFormSparepart" action="../proses/createPenjualanSparepart.php" onsubmit="return (validateSparepart())" method="post">
            <fieldset>
                <legend class="legend">Identitas Penjual Sparepart</legend>

                Nama Lengkap
                <input type="text" id=inputtext name="namaPenjual"><br><br>

            </fieldset>

            <fieldset>
                <legend class="legend">Informasi Sparepart</legend>

                Nama Sparepart<br>
                <input type="text" id=inputtext name="namaSparepart"><br><br>

                Deskripsi Singkat
                <input type="textarea" id=inputtext name="deskripsi"><br><br>

                Harga Jual&emsp;
                <input type="number" id=inputtext name="harga"><br><br>

                Kondisi<br>
                <input type="radio" name="kondisi" id="baru" value="baru">Baru<br>
                <input type="radio" name="kondisi" id="bekas" value="bekas">Bekas<br>
            </fieldset> <br>

            <input id=submit class="inputButton" type="submit" name="storeSp" value="Tambahkan">
        </form>
    </div>
    </body>
    <script src="../script/script.js"></script>
    <script>
        var elm = document.getElementById("sparepartTab").classList.add("isActive")
    </script>

    </html>
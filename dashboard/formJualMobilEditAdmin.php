<?php
include '../layout/dashboardAdmin.php';
?>


<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM penjualanm WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<div id="dashboardData">
    <div id="inputan">
        <h1 class="user">INPUT DATA PENJUALAN MOBIL</h1><br>
        <form name="myForm2" action="../proses/editJualMobilAdmin.php" onsubmit="return validateForm2()" method="post">
            <fieldset>
                <legend class="legend">Identitas Penjual Mobil</legend>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                Nama Lengkap
                <input type="text" id=inputtext name="namaPenjual" value="<?php echo $data['namaPenjual']; ?>"><br><br>

            </fieldset>

            <fieldset>
                <legend class="legend">Identitas Penjual</legend>

                Merk<Br>
                <select name="merk" id="grade">
                    <option value="">Pilih</option>
                    <option value="1" <?php if ($data['merk'] == 1) echo 'selected="selected"'; ?>>McLaren 540C</option>
                    <option value="2" <?php if ($data['merk'] == 2) echo 'selected="selected"'; ?>>McLaren 570S</option>
                    <option value="3" <?php if ($data['merk'] == 3) echo 'selected="selected"'; ?>>McLaren 650s</option>
                    <option value="4" <?php if ($data['merk'] == 4) echo 'selected="selected"'; ?>>Ferrari 458</option>
                    <option value="5" <?php if ($data['merk'] == 5) echo 'selected="selected"'; ?>>Ferrari F12</option>
                    <option value="6" <?php if ($data['merk'] == 6) echo 'selected="selected"'; ?>>Ferrari 288</option>
                    <option value="7" <?php if ($data['merk'] == 7) echo 'selected="selected"'; ?>>Lamborghini Uruz</option>
                    <option value="8" <?php if ($data['merk'] == 8) echo 'selected="selected"'; ?>>Lamborghini Hurican</option>
                    <option value="9" <?php if ($data['merk'] == 9) echo 'selected="selected"'; ?>>Lamborghini Aventador</option>
                </select><br><br>

                Tahun<br>
                <input type="number" id=inputtext name="tahun" value="<?php echo $data['tahun']; ?>"><br><br>

                Jarak Tempuh<br>
                <input type="number" id=inputtext name="jarak" value="<?php echo $data['jarak']; ?>"><br><br>

                Warna<br>
                <input type="text" id=inputtext name="warna" value="<?php echo $data['warna']; ?>"><br><br>

                Harga<br>
                <input type="number" id=inputtext name="harga" value="<?php echo $data['harga']; ?>"><br><br>

                Bahan Bakar <br>
                <?php
                if ($data['jenis'] == 0) {
                    echo '<input type="radio" name="jenis" id="bensin" value="0" checked="checked">Bensin<br>
                    <input type="radio" name="jenis" id="listrik" value="1" >Listrik<br>
                    <input type="radio" name="jenis" id="diesel" value="2" >Diesel<br><br>';
                } else if ($data['jenis'] == 1) {
                    echo '<input type="radio" name="jenis" id="bensin" value="0">Bensin<br>
                    <input type="radio" name="jenis" id="listrik" value="1" checked="checked">Listrik<br>
                    <input type="radio" name="jenis" id="diesel" value="2" >Diesel<br><br>';
                } else if ($data['jenis'] == 2) {
                    echo '<input type="radio" name="jenis" id="bensin" value="0">Bensin<br>
                    <input type="radio" name="jenis" id="listrik" value="1" >Listrik<br>
                    <input type="radio" name="jenis" id="diesel" value="2"checked="checked" >Diesel<br><br>';
                } else {
                    echo '<input type="radio" name="jenis" id="bensin" value="0">Bensin
                    <input type="radio" name="jenis" id="listrik" value="1" >Listrik
                    <input type="radio" name="jenis" id="diesel" value="2" >Diesel<br><br>';
                }
                ?>

            </fieldset><BR>

            <input id=submit class="inputButton" type="submit" name="storeMobil" value="UPDATE">
        </form>
    </div>
    </body>
    <script src="../script/script.js"></script>
    <script>
        var elm = document.getElementById("bukuTab").classList.add("isActive")
    </script>

    </html>
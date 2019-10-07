<?php
include '../layout/dashboardAdmin.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM pembelian WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <div id="inputan">
        <form name="myForm2" action="../proses/editPembelianMobilAdmin.php" onsubmit="return validateFormPembelian()" method="post">
            <p class="user"> UPDATE PEMBELIAN MOBIL</p>
            <fieldset>
                <legend class="legend">Identitas Pembeli</legend>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                Nama<br> <input type="text" id=inputtext name="namaPembeli" value="<?php echo $data['namaPembeli']; ?>"><br><br>
                Jenis Kelamin<br>
                <div class=jk>
                    <?php
                    if ($data['gender'] == 0) {
                        echo '<input type="radio" name="gender" id="male" value="0" checked="checked">Laki-Laki
                            <input type="radio" name="gender" id="female" value="1" >Perempuan<br><br>';
                    } else if ($data['gender'] != 0) {
                        echo '<input type="radio" name="gender" id="male" value="0" >Laki-Laki
                            <input type="radio" name="gender" id="female" value="1" checked="checked">Perempuan<br><br>';
                    } else {
                        echo '<input type="radio" name="gender" id="male" value="0">Laki-Laki
                            <input type="radio" name="gender id="female" value="1" >Perempuan<br><br>';
                    }
                    ?>
                </div>

                

                Alamat<Br> <input type="text" id=inputtext name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
                Kota<Br> <input type="text" id=inputtext name="kota" value="<?php echo $data['kota']; ?>"><br><br>
                Nomor Telepon<Br> <input type="number" id=inputtext name="nomorTelepon" value="<?php echo $data['nomorTelepon']; ?>"><br><br>
            </fieldset>

            <fieldset>
                <legend class="legend">Indentitas Kendaraan</legend>
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

                Type<Br>
                <select name="type" id="grade1">
                    <option value="">Pilih</option>
                    <option value="1" <?php if ($data['type'] == 1) echo 'selected="selected"'; ?>>Grade A</option>
                    <option value="2" <?php if ($data['type'] == 2) echo 'selected="selected"'; ?>>Grade B</option>
                    <option value="3" <?php if ($data['type'] == 3) echo 'selected="selected"'; ?>>Grade C</option>
                    <option value="4" <?php if ($data['type'] == 4) echo 'selected="selected"'; ?>>Grade D</option>
                </select><br><br>

                Warna<Br>
                <select name="warna" id="grade2">
                    <option value="">Pilih</option>
                    <option value="1" <?php if ($data['warna'] == 1) echo 'selected="selected"'; ?>>Hitam</option>
                    <option value="2" <?php if ($data['warna'] == 2) echo 'selected="selected"'; ?>>Putih</option>
                    <option value="3" <?php if ($data['warna'] == 3) echo 'selected="selected"'; ?>>Merah</option>
                </select><br><br>

                Harga
                <Br> <input type="number" id=inputtext name="harga" value="<?php echo $data['harga']; ?>"><br><br>

            </fieldset><br>

            <input id=submit class="inputButton" type="submit" name="store" value="UPDATE">

        </form>

    </div>
</div>
</body>
<script src="../script/script.js"></script>

<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>
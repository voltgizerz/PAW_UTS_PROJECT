<?php
include '../layout/dashboard.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM sparepart WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <div id="inputan">
        <h1 class="user">FORM PENJUALAN SPAREPART</h1><br>
        <form name="myFormSparepart" action="../proses/editSparepart.php" onsubmit="return (validateSparepart())" method="post">
            <fieldset>
                <legend class="legend">Identitas Penjual Sparepart</legend>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                Nama Lengkap
                <input type="text" id=inputtext name="namaPenjual" value="<?php echo $data['namaPenjual']; ?>"><br><br>

            </fieldset>

            <fieldset>
                <legend class="legend">Informasi Sparepart</legend>

                Nama Sparepart<br>
                <input type="text" id=inputtext name="namaSparepart" value="<?php echo $data['namaSparepart']; ?>"><br><br>

                Deskripsi Singkat
                <input type="textarea" id=inputtext name="deskripsi" value="<?php echo $data['deskripsi']; ?>"><br><br>

                Harga Jual&emsp;
                <input type="number" id=inputtext name="harga" value="<?php echo $data['id']; ?>"><br><br>

                Kondisi<br>
                <div class=jk>
                    <?php
                    if ($data['kondisi'] == 0) {
                        echo '<input type="radio" name="kondisi" id="baru" value="baru" checked="checked">Baru
                            <input type="radio" name="kondisi" id="bekas" value="bekas" >Bekas<br><br>';
                    } else if ($data['kondisi'] != 0) {
                        echo '<input type="radio" name="kondisi" id="baru" value="baru" >Baru
                            <input type="radio" name="kondisi" id="bekas" value="bekas" checked="checked">Bekas<br><br>';
                    } else {
                        echo '<input type="radio" name="kondisi" id="baru" value="baru">Baru
                            <input type="radio" name="kondisi id="bekas" value="bekas" >Bekas<br><br>';
                    }
                    ?>
                </div>
            </fieldset> <br>

            <input id=submit class="inputButton" type="submit" name="storeSp" value="UPDATE">
        </form>

    </div>
</div>
</body>
<script src="../script/script.js"></script>

<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>
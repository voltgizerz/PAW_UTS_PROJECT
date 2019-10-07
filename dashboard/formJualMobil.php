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
    <h1 class="user">FORM PENJUALAN MOBIL</h1><br>
    <form name="myFormJualMobil" action="../proses/createPenjualanMobil.php" onsubmit="return (validateJualMobil())" method="post">
      <fieldset>
        <legend class="legend">Identitas Penjual Mobil</legend>

        Nama Lengkap
        <input type="text" id=inputtext name="namaPenjual"><br><br>

      </fieldset>

      <fieldset>
        <legend class="legend">Indentitas Kendaraan</legend>
        Merk<br>
        <select name="merk" id="grade">
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
        Tahun&emsp;
        <input type="number" id=inputtext name="tahun"><br><br>

        Jarak Tempuh&emsp;&emsp;
        <input type="number" id=inputtext name="jarak"><br><br>

        Warna&emsp;&emsp;
        <input type="text" id=inputtext name="warna"><br><br>

        Harga&emsp;&emsp;
        <input type="number" id=inputtext name="harga"><br><br>

        Jenis Bahan Bakar<br>
        <input type="radio" name="jenis" id="bensin" value="0">Bensin<br>
        <input type="radio" name="jenis" id="listrik" value="1">Listrik<br>
        <input type="radio" name="jenis" id="diesel" value="2">Diesel<br><br>
      </fieldset> <br>

      <input id=submit class="inputButton" type="submit" name="storeMobil" value="Tambahkan">
    </form>
  </div>
  </body>
  <script src="../script/script.js"></script>
  <script>
    var elm = document.getElementById("bukuTab").classList.add("isActive")
  </script>

  </html>
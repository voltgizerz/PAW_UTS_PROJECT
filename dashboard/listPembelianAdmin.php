<?php
include '../layout/dashboardAdmin.php';
?>

<div id="dashboardData">
    <div id="cetak">
        <a target="_blank" href="../laporan/pdfPembelianAdmin.php" class="button4" style="background-color:#f14e4e">PRINT DATA TO PDF</a>
    </div>
    <table class="userListTable">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Nomor Handphone</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Manager</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM pembelian") or die(mysqli_error($con));
        if (isset($_SESSION['email'])) {
            $user = $_SESSION['email'];
            echo '<b style="color:red;font-family:calibri ;">
            WARNING!!! Hanya Admin yang boleh mengakses AREA ini!</b></a> dibawah ini adalah data semua Pembelian Mobil Richz Auto!
            </b> ';
        }
        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="11"> Tidak ada data Pembelian ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {

                echo
                    '<tr>
       <td> <center>' . $no . '</td>
        <td>' . $data['namaPembeli'] . '</td>
        <td>';
                if ($data['gender'] == 0) {
                    echo 'Laki-Laki';
                } else {
                    echo 'Perempuan';
                }
                echo '</td>
        <td>' . $data['alamat'] . '</td>
        <td> <center>' . $data['kota'] . '</td>
        <td> <center>' . $data['nomorTelepon'] . '</td>
        <td> <center>';
                if ($data['merk'] == 1) {
                    echo 'McLaren 540C';
                } else if ($data['merk'] == 2) {
                    echo 'McLaren 570S';
                } else if ($data['merk'] == 3) {
                    echo 'McLaren 650s';
                } else if ($data['merk'] == 4) {
                    echo 'Ferrari 458';
                } else if ($data['merk'] == 5) {
                    echo 'Ferrari F12';
                } else if ($data['merk'] == 6) {
                    echo 'Ferrari 288';
                } else if ($data['merk'] == 7) {
                    echo 'Lamborghini Uruz';
                } else if ($data['merk'] == 8) {
                    echo 'Lamborghini Hurican';
                } else if ($data['merk'] == 9) {
                    echo 'Lamborghini Aventador';
                }
                echo '</td>
         <td> <center>';
                if ($data['type'] == 1) {
                    echo 'Grade A';
                } else if ($data['type'] == 2) {
                    echo 'Grade B';
                } else if ($data['type'] == 3) {
                    echo 'Grade C';
                } else if ($data['type'] == 4) {
                    echo 'Grade D';
                }
                echo '</td>
        <td> <center>';
                if ($data['warna'] == 1) {
                    echo 'Hitam';
                } else if ($data['warna'] == 2) {
                    echo 'Putih';
                } else if ($data['warna'] == 3) {
                    echo 'Merah';
                }
                echo '</td>
                <td> <center>' . $data['harga'] . '</td>
               
        <td><a href="../dashboard/formEditPembelianMobilAdmin.php?id=' . $data['id'] . '"><div id="btnRed"><center>EDIT</div> </a>
        <a href="../proses/deletePembelianMobilAdmin.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin Ingin Hapus Pembelian?\')"><div id="btnBlue"><center>HAPUS</div> </a></td></tr> ';
                $no++;
            }
        }
        ?>
    </table>
</div>
</body>
<style>
    .userListTable {
        width: 100%;
    }

    table,
    tr,
    th {
        border: 1px;
        border: 1px solid green;
        border-collapse: collapse;
        background: #353535;
        color: white;
    }

    td {
        border: 1px;
        border: 1px solid green;
        background: burlywood;
        color: black;
    }
</style>
<script src="../script/script.js"></script>
<script>
    var elm = document.getElementById("listPeserta").classList.add("isActive")
</script>

</html>
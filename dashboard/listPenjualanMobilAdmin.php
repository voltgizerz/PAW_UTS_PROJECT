<?php
include '../layout/dashboardAdmin.php';
?>


<div id="dashboardData">
    <div id="cetak">
     <a target="_blank" href="../laporan/pdfPenjualanAdmin.php" class="button4" style="background-color:#f14e4e">PRINT DATA TO PDF</a>
        <a style="color:red;"> <b> WARNING!!! Hanya Admin yang boleh mengakses AREA ini!</b></a> dibawah ini adalah data semua Penjualan Mobil Richz Auto!.

    </div>
    <table class="userListTable">
        <tr>
            <th>No.</th>
            <th>Nama Penjual</th>
            <th>Merk</th>
            <th>Tahun</th>
            <th>Jarak Tempuh</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Jenis Bahan Bakar</th>
            <th>Manager</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM penjualanm ") or die(mysqli_error($con));
        
        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="8"> Tidak ada data ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                echo
                    '<tr>
        <td> <center>' . $no . '</td>
        <td>' . $data['namaPenjual'] . '</td>
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
        <td> <center>' . $data['tahun'] . '</td>
        <td> <center>' . $data['jarak'] . '</td>
        <td> <center>' . $data['warna'] . '</td>
        <td> <center>' . $data['harga'] . '</td>
        <td> <center>';
                if ($data['jenis'] == 0) {
                    echo 'Bensin';
                } else {
                    if ($data['jenis'] == 1) {
                        echo 'Listrik';
                    } else {
                        if ($data['jenis'] == 2) {
                            echo 'Diesel';
                        }
                    }
                }
                echo '</td>
        <td><a href="../dashboard/formJualMobilEditAdmin.php?id=' . $data['id'] . '"><div id="btnRed"><center>Edit</div> </a>
        <a href="../proses/deleteJualMobilAdmin.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin Ingin Hapus Penjualan Mobil?\')"><div id="btnBlue"><center>Hapus</div> </a></td></tr> ';
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
    var elm = document.getElementById("listBuku").classList.add("isActive")
</script>

</html>
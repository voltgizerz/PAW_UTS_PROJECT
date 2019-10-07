<?php
include '../layout/dashboard.php';
?>

<div id="dashboardData">
    <div id="cetak">
        <a target="_blank" href="../laporan/pdfSparepartUser.php" class="button4" style="background-color:#f14e4e">PRINT DATA TO PDF</a>
        DATA PENJUALAN SPAREPART MEMBER RICHZ AUTO
    </div>
    <table class="userListTable">
        <tr>
            <th>No</th>
            <th>Nama Penjual</th>
            <th>Nama Sparepart</th>
            <th>Deskripsi Singkat</th>
            <th>Harga Jual</th>
            <th>Kondisi</th>
            <th>Pengaturan</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM sparepart where cek='$_SESSION[email]' ") or die(mysqli_error($con));
        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="7"> Tidak ada data Penjualan Sparepart ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                echo
                    '<tr>
        <td><center>' . $no . '</td>
        <td>' . $data['namaPenjual'] . '</td>
        <td><center>' . $data['namaSparepart'] . '</td>
        <td><center>' . $data['deskripsi'] . '</td>
        <td><center>' . $data['harga'] . '</td>
        <td>';
                if ($data['kondisi'] == 'Baru') {
                    echo 'Baru';
                } else {
                    echo 'Bekas';
                }
                echo '</td>

        <td><a href="../dashboard/formEditSparepart.php?id=' . $data['id'] . '"><div id="btnRed"><center>Edit</div> </a>
        <a href="../proses/deletePenjualanSparepart.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin Ingin Hapus Penjualan?\')"><div id="btnBlue"><center>Hapus</div> </a></td></tr> ';
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
    var elm = document.getElementById("listSparepart").classList.add("isActive")
</script>

</html>
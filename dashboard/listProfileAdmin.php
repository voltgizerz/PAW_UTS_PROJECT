<?php
include '../layout/dashboardAdmin.php';
?>
<link rel="stylesheet" href="../css/style1.css">
<div id="dashboardData">
    <div id="cetak">
        <a target="_blank" href="../laporan/pdfMemberAdmin.php" class="button4" style="background-color:#f14e4e">PRINT DATA TO PDF</a>
        <a style="color:red;"> <b> WARNING!!! Hanya Admin yang boleh mengakses AREA ini!</b></a> dibawah ini adalah data semua member Richz Auto!.
    </div>
    <table class="userListTable">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nomor Handphone</th>
            <th>Status</th>
            <th>Manager</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM member") or die(mysqli_error($con));
        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="4"> Tidak ada data Member Terdaftar ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                echo
                    '<tr>
        <td><center>' . $no . '</td>
        <td>' . $data['nama'] . '</td>
        <td><center>' . $data['email'] . '</td>
        <td><center>' . $data['password'] . '</td>
        <td><center>' . $data['nomorHandphone'] . '</td>
        <td>';
                if ($data['status'] == 0) {
                    echo 'Belum Verifikasi';
                } else {
                    echo 'Sudah Verifikasi';
                }
                echo '</td>

        <td><a href="../dashboard/formeditProfileAdmin.php?id=' . $data['id'] . '"><div id="btnRed"><center>Edit</div> </a>
        <a href="../proses/deleteProfileAdmin.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin Ingin Hapus Member Ini?\')"><div id="btnBlue"><center>Hapus</div> </a></td></tr> ';
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
    var elm = document.getElementById("listUser").classList.add("isActive")
</script>

</html>
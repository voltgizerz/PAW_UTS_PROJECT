<?php
include '../layout/dashboard.php';
?>

<div id="dashboardData">
    <div id="cetak">
    <center><img src="../image/profile.png" width="112" height="100">
        <h1><center>DATA DIRI MEMBER RICHZAUTO<center></h1>
    </div>
    <table class="userListTable">
        <tr>
            <th>Identitas</th>
            <th>Isi Data</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM member where email='$_SESSION[email]' ") or die(mysqli_error($con));
        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="2"> Tidak ada data Pembelian ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                echo
                    '<tr>
        <td>Nama Lengkap</td>
        <td><center>' . $data['nama'] . '</td>
        </tr>
        <tr>
        <td>Email Terdaftar</td>
        <td><center>' . $data['email'] . '</td>
        </tr>
        <tr>
        <td>Password Terdaftar</td>
        <td><center>' . $data['password'] . '</td>
        </tr>
        <tr>
        <td>Nomor Handphone</td>
        <td><center>' . $data['nomorHandphone'] . '</td>
        </tr>
        
        <tr>
        <td>Pengaturan Akun</td>
        <td><a href="../dashboard/formeditProfile.php?id=' . $data['id'] . '"><div id="btnRed"><center>Edit Profile</div> </a>
        <a href="../proses/deleteProfile.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin Ingin Hapus Profile?\')"><div id="btnBlue"><center>Hapus Akun</div> </a></td></tr> ';
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
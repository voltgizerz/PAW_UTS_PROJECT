<?php 
session_start();
if(!$_SESSION['isLoginAdmin']){
    header("location: ../login_page_admin.php");
}
else{
    include("../db.php");
}

echo'
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../css/style1.css">
     <title>Dashboard</title>
 </head>
 <body>
     <div class="backgroundAll"></div>
     <div id="sidebar">
         <div class="sideheader">
             <div class="name">
                 <h1><a href="../index.php"><img src="../image/logo.png" width="60" height"50"></a></h1>
             </div>
             <div class="hamburgerbar">
                 <a href="#" onClick="hamburgerFunc()">
                     <div>
                         <div class="bar topbar"></div>
                         <div class="bar middlebar"></div>
                         <div class="bar bottombar"></div>
                     </div>
                 </a>
             </div>
            </div>
             <div class="sidebody">
                 <div class="sidebodypart">
                     <ul>
                        <li id="dashboardTab"><a href="../dashboard/indexAdmin.php"><p>Dashboard</p></a></li>
                        <li id="listMember"><a href="../dashboard/listProfileAdmin.php"><img src="../image/list.png" width="30px" height="30px"><p>&nbspList Member Richz Auto</p></a></li>  
                        <li id="listPeserta"><a href="../dashboard/listPembelianAdmin.php"><img src="../image/list.png" width="30px" height="30px"><p>&nbspList Pembelian Mobil</p></a></li>  
                        <li id="listBuku"><a href="../dashboard/listPenjualanMobilAdmin.php"><img src="../image/list.png" width="30px" height="30px"><p>&nbspList Penjualan Mobil</p></a></li>  
                        <li id="listSparepart"><a href="../dashboard/listSparepartAdmin.php"><img src="../image/list.png" width="30px" height="30px"><p>&nbspList Penjualan Sparepart</p></a></li>  
                           
                    </ul>
                 </div>
         </div>
         </div>

         <div id="navbar">
             <div class="searchbar">
                <input id="searchInput" type="text" placeholder="Search Data" onkeyup="displaySearch(event)">
            </div>
            <div class="barinfo">
            <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                  
                    <a href="../proses/prosesLogoutAdmin.php">Logout</a>
                  
                </div>
                </div>
             </div>
         </div>
            <script src="../script/script.js"></script>
         </div>'
?>
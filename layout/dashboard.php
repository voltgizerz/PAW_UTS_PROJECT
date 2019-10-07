<?php 
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
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
                        <li id="dashboardTab"><a href="../dashboard/index.php"><p>Dashboard</p></a></li>
                        <li id="userTab"><a href="../dashboard/formBeliMobil.php"><img src="../image/buy.png" width="30px" height="30px"> <p>&nbspBeli Mobil</p></a></li>
                        <li id="listPeserta"><a href="../dashboard/listPembelianMobil.php"><img src="../image/list.png" width="30px" height="30px"> <p>&nbspList Pembelian Mobil</p></a></li>  
                        <li id="bukuTab"><a href="../dashboard/formJualMobil.php"><img src="../image/jual.png" width="30px" height="30px"><p>&nbspJual Mobil</p></a></li>
                        <li id="listBuku"><a href="../dashboard/listPenjualanMobil.php"><img src="../image/list.png" width="30px" height="30px"> <p>&nbspList Penjualan Mobil</p></a></li>  
                        <li id="sparepartTab"><a href="../dashboard/formJualSparepart.php"><img src="../image/jual.png" width="30px" height="30px"><p>&nbspJual Sparepart</p></a></li>
                        <li id="listSparepart"><a href="../dashboard/listSparepart.php"><img src="../image/list.png" width="30px" height="30px"> <p>&nbspList Penjualan Sparepart</p></a></li>  
                    </ul>
                 </div>
         </div>
         </div>
         
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
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
                    <a href="../dashboard/listProfile.php">Profile</a>
                    <a href="../proses/prosesLogout.php">Logout</a>
                  
                </div>
                </div>
             </div>
         </div>
            <script src="../script/script.js"></script>
         </div>'
?>
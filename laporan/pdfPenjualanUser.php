

<?php
session_start();
$servername    = "127.0.0.1";
$username    = "root";
$password    = "";
$dbname        = "tb_paw_b_kel6";

$conn    = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Koneksi library FPDF
require('../learn/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l', 'mm', 'A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial', 'B', 12);
// Membuat string
$pdf->Cell(180, 7, 'LIST PENJUALAN MOBIL ANDA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(180, 7, '2019/2020', 0, 1, 'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 10, 'ID', 1, 0,'C');
$pdf->Cell(50, 10, 'Nama Penjual', 1, 0,'C');
$pdf->Cell(15, 10, 'Merk', 1, 0,'C');
$pdf->Cell(40, 10, 'Jarak Tempuh', 1, 0,'C');
$pdf->Cell(30, 10, 'Harga', 1, 0,'C');
$pdf->Cell(25, 10, 'Bahan Bakar', 1, 1,'C');

$pdf->SetFont('Arial', '', 10);
$query = mysqli_query($conn, "SELECT * FROM penjualanm where cek='$_SESSION[email]'");
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 10, $row['id'], 1, 0,'C');
    $pdf->Cell(50, 10, $row['namaPenjual'], 1, 0);
    $pdf->Cell(15, 10, $row['merk'], 1, 0,'C');
    $pdf->Cell(40, 10, $row['jarak'], 1, 0,'C');
    $pdf->Cell(30, 10, $row['harga'], 1, 0,'C');
    if($row['jenis']==0)
    {
        $pdf->Cell(25, 10, 'Bensin', 1, 1,'C');
    }else if($row['jenis']==1){
        $pdf->Cell(25, 10, 'Listrik', 1, 1,'C');
    }else{
        $pdf->Cell(25, 10,'Diesel', 1, 1,'C');
    }
}

$pdf->Output('D', 'LaporanJualMobil.pdf');

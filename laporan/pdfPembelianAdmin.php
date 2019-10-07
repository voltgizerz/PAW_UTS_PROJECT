<?php

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
$pdf->SetFont('Arial', 'B', 16);
// Membuat string
$pdf->Cell(300, 7, 'LIST MEMBER MELAKUKAN PEMBELIAN MOBIL', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(300, 7, '2019/2020', 0, 1, 'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'ID', 1, 0,'C');
$pdf->Cell(70, 6, 'Nama Pembeli', 1, 0);
$pdf->Cell(20, 6, 'Gender', 1, 0,'C');
$pdf->Cell(30, 6, 'Alamat', 1, 0);
$pdf->Cell(40, 6, 'kota', 1, 0,'C');
$pdf->Cell(30, 6, 'Nomor Telepon', 1, 0,'C');
$pdf->Cell(20, 6, 'Merk', 1, 0,'C');
$pdf->Cell(20, 6, 'Type', 1, 0,'C');
$pdf->Cell(20, 6, 'Warna', 1, 0,'C');
$pdf->Cell(25, 6, 'Harga', 1, 1,'C');

$pdf->SetFont('Arial', '', 10);
$query = mysqli_query($conn, "SELECT * FROM pembelian");
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 6, $row['id'], 1, 0,'C');
    $pdf->Cell(70, 6, $row['namaPembeli'], 1, 0);
    if($row['gender']==0)
    {
        $pdf->Cell(20, 6, 'L', 1, 0,'C');
    }else{
        $pdf->Cell(20, 6, 'P', 1, 0,'C');
    }
   
    $pdf->Cell(30, 6, $row['alamat'], 1, 0);
    $pdf->Cell(40, 6, $row['kota'], 1, 0,'C');
    $pdf->Cell(30, 6, $row['nomorTelepon'], 1, 0,'C');
    $pdf->Cell(20, 6, $row['merk'], 1, 0,'C');
    $pdf->Cell(20, 6, $row['type'], 1, 0,'C');

    if($row['warna']==1)
    {
        $pdf->Cell(20, 6, 'Hitam', 1, 0,'C');
    }else if($row['gender']==2){
        $pdf->Cell(20, 6, 'Putih', 1, 0,'C');
    } else {
        $pdf->Cell(20, 6, 'Merah', 1, 0,'C');
    }
 
    $pdf->Cell(25, 6, $row['harga'], 1, 1,'C');
}

$pdf->Output('D', 'LaporanBeliMobil.pdf');

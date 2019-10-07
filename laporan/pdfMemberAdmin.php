

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
$pdf->SetFont('Arial', 'B', 12);
// Membuat string
$pdf->Cell(180, 7, 'LIST MEMBER YANG MELAKUKAN REGISTRASI RICHZ AUTO', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(180, 7, '2019/2020', 0, 1, 'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 10, 'ID', 1, 0);
$pdf->Cell(50, 10, 'Nama', 1, 0);
$pdf->Cell(60, 10, 'Email', 1, 0);
$pdf->Cell(40, 10, 'Nomor Handphone', 1, 0);
$pdf->Cell(25, 10, 'Status', 1, 1);


$pdf->SetFont('Arial', '', 10);
$query = mysqli_query($conn, "SELECT * FROM member");
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 10, $row['id'], 1, 0);
    $pdf->Cell(50, 10, $row['nama'], 1, 0);
    $pdf->Cell(60, 10, $row['email'], 1, 0);
    $pdf->Cell(40, 10, $row['nomorHandphone'], 1, 0);
    $pdf->Cell(25, 10, $row['status'], 1, 1);
}

$pdf->Output('D', 'LaporanSemuaMember.pdf');

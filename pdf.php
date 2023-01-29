<?php

require('assets/plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Hotel Oye',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(25,6,'ID Pemesanan',1,0,'C');
$pdf->Cell(20,6,'NO Kamar',1,0,'C');
$pdf->Cell(20,6,'ID USER',1,0,'C');
$pdf->Cell(40,6,'Tanggal Checkin',1,0,'C');
$pdf->Cell(40,6,'Tanggal Checkout',1,0,'C');
$pdf->Cell(40,6,'Harga',1,1,'C');

$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
include 'koneksi.php';
$no=1;
$jk='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($koneksi, "select * from pemesanan ");
while ($data = mysqli_fetch_array($hasil)){

    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(25,6,$data['id_pemesanan'],1,0);
    $pdf->Cell(20,6,$data['no_kamar'],1,0);
    $pdf->Cell(20,6,$data['user_id'],1,0);
    $pdf->Cell(40,6,$data['tanggal_checkin'],1,0);
    $pdf->Cell(40,6,$data['tanggal_checkout'],1,0);
    $pdf->Cell(40,6,$data['harga'],1,1);
    $no++;
}

$pdf->Output();
?>
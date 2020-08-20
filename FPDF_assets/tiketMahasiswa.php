<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "proyek_psw2";
 
$conn = mysqli_connect($host, $user, $pass,$dbnm);
if ($conn) {

}
else
{
	die ("Server MySQL tidak terhubung karena ".mysql_error());
}
//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT no_kursi,tiket.kode_acara,tiket.NIM,tanggal_kegiatan,nama_kegiatan,jam_mulai,
          tema_kegiatan,lokasi,deskripsi,No_tiket FROM tiket INNER JOIN acara 
          WHERE acara.kode_acara = tiket.kode_acara AND nim = '11318015' AND tiket.kode_acara = 'HK01';";
$sql = mysqli_query($conn,$query);
$data = array();
$row = mysqli_fetch_assoc($sql);
 
// variabel penampung semua data tiket
$nama_acara = $row['nama_kegiatan'];
$tanggal = $row['tanggal_kegiatan'];
$nim  = $row['NIM'];
$kode_acara = $row['kode_acara'];
$jam = $row['jam_mulai'];
$tema = $row['tema_kegiatan'];
$lokasi = $row['lokasi'];
$no_kursi = $row['no_kursi'];


#sertakan library FPDF dan bentuk objek
require_once ("fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
 
#tampilkan judul laporan

$pdf->SetFillColor(255,0,0); 
$pdf->SetTextColor(255);
$pdf->SetFont('Arial','B','28');
$pdf->Cell(150,20 , $nama_acara, '0', 1, 'C',true);
 
#buat header tabel
// $pdf->SetTextColor(255); //warna text
$pdf->SetDrawColor(0,0,0); //warna border
$pdf->SetFont('Arial','','14');
$pdf->SetTextColor(0);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Kode Acara ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$kode_acara, '0', 1, 'L',true);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Tanggal Pelaksanaan ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$tanggal, '0', 1, 'L',true);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Pemilik ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$nim, '0', 1, 'L',true);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Jam Pelaksanaan ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$jam, '0', 1, 'L',true);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Tema Acara ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$tema, '0', 1, 'L',true);

$pdf->SetFillColor(80,81,77);    //warna background
$pdf->Cell(50,10 ,"Lokasi Acara ", '0', 0, 'L',true);
$pdf->SetFillColor(136,249,255); 
$pdf->Cell(100,10 ," : ".$lokasi, '0', 1, 'L',true);

$pdf->Image('BEM.png',"115","38","40","40");

// $pdf->Ln();

$pdf->SetFillColor(0,0,0); 
$pdf->SetTextColor(255);
$pdf->SetFont('Arial','B','28');

// $pdf->SetFillColor(80,81,77);    //warna background
// $pdf->Cell(50,20 ,"No Kursi ", '0', 0, 'L',true);
$pdf->SetFillColor(136,200,123); 
$pdf->Cell(150,20 ,"No Kursi : ".$no_kursi, '0', 1, 'C',true);

// foreach ($header as $kolom) {
// 	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
// }
//$pdf->Ln(); //line baru
 
#output file PDF
$pdf->Output();
?>
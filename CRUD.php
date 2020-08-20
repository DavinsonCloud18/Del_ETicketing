<?php
require_once (dirname(__FILE__).'/commons/database.php');

$url = $_GET['aksi'];
$data = explode("#",$url);

if($data[0] == 'edit'){
    $kode = $_POST['kode_acara'];
    $nama = $_POST['nama_kegiatan'];
    $tema = $_POST['tema'];
    $gambar = $_FILES['gambar']['name'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $kuota = $_POST['kuota']; 
    extract($_POST);
    $desc = $_POST['deskripsi'];
    //$deskripsi = $_POST['deskripsi'];
    
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "images/".$gambar;


    if($_FILES['gambar']['type'] == 'image/jpeg' || $_FILES['gambar']['type'] == 'image/png'){
        if($_FILES['gambar']['size'] < 1000000){
                if(move_uploaded_file($tmp_file,$path)){
                    $do = EditAcara($kode,$nama,$tema,$gambar,$tanggal,$jam,$lokasi,$kuota,$desc);
                    if($do > 0){
                        echo "Acara Berhasil diubah";
                    }
                    else{
                        echo "Acara gagal diubah";
                    }
                }
                else{
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                } 
            }
            else{
            echo "Ukuran gambar harus < 1MB !!!";
            }
        }
    else{
        echo "tipe data gambar harus jpg/jpeg/png !!!";
    }
    header('location: Acara.php');
    // echo $kode." ".$nama." ".$tema." ".$gambar." ".$tanggal." ".$jam." ".$lokasi." ".$kuota." ".$desc;
}
else if($data[0] == 'buat'){
    $kode = $_POST['kode_acara'];
    $nama = $_POST['nama_kegiatan'];
    $tema = $_POST['tema'];
    $gambar = $_FILES['gambar']['name'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $kuota = $_POST['kuota'];
    extract($_POST);
    $desc = $_POST['deskripsi'];
    //$deskripsi = $_POST['deskripsi'];
    
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "images/".$gambar;


    if($_FILES['gambar']['type'] == 'image/jpeg' || $_FILES['gambar']['type'] == 'image/png'){
        if($_FILES['gambar']['size'] < 1000000){
                if(move_uploaded_file($tmp_file,$path)){
                    $do = CreateAcara($kode,$nama,$tema,$gambar,$tanggal,$jam,$lokasi,$kuota,$desc);
                    if($do > 0){
                        echo "Acara Berhasil dibuat";
                    }
                    else{
                        echo "Acara gagal dibuat";
                    }
                }
                else{
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                } 
            }
            else{
            echo "Ukuran gambar harus < 1MB !!!";
            }
        }
    else{
        echo "tipe data gambar harus jpg/jpeg/png !!!";
    }
    header('location: Acara.php');
    // echo $kode." ".$nama." ".$tema." ".$gambar." ".$tanggal." ".$jam." ".$lokasi." ".$kuota." ".$desc;
}

// else if($data[0] == 'lihat'){
//     $kode_acara = $data[1];
//     $acara = GetAcara($kode_acara);


// }
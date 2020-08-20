<?php
    require_once 'commons/database.php';
    $kode = $_GET['id'];
    $nim = $_GET['nim'];

    $kuota = GetKuota($kode);
    $tiket_terpakai = jumlahTiketTerpakai($kode);
    $data = cekTiket($kode,$nim);
    if($kuota == $tiket_terpakai){
        echo "<script>alert('MAAF ACARA SUDAH PENUH'); window.location = 'DetailAcara2.php?id=$kode'; </script>";
    }
    else{
        if($data < 1){
            $buat_tiket = CreateTicket($kode,$nim);
            if($_SESSION['id_role'] == 2){
                if($buat_tiket > 0){
                    echo "<script>alert('TIKET BERHASIL DIBUAT'); window.location = 'DetailAcara2.php?id=$kode'; </script>";
                }
                else{
                    echo "<script>alert('TIKET GAGAL DIBUAT'); window.location = 'DetailAcara2.php?id=$kode'; </script>";
                }
            }
            // else if($_SESSION['id_role'] == 1){
                
                // }
                // header('location: DetailAcara2.php?id='.$kode);
        }
        else{
            echo "<script>alert('TIKET SUDAH PERNAH DIBUAT'); window.location = 'DetailAcara2.php?id=$kode'; </script>";
        }
    }
    // else{
    //     header('location: DetailAcara.php?id='.$kode);
    // }
?>
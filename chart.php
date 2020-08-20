<?php 
    require_once(dirname(__FILE__).'/commons/database.php');
    $data = array();
    $kode_acara = $_GET['id'];
    $kuota = GetKuota($kode_acara);
    // echo $kode_acara;
    $tiket_terpakai = jumlahTiketTerpakai($kode_acara);
    $tiket_tersisa = $kuota - $tiket_terpakai;

    $degree_tersisa = 360;
    $degree = ($tiket_terpakai/$kuota)*360;
    $percent = round(($tiket_terpakai/$kuota)*100,2);

    $myImage = ImageCreate(150,150);
    $white = ImageColorAllocate($myImage, 245, 245, 245);
    $red = ImageColorAllocate($myImage, 255, 0, 0);
    $blue = ImageColorAllocate($myImage, 0, 0, 255);

    if($degree != 0){
        ImageFilledArc($myImage, 75,75,120,120,0,$degree_tersisa, $red, IMG_ARC_PIE);
        ImageFilledArc($myImage, 75,75,120,120,0,$degree, $blue, IMG_ARC_PIE);
    }
    else if($degree == 0){
        ImageFilledArc($myImage, 75,75,120,120,0,$degree_tersisa, $red, IMG_ARC_PIE);
    }

    ImagePng($myImage, "images/png.png");
    ImageDestroy($myImage);

    $tersisa = ImageCreate(20,20);
    $red1 = ImageColorAllocate($tersisa, 255, 0, 0); 
    ImagePng($tersisa, "images/tersisa.png");
    ImageDestroy($tersisa);

    $terpakai = ImageCreate(20,20);
    $blue1 = ImageColorAllocate($terpakai, 0, 0, 255); 
    ImagePng($terpakai, "images/terpakai.png");
    ImageDestroy($terpakai);
 ?>
 <table>
    <tr>
        <td><img src='images/png.png'></td>
    </tr>
    <tr>
        <td><img src='images/tersisa.png'>&nbspTersisa = <?= $tiket_tersisa; ?>&nbsp(<?= 100 - $percent ?>%)</td>
    </tr>
    <tr>
        <td><img src='images/terpakai.png'>&nbspTerpakai = <?= $tiket_terpakai; ?>&nbsp(<?= $percent ?>%)</td>
    </tr>
 </table>
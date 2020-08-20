<?php
    require_once(dirname(__FILE__).'/commons/database.php');

    $kode_acara = $_GET['id'];
    DeleteAcara($kode_acara);
    header('location: Acara.php');
?>
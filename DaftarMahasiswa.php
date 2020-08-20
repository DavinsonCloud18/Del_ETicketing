<!DOCTYPE html>
<html>
    <head>
        <?php require_once "commons/database.php" ?>
        <title>Acara</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <style>
        /* div{
            border:1px solid black;
        } */
        th{
            text-align: center;
            height:20px;
        }
    </style>
    <body style="background-image: url('images/uri.jpg')">

        <div class="container" >
            <?php require_once(dirname(__FILE__).'/commons/header.php'); ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once(dirname(__FILE__).'/commons/menu.php'); ?>

            <?php
                $semuaMahasiswa = GetAllMahasiswa();
                $semuaAkun = GetAllAkun();
                $i = 1;
            ?>


                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width:100%;text-align:center;margin-top:20px;" class="data-mahasiswa" border="1">
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                </tr>
                                <?php  foreach($semuaMahasiswa as $peserta){ ?>
                                <tr>
                                    <td><?= $i; ?>
                                    <td><?= $peserta['NIM'] ?></td>
                                    <td><?= $peserta['Nama'] ?></td>
                                    <td><?= $peserta['Prodi'] ?></td>
                                </tr>
                                <?php $i = 1 + $i; 
                                }?>
                                <tr>
                                    <td>
                                        <center>
                                                <a href="DaftarTiket.php?id=<?= $kode_acara ?>" class="glyphicon glyphicon-plus thumbnail" style="color:black;font-size:5px;margin-bottom:0px">
                                                </a>
                                        </center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>     
                    </div>
                </div>
                <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
            </div>
        </div>
    </body>

</html>

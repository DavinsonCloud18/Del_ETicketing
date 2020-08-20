<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'commons/database.php'; ?>
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
            <?php require_once(dirname(__FILE__).'/commons/menuMaha.php'); ?>

            <?php
                $kode_acara = $_GET['id'];
                $acara = GetAcara($kode_acara);
                $SemuaPeserta = getAllPeserta($kode_acara);
                $i = 1;
            ?>


                <div class="col-md-9">
                    <div class="row">
                        <a href="Dashboard_Mahasiswa.php">
                            <div class="btn btn-success" style="margin:20px">
                                <span class="glyphicon glyphicon-arrow-left"></span>
                                Kembali
                            </div>
                        </a>
                        <center>
                        <div class="thumbnail" style="width:50%;height:100%;">
                        <img src="images/<?= $acara['gambar']; ?>" >
                        </center>
                        <div class="col-md-8">
                            <div class="caption">
                                <table>
                                    <tr>
                                        <td>
                                            Kode Acara
                                        </td>
                                        <td>
                                            : <?= $acara['kode_acara']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nama Acara
                                        </td>
                                        <td>
                                            : <?= $acara['nama_kegiatan']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tema Acara
                                        </td>
                                        <td>
                                        : <?= $acara['tema_kegiatan']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tanggal
                                        </td>
                                        <td>
                                        : <?= $acara['tanggal_kegiatan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jam
                                        </td>
                                        <td>
                                        : <?= $acara['jam_mulai']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lokasi
                                        </td>
                                        <td>
                                        : <?= $acara['lokasi']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kuota
                                        </td>
                                        <td>
                                        : <?= $acara['kuota'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Deskripsi 
                                        </td>
                                        <td>
                                        : <?= $acara['deskripsi'] ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <?php require_once 'chart.php'; ?>
                            </div>
                        </div>
                        
                            <table style="width:100%;text-align:center" class="data-mahasiswa" border="1">
                                <tr>
                                    <th>No Tiket</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>No_kursi</th>
                                </tr>
                                <?php  foreach($SemuaPeserta as $peserta){ ?>
                                <tr>
                                    <td><?= $peserta['No_tiket']; ?></td>
                                    <td><?= $peserta['NIM'] ?></td>
                                    <td><?= $peserta['Nama'] ?></td>
                                    <td><?= $peserta['Prodi'] ?></td>
                                    <td><?= $peserta['no_kursi'] ?></td>
                                </tr>
                                <?php $i = 1 + $i; 
                                }?>
                                <tr>
                                    <td>
                                        <center>
                                                <a href="DaftarTiket_process.php?id=<?= $kode_acara ?>&nim=<?= $_SESSION['NIM']; ?>" 
                                                    class="glyphicon glyphicon-plus thumbnail" 
                                                    style="color:black;font-size:5px;margin-bottom:0px">
                                                </a>
                                        </center>
                                    </td>
                                    <td colspan="4"> <h4>Klik Tombol (+) disamping untuk mengikuti Acara</h4> </td>
                                </tr>
                            </table>           
                    </div>
                </div>
                <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
            </div>
        </div>
        
    </body>

</html>


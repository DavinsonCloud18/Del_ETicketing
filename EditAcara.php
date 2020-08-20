<!DOCTYPE html>
<html>
    <head>
        <title>Edit Acara</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <style>
    </style>
    <body style="background-image: url('images/uri.jpg')">
        <div class="container" >
        <?php require_once(dirname(__FILE__).'/commons/database.php'); ?>
            <?php require_once(dirname(__FILE__).'/commons/header.php'); ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once(dirname(__FILE__).'/commons/menu.php'); ?>
                <a href="DetailAcara.php?id=<?= $_GET['id']; ?>">
                    <div class="btn btn-success" style="margin:20px">
                        <span class="glyphicon glyphicon-arrow-left"></span>
                        Kembali
                    </div>
                </a>
            <div class="col-md-9" style="padding: 20px;min-height:600px">
                <p style="margin-bottom:0px;font-size: 30px;"><b>Edit Acara</b></p><br>
                <p style="margin-top:0px;font-size:16px">Perbaiki isi form berikut dengan benar</p><br>
                <?php 
                    $kode_acara = $_GET['id'];
                    $data = GetAcara($kode_acara);
                    //$hasil = mysqli_fetch_array($data,MYSQLI_ASSOC);
                ?>
                <form class="box-shadow" method="post" enctype="multipart/form-data" style="padding:10px;background-color:white" action="CRUD.php?aksi=edit">
                    <table >
                        <tr>
                            <td>Kode Acara</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="<?= $data['kode_acara']; ?>" name="kode_acara" required ></td>
                        </tr>
                        <tr>
                            <td>Nama Kegiatan</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="<?= $data['nama_kegiatan']; ?>" name="nama_kegiatan" required></td>
                        </tr>
                        <tr>
                            <td>Tema</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="<?= $data['tema_kegiatan']; ?>" name="tema" required></td>
                        </tr>
                        <tr>
                            <td>Upload Gambar</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" name="gambar"  value="<?= $data['gambar']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal mulai</td>
                        </tr>
                        <tr>
                            <td><input type="date" style="padding:9px;" value="<?= $data['tanggal_kegiatan']; ?>" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td>Jam Mulai</td>
                        </tr>
                        <tr>
                            <td><input type="time" style="padding:9px;" value ="<?= $data['jam_mulai']; ?>" name="jam" required></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                        </tr>
                        <tr>
                            <td><input type="text" style="padding:9px;" value ="<?= $data['lokasi']; ?>" name="lokasi" required> </td>
                        </tr>
                        <tr>
                            <td>Kapasitas Peserta</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Contoh: 45" value="<?= $data['kuota']; ?>" name="kuota" required></td>
                        </tr>
                        <tr>
                            <td>Penjelasan Singkat Acara</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea style="font-size:14px;background-color:whitesmoke;width:80%" name="deskripsi" required>
                                <?= $data['deskripsi']; ?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="submit-button box-shadow">Selesai</button></td>
                        </tr>
                    </table>
                    
                </form>
            </div>
            </div>
            <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
        </div>
        
    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Buat Acara</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <body style="background-image: url('images/uri.jpg')">
        <div class="container">
            <?php require_once(dirname(__FILE__).'/commons/header.php'); ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once(dirname(__FILE__).'/commons/menu.php'); ?>
            <div class="col-md-9 box-shadow"" style="padding: 50px;min-height:600px">
                <p style="margin-bottom:0px;font-size: 30px;"><b>Buat Acara</b></p><br>
                <p style="margin-top:0px;font-size:16px">Isi form berikut dengan benar</p><br>
                    
                <form class="box-shadow" method="post" enctype="multipart/form-data" style="padding:10px;background-color:white" action="CRUD.php?aksi=buat">
                    <table >
                        <tr>
                            <td>Kode Acara</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="kode_acara" required></td>
                        </tr>
                        <tr>
                            <td>Nama Kegiatan</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nama_kegiatan" required></td>
                        </tr>
                        <tr>
                            <td>Tema</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tema" required></td>
                        </tr>
                        <tr>
                            <td>Upload Gambar</td>
                        </tr>
                        <tr>
                            <td><input type="file" style="padding:6px;" name="gambar" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal mulai</td>
                        </tr>
                        <tr>
                            <td><input type="date" style="padding:9px;" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td>Jam mulai</td>
                        </tr>
                        <tr>
                            <td><input type="time" style="padding:9px;" name="jam" required></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="lokasi" required></td>
                        </tr>
                        <tr>
                            <td>Kapasitas Peserta</td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Contoh: 45" name="kuota" required></td>
                        </tr>
                        <tr>
                            <td>Penjelasan Singkat Acara</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea width="400" style="font-size:14px;padding:10px;background-color:whitesmoke" name="deskripsi"></textarea>
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
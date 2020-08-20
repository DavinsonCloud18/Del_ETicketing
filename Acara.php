<!DOCTYPE html>
<html>
    <?php
    require_once 'commons/database.php';
        if(!isset($_SESSION['logged_in'])){
            header('location: index.php');
        }
    ?>
    <head>
        <title>Acara</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <style>
        /* div{
            border:1px solid black;
        } */
    </style>
    <body style="background-image: url('images/uri.jpg')">

        <div class="container" >
            <?php require_once 'commons/header.php'; ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once 'commons/menu.php'; ?>
            <?php
                $AllAcara = GetAllAcara();
                // echo $_SESSION['logged_in']." muahahahaah";
            ?>

            <!-- <table  style="margin:5px;"> -->
                <div class="col-md-9">
                <div class="row">
                    <?php foreach($AllAcara as $acara) {  ?>
                  <div class="col-md-4">
                        <div class="thumbnail" style="margin-top:20px;">
                        <img src="images/<?= $acara['gambar'] ?>" class="gambar-acara" style="width:240px;height:240px;" title="Kopi Sore IT Del" alt="GambarAcara">
                        </div>
                            <h3 style="text-align:center;margin-top:-10px;"><?= $acara['nama_kegiatan'] ?></h3>
                        <center>
                            <a href="DetailAcara.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-success btn-lihat" style="color:white;">
                                <span class="glyphicon glyphicon-eye-open btn-acara" ></span>lihat
                                </button>
                            </a>
                            <a href="EditAcara.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-warning btn-lihat" style="color:white;">
                                <span class="glyphicon glyphicon-pencil btn-acara" ></span>Edit
                                </button>
                            </a>
                            <a href="DeleteAcara.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-danger btn-lihat" style="color:white;" onclick="return confirm('Apakah anda ingin menghapus acara ini?')">
                                <span class="glyphicon glyphicon-trash btn-acara" ></span>Hapus
                                </button>
                            </a>
                        </center>
                  </div>                          <?php } ?>
                    <div class="col-md-12">
                        <a href="BuatAcara.php">
                        <div class="thumbnail btn-plus" style="margin-top:20px;color:black;padding-top:10px">
                            <center>
                                <span class="glyphicon glyphicon-plus"></span>
                            </center>
                        </div>
                        </a>
                    </div>
                </div>
                </div>
     
            </div>
            <?php require_once 'commons/footer.php'; ?>

        </div>
        
    </body>

</html>
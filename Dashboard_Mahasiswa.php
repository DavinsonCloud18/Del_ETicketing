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
        .data-mahasiswa td{
            text-align: center;
        }
    </style>
    <body style="background-image: url('images/uri.jpg')">

        <div class="container" >
            <?php require_once(dirname(__FILE__).'/commons/header.php');?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php 

                require_once(dirname(__FILE__).'/commons/menuMaha.php');
                $AllAcara = GetAllAcara(); 
            ?>
            <!-- <table  style="margin:5px;"> -->
                <div class="col-md-9">
                    <h2 style="text-align:center">List Acara BEM Institut Teknologi Del</h2> 
                <div class="row">
                <?php foreach($AllAcara as $acara) {  ?>
                    <div class="col-md-4">
                        <div class="thumbnail" style="margin-top:20px;">
                        <img src="images/<?= $acara['gambar'] ?>" class="gambar-acara" style="width:240px;height:240px;" title="Kopi Sore IT Del" alt="GambarAcara">
                        </div>
                            <h3 style="text-align:center;margin-top:-10px;"><?= $acara['nama_kegiatan'] ?></h3>
                        <center>
                            <a href="DetailAcara2.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-info btn-lihat" style="color:white;">
                                <span class="glyphicon glyphicon-eye-open btn-acara" ></span>lihat
                                </button>
                            </a>
                            <!-- <a href="EditAcara.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-warning btn-lihat" style="color:white;">
                                <span class="glyphicon glyphicon-pencil btn-acara" ></span>Edit
                                </button>
                            </a>
                            <a href="DeleteAcara.php?id=<?=$acara['kode_acara'];?>">
                                <button type="button" class="btn btn-danger btn-lihat" style="color:white;">
                                <span class="glyphicon glyphicon-trash btn-acara" ></span>Hapus
                                </button>
                            </a> -->
                        </center>
                    </div>                          
                <?php } ?>
                </div>
                </div>
     
            </div>
            <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
        </div>
        
    </body>

</html>
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
       th{
           font-size:16px;
           border-bottom: 2px solid black;
       }
       th,td{
           text-align: center;
       }
    </style>
    <body style="background-image: url('images/uri.jpg')">

        <div class="container" >
            <?php require_once 'commons/header.php'; ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once 'commons/menuMaha.php'; ?>
            <?php
                $AllTiket = GetAllTiketMahasiswa($_SESSION['NIM']);
                // echo $_SESSION['logged_in']." muahahahaah";
            ?>

            <!-- <table  style="margin:5px;"> -->
                <div class="col-md-9">
                <div class="row"> 
                    <center>
                    <table style="width:90%;margin-top:25px;">
                        <tr>
                            <th>No Tiket</th>
                            <th>NIM</th>
                            <th>Kode Acara</th>
                            <th>No Kursi</th>
                            <th  style="border-bottom:none"></th>
                        </tr>
                        <?php 
                            $id = 1;
                            foreach($AllTiket as $tiket){ 
                                if($id%2==0){
                                    $color = '#FF686C';
                                }
                                else{
                                    $color = '#ffacac';
                                }?>
                            <tr>
                                <td id="<?= $id; ?>" style="background-color:<?= $color; ?>"><?= $tiket['No_tiket']; ?></td>
                                <td id="<?= $id; ?>" style="background-color:<?= $color; ?>"><?= $tiket['NIM']; ?></td>
                                <td id="<?= $id; ?>" style="background-color:<?= $color; ?>"><?= $tiket['kode_acara']; ?></td>
                                <td id="<?= $id; ?>" style="background-color:<?= $color; ?>"><?= $tiket['no_kursi']; ?></td>
                                <td>
                                    <a href="tiketMahasiswa.php?kode=<?= $tiket['kode_acara']; ?>"">
                                    <div class="btn btn-info">Print Tiket</div>
                                    </a>
                                </td>
                            </tr>
                        <?php 
                            ++$id;
                            } 
                        ?>
                    </table>
                    </center>
                </div>
                </div>
     
            </div>
            <?php require_once 'commons/footer.php'; ?>

        </div>
        
    </body>

</html>
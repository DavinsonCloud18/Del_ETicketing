<!DOCTYPE html>
<html>
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
        .data-mahasiswa td{
            text-align: center;
        }
        .submit-btn{
            border:none;
            width:150px;
        }
    </style>
    <body style="background-image: url('images/uri.jpg')">

        <div class="container" >
            <?php require_once(dirname(__FILE__).'/commons/header.php'); ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <!-- <table  style="margin:5px;"> -->
                <div class="col-md-12">
                    <div class="row">
                        <form action="AllProcess.php?action=DaftarAkun" method="post">
                            <div class="jumbotron" style="background-color:cornflowerblue;width:70%;margin:20px 20% 20px 23%;">
                                <h2 style="text-align:center">FORM REGISTRASI AKUN</h2>
                                <Table>
                                    <tr>
                                        <td><label>NIM</label></td>
                                        <td><input type="text" name="NIM"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Username Akun</label></td>
                                        <td><input type="text" name="username"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Password</label></td>
                                        <td><input type="password" name="password"></td>
                                    </tr><tr>
                                        <td><label>Re-Typed Password</label></td>
                                        <td><input type="password" name="re-password"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-success submit-btn">Buat Tiket</button>
                                        </td>
                                    </tr>
                                </Table>             
                            </div>
                        </form>
                    </div>
                </div>
     
            </div>
            <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
        </div>
        
    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Mahasiswa</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- <link rel="stylesheet" href="css/myStyle.css"> -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <style>
        input{
            margin:3px;
            width: 400px;
            height:35px;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            border: 0px solid black;
            transition:1s;
        }
        /* div{
            border:1px solid black;
        } */
        input:hover{
            width:500px;
            transition: 1s;
        }
        a{
            color: white;
        }
        a:hover{
            color:lightseagreen;
            text-decoration: none;
        }
        .box-shadow{
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            border: 0px solid black;
        }
        li > a{
            font-size:15px;
        }
        td{
            font-size: 16px;
            padding: 5px;
            margin-bottom: 0px;
        }
        td > input{
            font-size: 14px;
            padding: 10px;
            background-color: whitesmoke;
        }
        tr{
            border-bottom: 1px rgba(0,0,0,1) black;
            padding: 10px;
        }
        .submit-button{
            width:200px;
            height:40px;
            background-color: #3d3f40;
            margin-top:50px;
            border: none;
            border-radius: 5px;
            transition: 0.8s;
            color:white;
        }
        .submit-button:hover{
            background-color: whitesmoke;
            transition: 0.5s;
            border: none;
            color:#3d3f40;
        }
        .memanjang{
            width:50%;
            margin-left:25%;
            transition: 1s;
        }
        .memanjang:hover{
            width:100%;
            margin-left:0%;
            transition: 0.8s;
        }

    </style>
    <body style="background-image: url('images/uri.jpg')">
        <div class="container" >
            <?php require_once(dirname(__FILE__).'/commons/header.php'); ?>
            <div class="col-md-12 box-shadow" style="background-color :whitesmoke;padding:0px;">
            <?php require_once(dirname(__FILE__).'/commons/menuMaha.php'); ?>
            <div class="col-md-9 " style="padding: 10px;height: 1020px; background: url('images/nev.jpg') center center; ">
                <center><strong><h1>Selamat Datang di BEM Online Ticketing</h1></strong></center>
                <div>
                    <div class="thumbnail">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" >
                                <div class="item active">
                                    <img src="images/5.jpg" alt="Los Angeles" style="width:1200px;height:550px;">
                                </div>
                                <div class="item">
                                    <img src="images/4.jpg" alt="Chicago" style="width:1200px;height:550px;">
                                </div>
                                <div class="item">
                                    <img src="images/5.jpg" alt="New York" style="width:1200px;height:550px;">
                                </div>
                            </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </div>
                        <!-- <div>
                            <div class="col-md-4" >
                                <div class="thumbnail">
                                    <img src="images/1.jpg">
                                        <div class="caption">
                                            <h5>
                                                <b>Kerohanian</b>
                                            </h5>                                            
                                        </div>                            
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="images/2.jpg">
                                        <div class="caption">
                                            <h5>
                                                <b>Olahraga</b>
                                            </h5>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img src="images/3.jpg">
                                            <div class="caption">
                                            <h5>
                                                <b>Seni</b>
                                            </h5>
                                        </div>      
                                    </div>
                            </div>
                        </div> -->
                </div>
        </div>
        <?php require_once(dirname(__FILE__).'/commons/footer.php'); ?>
        </div>
    </body>

</html>
<?php
    if(!isset($_SESSION['logged_in'])){
        // header("location: index.php");
        // echo $_SESSION['username']."<br>";
        // echo "session nya tidak di set";
    }?>

<div class="col-md-3 box-shadow" style=
    "
        height:1020px;
        background-color:#3d3f40;
        color: white;
        text-align:left;
    "
    >
    <!-- <img style="max-width : 120px;margin-left: 18px;margin-right: 10px" src="images/BEM.png"><br> -->
    <h4 style="border-bottom:2px solid white;padding:20px 10px 20px 10px;text-align:center">
        <a href="Acara.php" style="font-size:25px;">Manage Acara</a>
    </h4>
    <!-- <h4 style="border-bottom:2px solid white;padding:20px 10px 20px 10px;text-align:center">
        <a href="DaftarMahasiswa.php" style="font-size:25px;">Manage Mahasiswa</a>
    </h4> -->
    <!-- <h3 style="text-align:left;padding:10px;font-size:30px;">Daftar Acara</h3><br>
        <ul style="text-align:left;list-style-type:none;">
            <li><span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbsp<a href="#">Buat Acara</a></li><br>
            <li><span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbsp<a href="#">Edit Acara</a></li><br>
            <li><span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbsp<a href="#">Hapus Acara</a></li><br>
        </ul>
    <h3 style="border-bottom:2px solid white;margin:-10px 0px -10px 0px">&nbsp</h3> -->
    
    <!-- <ul style="text-align:left;list-style-type:none;">
        <li>Nmaa</li><br>
        <li>Edit Acara</li><br>
        <li>Hapus Acara</li><br>
    </ul> -->
    <!-- <div class="btn memanjang" style=
        "
            background-color:white;
            padding:10px 15px 10px 15px;
            margin-bottom:10px;
            margin-top:10px;
            font-size:15px;
            border:none;
            color:black;
        "
        >
            <span class="glyphicon glyphicon-user">
                <a hrerf="#" style="color:black"></a>
            </span><b>&nbspProfile</b>  
    </div> -->
    <!-- <ul style="text-align:left;list-style-type:none;">
        <b>Nama</b><br>
        <li>&nbsp&nbsp<span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbspDavinson Hutapea</li>
        <b>NIM</b>
        <li>&nbsp&nbsp<span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbsp11318015</li>
        <b>Prodi</b>
        <li>&nbsp&nbsp<span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbspD3 Teknik Informatika</li>
        <b>Username Akun</b>
        <li>&nbsp&nbsp<span class="glyphicon glyphicon-triangle-right"></span>&nbsp&nbspDavinson 777</li>
    </ul> -->
    <!-- <h3 style="border-bottom:2px solid white;margin:-10px 0px -10px 0px">&nbsp</h3> -->

    

    <a href="AllProcess.php?action=logout" style="color:black">    
    <div class="btn memanjang" style=
        "
            background-color:white;
            padding:10px 15px 10px 15px;
            margin-top:15px;
            font-size:15px;
            border:none;
            color:black;
        "
        >
            <span class="glyphicon glyphicon-log-out">
            </span><b>&nbspLogout</b>  
        </div>
    </a>
    </div>
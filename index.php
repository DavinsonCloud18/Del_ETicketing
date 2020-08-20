<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <head>
        <title>Edit Acara</title>
        <link rel="stylesheet" href="css/myStyle.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
    </head> 
</head>
<style>
  * {box-sizing: border-box}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
  .login-input{
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
        .login-input:hover{
            width:500px;
            transition: 1s;
        }
        .box-shadow{
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            border: 0px solid black;
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
            width:100%;
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
        .login-input{
          transition: 2;
          width:80%;
          cursor: pointer;
        }
        .login-input:hover{
          transition: 1;
          width:100%;
        }
        .login-input[type=submit]{
            background-color: #3d3f40;
            color:whitesmoke;
        }
        .login-input[type=submit]:hover{
            background-color: black;
            color:black;
            color:white;
        }
    .col-md-6 {
        color:white;
        float:right;
    }
}

</style>
<center>
  <body style="margin-top: 10%" background="images/uri.jpg">
  <div class="container" style="width: 70%;height: 60%">
    <form action="AllProcess.php?action=login" method="POST">
      <div class="col-md-12" >
        <img src="images/E-Ticketing.png" style="width: 40%; height: 30%">
            <h2 style="text-align:center">Login</h2>
          <input type="text" name="username" placeholder="Username" required class="login-input" > 
          <input type="password" name="password" placeholder="Password" required class="login-input">
          <input type="submit" value="Login" class="login-input" style="height:45px;">
        </div>
        <div class="col-md-12">
          <!-- <a class="col-md-6" href="DaftarAkun.php" style="color:black;">
            <div class="btn btn-info" style="width:50%;height:30px;padding:6px;">Lupa Password?</div>
          </a> -->
          <a class="col-md-5" href="DaftarAkun.php" style="color:black;">
            <div class="btn btn-danger" style="width:50%;height:30px;padding:6px;">Belum Punya Akun?</div>
          </a>
        </div>
    </form>
</body>
</center>
</html>
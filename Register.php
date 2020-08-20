<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
  <head>
        <title>registrasi</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
        .box-shadow{
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            border: 0px solid black;
        }
        td{
            font-family: timesnewroman;
            font-size: 20px;
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
        .login-input{
          width:500px;
          cursor: pointer;
        }
        .login-input1{
          width:300px;
          cursor: pointer;
          background-color: black;
          color: white;
        }
        .col-md-12 {
    .col-md-6 {
        color:white;
    }
    .col-md-6 {
        color:white;
        float:right;
    }
}
    h1,h2,h3,h4,h5{
      font-family: timesnewroman;
      font-weight: bold;
    }

</style>
<center><body style="margin-top: 10%" background="images/uri.jpg">

  <?php
    include"db.php";
  ?>

<div class="container" style="width: 70%;height: 70%; margin-top: -50px;">
  <!-- <div class="col-md-12">
      <div class="col-md-3"><a href="#" style="color:black;">Sign up</a></div>
      <div class="col-md-6">ahahahahah</div>
      <div class="col-md-3"><a href="#" style="color:black;">Sign up</a></div>
  </div> -->
   
    <div class="col-md-12"  >
      <img src="images/E-Ticketing_v2.png" style="width: 50%; height: 40%">
          <h2 style="text-align:center">Registrasi</h2>

      <form action="" method="post">
        <table>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td>
              <input type="text" name="Username" value="" placeholder="Ex : IF318024" required class="login-input">
            </td>
          </tr> 

          <tr>
            <td>NIM</td>
            <td>:</td>
            <td> 
                <input type="text" name="NIM" value="" placeholder="NIM" required class="login-input" > 
            </td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:</td>
            <td>
              <input type="Password" name="PASSWORD" placeholder="Password...." required class="login-input">
            </td>
          </tr> 
        
          <tr>
            <td>Role</td>
            <td>:</td>
            <td>
              <input type="text" name="Role" value=""  required class="login-input">
            </td>
          </tr> 
        </table>
        <br>
        <input type="submit" name="Register" value="Register" class="login-input1" >
      </div>
  </form>
  
</html>
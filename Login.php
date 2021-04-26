<?php
if (isset($_POST['submit'])) {

    $un=$_POST['username'];
    $pw=$_POST['password'];

    if ($un=='username' && $pw=='password') {
        header("location:home.php");
        exit();
    }
    else echo"<script>alert('Invalid Password')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
      #main{
          background-color: coral;
          width: 600px;
          height: 300px;
          border-radius: 30px;
      }
      h1{
          color: black;
          background-color: lightblue;
          border-top-right-radius: 30px;
          border-top-left-radius: 30px;
      }
      .text{
          background-color: lightblue;
          color: white;
          width: 250px;
          font-weight: bold;
          font-size: 20px;
          border: none;
      }
      .text:focus{
          outline: none;
      }
      hr{
          width: 250px;
          margin-top: 0px !important;
      }
      #sub{
          width: 250px;
          height: 30px;
          background-color: lightblue;
          border: none;
      }


    </style>
</head>
<body>
<center>
<div id="main">
    <h1>SIMPLE LOGIN</h1>
    <form method="post">
        <input type="text" name="username" class="text" autocomplete="off" required placeholder="username"><br><hr><br>
        <input type="password" name="password" class="text"  placeholder="password"><br><hr><br>
        <input type="Submit" name="submit" id="sub"/>
    </form>
</div>
</center>
</body>

</html>






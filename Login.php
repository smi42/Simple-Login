<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<div id="main">
    <h1>SIMPLE LOGIN</h1>
    <form method="post">
        Username <input type="text" name="username" class="text" autocomplete="off" required>
        Password <input type="password" name="password" class="text" required>
        <input type="submit" name="submit" id="sub"/>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['sub'])) {

    $un=$_POST['username'];
    $pw=$_POST['password'];

    if ($un=='username' && $pw=='password') {
    header("location:home.html");
    exit();
    }
    else
        echo"invalid Username/Password";
}
?>

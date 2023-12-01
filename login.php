<?php
session_start();
require "functions.php";

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;

            header("Location:admin/index.php");
            exit;
        }
    }

    $error = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    label {
      display: block;
    }
    </style>
    </head>
<style>
.body {
  height: 100vh;
  background-image: linear-gradient(#7d5647,#19191e);
  background-size: cover; 

}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form-login{
  position: relative;
  z-index: 1;
  background: darkslategrey;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #19191e;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #7d5647;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.message a {
  color: #4CAF50;
  text-decoration: none;
}
</style>
  <body class="body">
  <?php if (isset($error)) : ?>
        <p style="color: red; font-style : italic">usernama / password salah</p>
    <?php endif;  ?>
    <div class="login-page">
      <div class="form-login">
        <div class="login">
          <div class="login-">
            <h3 style="color: #b3b3b3;">LOGIN</h3>
            <p style="color : #b3b3b3;">TUSIXTI COFFEE</p>
          </div>
        </div>
        <form class="login-form" action="" method="POST">
          <input class="input" type="username" name="username" id="username" required autocomplete="off" placeholder="username">
          <input class="input" type="password" name="password" id="username" required autocomplete="of" placeholder="password">
          <button class="button" type="submit" name="login">login</button>
          <p class="message">Not registered? <a href="registrasi.php">Create an account</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>

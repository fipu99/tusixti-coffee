<?php
require "functions.php";
if (isset($_POST["registrasi"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
                alert ('user baru berhasil ditambahkan!!')
                </script>";
  } else {
    echo mysqli_error($conn);
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrsi</title>
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
.registrasi {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form-registrasi {
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
  <div class="container">
  <div class="registrasi">
      <div class="form-registrasi">
        <div class="daftar">
          <div class="regis-header">
          <h3 style="color: #b3b3b3;">REGISTRASI</h3>
            <p style="color : #b3b3b3;">TUSIXTI COFFEE</p>
  </div>
  </div>
  <form action="" method="POST">
  <input class="input" type="username" name="username" id="username" required autocomplete="off" placeholder="username">
          <input class="input" type="password" name="password" id="username" required autocomplete="off" placeholder="password">
        <input class="input" type="password" name="password2" id="password2" required autocomplete="off" placeholder="confirm password">
        <button class="button" type="submit" name="registrasi">Daftar</button>
      </li>
    </ul>


    <a href="login.php" style="font-style: initial;">Login</a>
    <p class="message">jika sudah punya akun</p>


  </form>
</div>
</body>

</html>
<?php
session_start();
require_once("control/register_control.php");
register();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<h2>Đăng Ký</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required>

    <button type="submit">Register</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>

</body>
</html>

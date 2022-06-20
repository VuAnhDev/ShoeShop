<?php
require_once("db/dbhelper.php");
function register()
{
  if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];   	

    $sql = "INSERT INTO account(username,password,email) VALUES('".$username."','".$password."','".$email."')";
    execute($sql);
    header("location: login.php");
  }
}
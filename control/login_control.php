<?php
require_once("db/dbhelper.php");
function login()
{
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	    $sql = "SELECT * FROM account WHERE username = '".$username."'AND password ='".$password."'";
	    $data = executeResult($sql);
		if ($data!= null && count($data)>0) {
			if ($data[0]['level']==0) {
				header("location: index.php");
			}else header("location: admin/");
		} else echo "tai khoan khong chinh xac";
	}
}
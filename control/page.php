<?php
$sql = 'select count(id) as number from products';
$result = executeResult($sql);
$number = 0;
if ($result!= null && count($result) > 0) {
	$number = $result[0]['number'];
}
$page = ceil($number/8);
$current_page = 1;
if (isset($_GET['page'])) {
	$current_page = $_GET['page'];
}
$index = ($current_page - 1)*8;
$sql = 'select * from products limit '.$index.', 8 ';
$result = executeResult($sql);
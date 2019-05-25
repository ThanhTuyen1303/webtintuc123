<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='';
	$csdl='webtintucphp';
	$connect=mysqli_connect($tenmaychu,$taikhoan,$matkhau)or die('Connect fail');
//	mysqli_select_db($csdl,$connect);
// 2. Select a database to use 
$db_select = mysqli_select_db($connect, $csdl);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connect));
}

?>
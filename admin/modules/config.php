<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='';
	$csdl='webtintucphp';
	$connect=mysqli_connect($tenmaychu,$taikhoan,$matkhau,$csdl);

	mysqli_query($connect,"SET character_set_results=utf8");
	mb_language('uni');
	mb_internal_encoding('UTF-8');
	mysqli_select_db($connect, $csdl);
	mysqli_query($connect,"set names 'utf8'");

	
?>
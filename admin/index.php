<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<title>Trang quản trị nội dung</title>
</head>

<body>
<div id="wrapper">
	<?php
		session_start();
	// Nếu không đăng nhập
    
if(!isset($_SESSION['username']))
{
    // Hiển thị form đăng nhập
    require_once ('dangnhap.php');
   
}
//    // Nếu đăng nhập
else
{
    
 include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		include('modules/footer.php');
}


?>

</div>

</body>
</html>
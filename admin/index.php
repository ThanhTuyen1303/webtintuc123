
<html>
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
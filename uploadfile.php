<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>upload file</title>
</head>
<body>
	<h1>up load file</h1>
	<form action="" method="post" enctype="multipart/form-data">
		chọn file: <input type="file" name="upload" id="">
		<br> <input type="submit" value="upload file" name="submit">
	</form>
	<?php
	
	if(isset($_POST["submit"]))
	{
		if($_FILES["upload"]["error"]>0)
		{
			echo "<br> có lỗi khi tải file lên server vui lòng kiểm tra lại.";
		}
		else
		{
			move_uploaded_file($_FILES["upload"]["tmp_name"],"uploadsfile/".$_FILES["upload"]["name"]);
			echo "<br> up load file thành công";
			echo "<pre>";
			print_r($_FILES["upload"]);
			
			echo "</pre>";
		}
	}
	$tringdownload="uploadsfile/".$_FILES["upload"]["name"];
	echo "<a href='$tringdownload'>tải văn bản về máy</a>";
	?>
</body>
</html>

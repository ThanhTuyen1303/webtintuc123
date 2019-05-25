<?php
	include('/config.php');
   //$IDKH=$_GET['id'];
  
	$TenKH=$_POST['Name'];
	$Email=$_POST['Email'];
    $Dienthoai=$_POST['Telephone'];
	$Noidung=$_POST['message'];
 
	if(isset($_POST['send'])){		
        $sql="INSERT INTO homthu(TenKH, Email, Dienthoai, Noidung) VALUES('$TenKH', '$Email','$Dienthoai','$Noidung')";
             
		mysqli_query($connect,$sql);
		//header('location:../../index.php?quanly=taikhoan&ac=taikhoan');
	}

 ?>

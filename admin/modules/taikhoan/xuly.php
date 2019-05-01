<?php
	include('../config.php');
    $id=$_GET['id'];
  
	$tentaikhoan=$_POST['tendangnhap'];
	$matkhau=$_POST['matkhau'];
	$email=$_POST['email'];
    $dienthoai=$_POST['dienthoai'];
	$level=$_POST['level'];
  $lvel=$_GET['lvel'];
	if(isset($_POST['them'])){
		//them TÀI KHOẢN
        $sql="INSERT INTO taikhoanadmin(tentaikhoan, matkhau, email, dienthoai, level) VALUES('$tentaikhoan','$matkhau','$email','$dienthoai','$level')";
        
        
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=taikhoan&ac=taikhoan');
	}
elseif(isset($_POST['sua'])){
		//sua tài khoản    
        $sql="UPDATE taikhoanadmin SET tentaikhoan='$tentaikhoan',matkhau='$matkhau',email='$email',dienthoai='$dienthoai',level='$level' WHERE id='$_GET[id]'";
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=taikhoan&ac=sua&id='.$id);
	}

else{
if($lvel==0)
{
echo "tài khoản này không được phép xóa (level=0-vip)";
    
header('location:../../index.php?quanly=taikhoan&ac=taikhoan');
}
else{//xoa tài khoản
$sql="DELETE FROM taikhoanadmin WHERE id='$id'";
mysqli_query($connect,$sql);
header('location:../../index.php?quanly=taikhoan&ac=taikhoan');}
}

 ?>

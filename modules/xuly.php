
<?php
	
 
	if(isset($_POST['send'])){	
		include('config.php');
  	//$IDKH=$_GET['id'];
  
	$TenKH=$_POST['Name'];
	$Email=$_POST['Email'];
    $Dienthoai=$_POST['Telephone'];
	$Noidung=$_POST['message'];
		
        $sql="INSERT INTO homthu(TenKH, Email, Dienthoai, Noidung) VALUES (N'$TenKH','$Email',$Dienthoai,N'$Noidung')";
             
	mysqli_query($connect,$sql);
		
		
		header('location:../index.php');
	}

 ?>

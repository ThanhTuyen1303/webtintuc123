<?php
	include('../config.php');
	$tenbaiviet=$_POST['tenbaiviet'];
	$tomtat=$_POST['tomtat'];
	$noidung=$_POST['noidung'];
	$loaitin=$_POST['loaitin'];
	$trangthai=$_POST['trangthai'];
	$thutu=$_POST['thutu'];
	
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		//$tim=date('dmy');
		//lấy file upload check
		//tên file
		//$tenfile=$_FILES['upload']['name'];
			move_uploaded_file($_FILES["upload"]["tmp_name"],"../../../uploadsfile/".$_FILES["upload"]["name"]);
		if($_FILES["upload"]["name"]==null)
		{$tringdownload="";}
		else{
			$tringdownload="uploadsfile/".$_FILES["upload"]["name"];
		}
				
	//echo "<a href='$tringdownload'>tải văn bản về máy</a>";
		
		//them loai tin
		$tenanh=$_FILES['anhminhhoa']['name'];
		if($tenanh!=''){
		$time=date('Ymdhis');
		$tenanh=$time.$tenanh;
		$dich='../../../uploads/'.$tenanh;
		copy($_FILES['anhminhhoa']['tmp_name'],$dich);
		$dich=substr($dich,9);
		}
		$sql="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu,linkstai)
		values('$tenbaiviet','$dich','$tomtat','$noidung','$loaitin','$trangthai','$thutu','$tringdownload')";
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=baiviet&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua loai tin
		//$tenfile=$_FILES['upload']['name'];
			move_uploaded_file($_FILES["upload"]["tmp_name"],"../../../uploadsfile/".$_FILES["upload"]["name"]);

				$tringdownload="uploadsfile/".$_FILES["upload"]["name"];
		$tenanh=$_FILES['anhminhhoa']['name'];
		if($tenanh!=''){
		$time=date('Ymdhis');
		$tenanh=$time.$tenanh;
		$dich='../../../uploads/'.$tenanh;
		copy($_FILES['anhminhhoa']['tmp_name'],$dich);
		$dich=substr($dich,9);
		$sql="update baiviet set tenbaiviet='$tenbaiviet',anhminhhoa='$dich',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu',linkstai='$tringdownload'
		where idbaiviet='$id'";
		//layanh
		$layanh="select anhminhhoa from baiviet where idbaiviet='$id'";
		$baiviet=mysqli_query($connect,$layanh);
		$dong=mysqli_fetch_array($baiviet);
		if($dong['anhminhhoa']!='')
			unlink("../../../".$dong['anhminhhoa']);
		}else{
			$sql="update baiviet set tenbaiviet='$tenbaiviet',noidung='$noidung',tomtat='$tomtat',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu',linkstai='$tringdownload'
			where idbaiviet='$id'";
		}
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=baiviet&ac=sua&id='.$id);
	}else{
		//xoa loai tin
		
//delete document of mysql
	$sql="delete from baiviet where idbaiviet='$id' ";
	mysqli_query($connect,$sql);

	// delete document in elasticsearch
	
		header('location:../../index.php?quanly=baiviet&ac=them');
		
}
?>
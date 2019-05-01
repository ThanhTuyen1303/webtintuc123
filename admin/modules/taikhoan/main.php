<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
		
	}else{
		$tam='';
	}
	if($tam=='taikhoan'){
		include('modules/taikhoan/them.php');
		
	}
        elseif($tam=='sua'){
			include('modules/taikhoan/sua.php');
		
	}
	
		include('modules/taikhoan/lietke.php');
	
?>
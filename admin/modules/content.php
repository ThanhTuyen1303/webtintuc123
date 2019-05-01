<div class="content">
	
    	<?php
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}
		if($tam=='loaitin'){
			include('modules/loaitin/main.php');
		}elseif($tam=='baiviet'){
			include('modules/baiviet/main.php');
		}
    elseif($tam=='taikhoan'){
        include('modules/taikhoan/main.php');
    }
		?>
   
   
</div>
<?php
	$sql="select * from loaitin order by thutu ASC";
	$loaitin=mysqli_query($connect,$sql);
	
?>

<div class="menu">
	<ul>
    	<li><a href="index.php">TRANG CHỦ</a></li>
        <?php
		while($dong=mysqli_fetch_array($loaitin)){
		?>
        <li><a href="index.php?xem=loaitin&id=<?php echo $dong['idloaitin'] ?>">
		<?php
		echo $dong['tenloaitin']
        ?></a></li>
       <?php
		}
	   ?>
	   <li>
		   	<p style="float:right;position:absolute;right:280px;">
				<input name="search" type="text" placeholder=" Tìm kiếm tin... " />
				<input name="search" type="button"  value=" Tìm kiếm "  />
			</p>
	   </li>
    </ul>

</div>
<hr>

<!-- ket thuc menu -->
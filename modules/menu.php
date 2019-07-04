
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
	
    </ul>

</div>
<hr>
<br>


<!-- ket thuc menu -->

		   	
	
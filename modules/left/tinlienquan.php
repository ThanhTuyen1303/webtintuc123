<?php
	$sql="select * from baiviet where idloaitin='$dong[idloaitin]' and idbaiviet not in('$_GET[id]')";
	$baiviet=mysqli_query($connect,$sql);
	
?>
<div style="width:100%;border: 5px solid red;">
	<img src="./hinh/tinlienquan.jpg" alt="ảnh tin liên quan" style="width:30%; float:left;">
<!--<p style="color:#960;font-size:16px;">Tin liên quan</p>-->
<h2>TIN LIÊN QUAN</h2>
</div>
<ul style="list-style:none;margin-left:20px;">
<?php
	while($dong=mysqli_fetch_array($baiviet)){ 
?>
	<li style="margin-top:10px;"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
    <?php
	}
	?>
</ul>


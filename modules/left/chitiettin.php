<?php
	$sql="select * from baiviet where idbaiviet='$_GET[id]'";
	$baiviet=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($baiviet);
 ?>
  <div class="clear"></div>
 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
 </div>

 <div class="taifilexuong" style="float:right;">
 <?php echo "<a href='".$dong['linkstai']."'><i class='fa fa-download' aria-hidden='true'></i> tải văn bản về máy</a>" ?>
 </div>
<div class="row">
	<?php
	echo $dong['tenbaiviet']	
    ?>
    <?php
		echo $dong['noidung']
	?>

</div>
     <hr>
    <?php
		include('modules/left/tinlienquan.php');
	?>
   <hr>
<!--   bình luận fb-->
 <div class="clear"></div>
  <div style="margin-top:5px; width:100%;" class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
   <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
    	<img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div>



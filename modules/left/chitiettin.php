<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="/../webtintuc2005/jquery.js"></script>
<?php
	$sql="select * from baiviet where idbaiviet='$_GET[id]'";
	$baiviet=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($baiviet);
 ?>
  <div class="clear"></div>
 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
 </div>

 <div class="taifilexuong" style="float:right;">
 <?php 
	 if($dong['linkstai']==null || $dong['linkstai']=="") 
	 {
		 $dong['linkstai']="#";
	 }
	 
	 
	 
	 ?>
 <?php echo "<a onclick='myFunction()' id='example'  href='".$dong['linkstai']."' title=".$dong['linkstai']."><i class='fa fa-download' aria-hidden='true'></i> tải văn bản về máy</a>" ?>
 
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
 <div class="clear">
 	<p class="checktextlinktai"><?php echo $dong['linkstai'];	?></p>
<script type="text/javascript">
	
function myFunction() {
var linhxinh = $('a[id="example"]').attr('href');
//	var linhxinh=document.getElementsByClassName("checktextlinktai").textContent;
//	alert(linhxinh);
	if(linhxinh == null || linhxinh=="" || linhxinh=="#") { alert("xin lỗi!\n File bạn cần tải đăng được cập nhật\n chúng tôi sẽ cố gắng cập nhật lại file sớm nhất.\n xin cảm ơn !"); } 
	else
		{alert("not null!");}
}
</script>
 </div>
  <div style="margin-top:5px; width:100%;" class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
  <!--  <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
    	<img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div>
 -->



 <div class="container" style="width:70%; heigh:150px;float:left;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./imgs/bg-baner1.jpg" alt="" style="width:100%;height: 200px;">
      </div>

      <div class="item">
        <img src="./imgs/bg-baner2.jpg" alt="" style="width:100%;height: 200px;">
      </div>
    
      <div class="item">
        <img src="./imgs/bg-baner3.jpg" alt="" style="width:100%;height: 200px;">
      </div>
      
      <div class="item">
        <img src="./imgs/bg-baner4.jpg" alt="" style="width:100%;height: 200px;">
      </div>
      <div class="item">
        <img src="./imgs/bg-baner5.jpg" alt="" style="width:100%;height: 200px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--kết thúc slide show-->
<!--lá cờ-->
<div style="width:30%; float:left;">
    <img src="./imgs/Vietnam-240-animated-flag-gifs.gif" alt="">
</div>
<!--kết thúc lá cờ-->
<div id="noticesmall" style="clear:both;">
  <br>
   <i class="fa fa-bullhorn" style="width: 5%;"></i>
    <marquee style="width: 93%;" behavior="" direction="" scrollamount="6">
        <i class="fade fa-flag"> </i><span> "Một năm khởi đầu từ mùa xuân. Một đời khởi đầu từ tuổi trẻ. Tuổi trẻ là mùa xuân của xã hội" - Hồ Chí Minh </span>
        <i class="fade fa-flag"> </i><span>Sự tự do về chính trị, sự hòa bình của một quốc gia và chính cả khoa học là những món quà mà Định mệnh đánh thuế nặng nề bằng máu! -Political liberty, the peace of a nation, and science itself are gifts for which Fate demands a heavy tax in blood! Chính trị là một vùng đất của những hy vọng khiêm nhường và những đòi hỏi vừa phải đến đáng ngạc nhiên, nơi tất cả đều là người tốt miễn không phải là tội phạm, và tất cả đều là người khôn ngoan miễn không phải lố lăng.-Politics is a place of humble hopes and strangely modest requirements, where all are good who are not criminal and all are wise who are not ridiculously otherwise.by:Frank Moore Colby </span>

    </marquee>
</div>
<div class="content" id="contenmain">
	<div class="content_left">
    	<?php
		if(isset($_GET['xem'])){
			$tam=$_GET['xem'];
		}else{
			$tam='';
		}
		if($tam=='chitiet'){
			include('modules/left/chitiettin.php');
		}elseif($tam=='loaitin'){
			include('modules/left/chitietloaitin.php');
		}else{
			include('modules/left/tinmoi.php');
			$sql="select * from loaitin where trangthai='Hiển thị'";
			$loaitin=mysqli_query($connect,$sql);
			while($dong_loaitin=mysqli_fetch_array($loaitin)){
			include('modules/left/boxtina.php');
			
			}
		}
		?>
   
   
   
    </div>

    <!-- Ket thuc content_left -->
    <div class="content_right">
   		<?php
			include('modules/right/tincapnhap.php');

		?>
      <!-- Ket thuc content_right -->
</div>
</div>
<div class="clear"></div>
<!-- ket thuc content 1 -->

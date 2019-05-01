<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery/scripts.js"></script>
<script type="text/javascript" src="jquery/scroll-to-top.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Web tin tức pháp luật</title>
</head>

<body class="preloading">
<script type="text/javascript">
 
$(window).on('load',function(event)
{
    $('body').removeClass('preloading');
    $('.load').delay(2000).fadeOut('fast');
             
             });
//     $(".load").remove();
    </script>
<!--  của phây sờ búc-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1846296315398954&autoLogAppEvents=1"></script>
<!--kết thúc phây sờ búc-->
<div class="websitecontent">
    <div class="hotline">
    <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <div class="phonering-alo-ph-img-circle">
            <a class="pps-btn-img" title="Liên hệ luật sư tư vấn miễn phí" href="tel:0938086160"> <img src="./imgs/img-call.png" alt="Liên hệ" width="50" class="img-responsive" /> </a>
        </div>
    </div>
</div>
<div class="icon-bar">
 <a href="https://www.facebook.com/thanhtuyen.nguyen.1023611" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/?lang=vi" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> </div>
<div class="status"></div>
<div class="wrapper">
<?php

	include('modules/config.php');
	include('modules/header.php');
	include('modules/menu.php');
?>
  <!-- //navigation -->
  <!-- banner -->

  <!-- mail -->
  <div class="mail">
    <div class="container" style="width:100%; heigh:150px">
      <h2 style="font-weight: bold; color: #cc0000">Thông Tin Liên Hệ</h2>
      <br>
      <div class="agile_mail_grids">
        <div class="col-md-5" style="float:left; text-align: justify">
          <li>Số điện thoại: 0987.654.321</li>
          <li>Hotline: 0978290450</li>
          <li>Fax: 1123456789</li>
          <li>Email: <a href="mailto:webtintuc@gmail.com">webtintuc@gmail.com</a></li>   
           <li>Địa chỉ: 475A Điện Biên Phủ, Quận Bình Thạnh, TP. HCM, Việt Nam</li>   
        </div>

        <div class="col-md-7 contact-left">
          <h4 style="font-weight: bold;">Nhập thông tin liên hệ</h4>
          <form action="#" method="post">
            <input type="text" name="Name" placeholder="Họ tên" required="">
            <input type="email" name="Email" placeholder="Địa chỉ email" required="">
            <input type="text" name="Telephone" placeholder="Số điện thoại" required="">
            <textarea name="message" placeholder="Ghi chú..." required=""></textarea>
            <input type="submit" value="Gửi" >
          </form>
        </div>
      </div>

        <div class="clearfix"> </div>
       
      <div class="contact-bottom">
      	 <p> <h3 style="color: #3c43a4; float: left;">Bản đồ đến công ty: </h3></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.48134012112!2d106.7145887!3d10.8020946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIdXRlY2g!5e0!3m2!1svi!2s!4v1556696138680!5m2!1svi!2s" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
      </div>
    </div>
  </div>
</div>
</div>
<?php include('modules/footer.php');?>
</body>
</html>

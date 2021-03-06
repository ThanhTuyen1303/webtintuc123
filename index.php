
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="trần văn bắc & thanh tuyền">
<meta name="description" content="trang web pháp luật phục vụ đồ án tổng hợp ngành đại học">
<meta name="application-name" content="website  hỗ trợ tra cứu văn  bản pháp luật">
<meta name="keywords" content="web tin pháp luật, pháp luật, việt nam, thời sự, tin nóng,">
<link rel="shortcut icon" href="hinh/avatar.jpg">
<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery/scripts.js"></script>
<script type="text/javascript" src="./jquery/scripts.js"></script>
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
<!--  css for fiel search-->
  <style>

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<div style="clear:both;"></div>
  <form class="example" action="search.php" method="get">
    <input type="text" placeholder="Search.." name="q">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  

  
  <div style="clear:both;"></div>
  <?php
  include('modules/content.php');
  include('modules/footer.php');
    
  
?>

</div>
</div>
<div class="gop-y-g" id="myBtn">

    <a href="#" id="gopyv2" class="gop-y-link">
    <img alt="hòm thư góp ý" src="./hinh/hom-thu-gop-y.png" title="Hãy góp ý cho chúng tôi qua hòm thư ! (^-^)">
  </a>
  
</div>
<!-- The Modal -->
<div id="myModal" class="modal" onclick="">

  <!-- Modal content -->
  <div class="modal-content">
      <!--Header-->
 <!-- mail -->
  <div class="mail">
    <div class="container" style="width:100%; heigh:150px">
      <br>
      <span aria-hidden="true" class="white-text close">&times;</span>  
      <h2 style="font-weight: bold; color: #cc0000">Phản hồi hòm thư</h2>
      <span>lưu ý: mọi thông tin của bạn chúng tôi sẽ bảo mật và là riêng tư. xin cảm ơn</span>
      <br>
      <div class="agile_mail_grids">

        <div class="col-md-15 contact-left">
          <form action="modules/xuly.php" method="post">
             <input id="Name" type="text" name="Name" placeholder="Họ tên" required="">
            <input id="Email" type="email" name="Email" placeholder="Địa chỉ email" required="">
            <input id="Telephone" type="text" name="Telephone" placeholder="Số điện thoại" required="">
            <textarea id="message" name="message" placeholder="Ghi chú..." required=""></textarea>

            <input class="btn btn-primary waves-effect waves-light" type="submit" name="send" id="send" value="Gửi">
           <!-- <i class="fa fa-paper-plane ml-1"></i> -->
          </form>
          <br>
        </div>
      </div>

        <div class="clearfix"> </div>
       
    </div>
  </div>
 
  </div>

</div>
<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'XY65L99LARfhvJLWz';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->
</body>

<script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  
  </script>

</html>

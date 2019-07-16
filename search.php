<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
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
<!--	css for fiel search-->
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
require_once 'app/init.php';

if(isset($_GET['q']))
{
	$q=$_GET['q'];
	$query = $es->search([
		'body' => [
			'query' => [
				'bool' => [
					'should' => [
//						'match' => ['tenbaiviet' =>$q],
						
						'multi_match' => [
							'query' =>$q,
							'fields' =>['tenbaiviet','tomtat','noidung']
						]
						
						
					]
					
				]
			]
			
		]
		
		
		
				
	]);
	
//	echo '<pre>',print_r($query), '</pre>';
//	
//	die();
	
	if($query['hits']['total'] >=1){
		$results =$query['hits']['hits'];
	}
	

}


?>


<div class="content_left" style="width:auto;" >

		<h4 style="color: red; font-weight: bold; text-align: left;">Kết quả bạn cần tìm:  
			<u style="color: black">
		
				<?php 
					if (empty($results)) {
						echo "0 kết quả ";
					}
				?>
		 
			</u> 
		</h4>
	


	<?php
	if(isset($results))
	{
		
		foreach($results as $r)
		{

			?>
			<br>
			
			<div class="result" style="max-width: 670px;">
				<a href="index.php?xem=chitiet&id=<?php echo $r['_id'];  ?>"><?php echo $r['_source']['tenbaiviet'];  ?><i class="fa fa-file-alt"></i></a>
			
				<div class="result-tomtat"><?php echo $r['_source']['tomtat'];  ?></div>
			</div>
			<hr>
			<?php
		}
		
	}
	
	
	?>
</div>

<!--content-->
<div class="content" id="contenmain">
	


    <!-- Ket thuc content_left -->
    <div class="content_right">
   		<?php
			include('modules/right/tincapnhap.php');

		?>
      <!-- Ket thuc content_right -->
</div>
</div>
<div class="clear"></div>
<?php
	
	include('modules/footer.php');
    
	
?>
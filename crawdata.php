<?php
include('crawldata/simple_html_dom.php');


//$url = 'http://vbpl.vn/pages/vanbanmoi.aspx';
//    $html = file_get_html($url);
//lấy văn bản theo thẻ a
//$tins=$html->find("div.box-standard a");
//   foreach($tins as $itermtin)
//   {
//	   echo $itermtin->innertext;
////	   echo "---".$itermtin->href;
////	   echo "<hr>";
//   }
//

////lấy hình
//$images=$html->find("img");
//foreach($images as $itermimg)
//{
//	$s=$itermimg->src;
//	$img='hinh/'.basename($s);
//	file_put_contents($img,file_get_contents($s));
//}
//--------------------------------------------
//get data from vbpl.com
//itemid max=99998
//	$url = 'http://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID=1&dvid=13';
//     $html = file_get_html($url);
//	
//	
//$tins=$html->find("div.content div.fulltext");
//foreach($tins as $vb)
//{
//	$ndheader=$vb->find("div",0);
//	$ndmain=$vb->find("div",1);
//	
//	echo $ndheader.$ndmain;
//}
//-----------------------------------------------------

for($i=1; $i<=99998;$i++)
{	

		$url = 'http://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID='.$i.'&dvid=13';
     $html = file_get_html($url);
	
	
$tins=$html->find("div.content div.fulltext");
foreach($tins as $vb)
{
	
	
	//ten văn bản
	$tenvb=$html->find("div.box-map ul li a",3)->innertext;
	//ảnh minh họa default
	$anhminhhoa="uploads/imagevbdefault.jpg";
	//tóm tắt
	$tomtat1=$vb->find("div.toanvancontent p[align='CENTER']",0);
	$tomtat2=$vb->find("div.toanvancontent p[align='CENTER']",1);
	$tomtat3=$vb->find("div.toanvancontent p[align='CENTER']",2);
	$tomtat4=$vb->find("div.toanvancontent p[align='JUSTIFY']",0);
	$tomtat=$tomtat1.$tomtat2.$tomtat3.$tomtat4.".......<<nhấn để xem chi tiết văn bản>>";
	
	//nội dung văn bản pháp luật
	$ndheader=$vb->find("div",0);
	$ndmain=$vb->find("div",1);
	$noidungvb=$ndheader.$ndmain;
	
	//loại tin pháp luật -: bỏ trống mặc định là loại đầu tiên của bảng loại tin (@-@)
	//trạng thái mặc định là hiển thị :((     (^_^)
	
	//thứ tự:
	$thutu=$i;
	
	
	//tạm thời hết tin và ta bắt đầu chèn văn bản vô database
	include('modules/config.php');
	$sqlinsert="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		values('$tenvb','$anhminhhoa','$tomtat','$noidungvb',23,'Hiển thị','$thutu')";
		mysqli_query($connect,$sqlinsert);
	
}
	
}

?>
<script>alert("crawl data and insert database thành công!\n tổng cộng: 99998");</script>
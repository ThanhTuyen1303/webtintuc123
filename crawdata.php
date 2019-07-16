<?php
include('crawldata/simple_html_dom.php');

//----------------99998-------------------------------------

for($i=1; $i<=9;$i++)
{	

		$url = 'http://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID='.$i.'&dvid=14';
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
	$tomtat=($tomtat1.$tomtat2.$tomtat3.$tomtat4);
	
	//nội dung văn bản pháp luật
	$ndheader=$vb->find("div",0)->outertext;
	$ndmain=$vb->find("div",1)->outertext;
	$noidungvb=$ndheader.$ndmain;
	

	// link tai
	 //$linktaifile=
	
	//loại tin pháp luật -: bỏ trống mặc định là loại đầu tiên của bảng loại tin (@-@)
	//trạng thái mặc định là hiển thị :((     (^_^)
	
	//thứ tự:
	$thutu=$i;
	$loaitin=rand(1,3);
	
	//tạm thời hết tin và ta bắt đầu chèn văn bản vô database
	include('modules/config.php');
	$sqlinsert="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		values('$tenvb','$anhminhhoa','$tomtat','$noidungvb',$loaitin,'Hiển thị','$thutu')";
		mysqli_query($connect,$sqlinsert);
	
}
	
}
//get from page 2


//get....


?>
<script>alert("crawl data and insert database thành công!\n tổng cộng: 99998");</script>
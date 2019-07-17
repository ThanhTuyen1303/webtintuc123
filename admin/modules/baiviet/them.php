<?php
require_once '../app/init.php';
if (!empty($P_POST)) {

  if(isset($_POST['tenbaiviet'], $_POST['tomtat'], $_POST['noidung']))
  {
   
    $tenbaiviet=$_POST['tenbaiviet'];
    $tomtat=$_POST['tomtat'];
    $noidung=$_POST['noidung'];    
    
$indexed = $es->index([
      'index'=>'baiviets',
      'type' =>'baiviet',
      'body'=>[
        'tenbaiviet' =>$tenbaiviet,
        'tomtat' =>$tomtat,
        'noidung' =>$noidung, 
      ]
      
    ]);
if($indexed){
      print_r($indexed);
    }
  }
    
}
?>

<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="content-left">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<table width="490" border="1">
  <tr>
    <td colspan="2"><h2 style="font-weight: bold; text-align: center;">THÊM BÀI VIẾT</h2></td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td><label>
      <input style="width:90%; height:25px;" type="text" name="tenbaiviet" id="tenbaiviet" required>
    </label></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td><label>
      <input type="file" name="anhminhhoa" id="anhminhhoa" />
    </label></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label>
      <textarea name="tomtat" id="tomtat" cols="100" rows="6"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><label>
      <textarea name="noidung" id="noidung" cols="100" rows="6"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td><label>
      <select name="loaitin" id="loaitin">
      <?php
	  $sql="select * from loaitin";
	 $loaitin= mysqli_query($connect,$sql);
	  while($dong=mysqli_fetch_array($loaitin)){
	  ?>
      
      <option value="<?php echo $dong['idloaitin'] ?>"><?php echo $dong['tenloaitin'] ?></option>
     <?php
	  }
	 ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td><label>
      <select name="trangthai" id="trangthai">
        <option value="Hiển thị" selected>Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label>
      <input type="text" name="thutu" id="thutu">
    </label></td>
  </tr>
  
    <tr>
    <td>chọn file tài liệu: </td>
    <td><label>
      <input type="file" name="upload" id="">
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input class="inputsubmit"  type="submit" name="them" id="them" value="Thêm văn bản mới">
    </div></td>
  </tr>
</table>
</div>
</form>




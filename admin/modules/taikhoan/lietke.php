<?php
	$sql="select * from taikhoanadmin";
	$taikhoan=mysqli_query($connect,$sql);
?>
<div class="content-right" >
<table width="700" border="1">
   <tr>
    <td colspan="8"><div align="center"><h1>DANH SÁCH TÀI KHOẢN</h1></div></td>
  </tr>
  <tr>
    <td>ID</td>
    <td>Tên đăng nhập</td>
    <td>Mật khẩu</td>
    <td>Email</td>
    <td>Điện thoại</td>
    
    <td>level</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <tr>
  <?php
 
while($dong=mysqli_fetch_array($taikhoan)){
  ?>
    <td style="background:#0FF"><?php echo $dong['id']?></td>
    <td><?php echo $dong['tentaikhoan']?></td>
    <td><?php echo $dong['matkhau']?></td>
    <td><?php echo $dong['email']?></td>
    <td><?php echo $dong['dienthoai']?></td>
    <td><?php echo $dong['level']?></td>
    <td><a href="index.php?quanly=taikhoan&ac=sua&id=<?php echo $dong['id'] ?>">Sửa</a></td>
    <td><a onclick="return confirm('Bạn có chắc muốn xóa tài khoản này chứ ?')" href="modules/taikhoan/xuly.php?xoa=taikhoan&id=<?php  echo $dong['id']?>&lvel=<?php  echo $dong['level']?>">Xóa</a></td>
  </tr>
  <?php

  }
  ?>
</table>
</div>
<div class="clear"></div>
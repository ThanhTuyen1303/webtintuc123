<?php 
    $sql="SELECT * FROM taikhoanadmin WHERE id='$_GET[id]'";
	$taikhoan=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($taikhoan); 
?>
<form action="modules/taikhoan/xuly.php?id=<?php echo $dong['id'] ?>" method="post">
<div class="content-left">
<table width="490" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa tài khoản</div></td>
  </tr>
   <tr>
    <td>id</td>
    <td><label>
      <input type="text" name="id" id="id" value="<?php echo $dong['id'] ?>" readonly>
    </label></td>
  </tr>
  
  <tr>
    <td>Tên đăng nhập</td>
    <td><label>
      <input type="text" name="tendangnhap" id="tendangnhap" value="<?php echo $dong['tentaikhoan'] ?>">
    </label></td>
  </tr>
   <tr>
    <td>mật khẩu</td>
    <td><label>
      <input type="text" name="matkhau" id="matkhau" value="<?php echo $dong['matkhau'] ?>">
    </label></td>
  </tr>
  
    <tr>
    <td>Email</td>
    <td><label>
      <input type="email" name="email" id="email" value="<?php echo $dong['email'] ?>">
    </label></td>
  </tr>
     <tr>
    <td>Điện thoại</td>
    <td><label>
      <input type="number" name="dienthoai" id="dienthoai" value="<?php echo $dong['dienthoai'] ?>">
    </label></td>
  </tr>
     <tr>
    <td>level</td>
    <td><label>
      <input type="number" name="level" id="level" value="<?php echo $dong['level'] ?>">
    </label></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</div>
</form>
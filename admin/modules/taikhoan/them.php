<form  action="modules/taikhoan/xuly.php" method="post">
<div class="content-left" >
<table width="490" border="1">
  <tr>
    <td colspan="2"><div align="center">TẠO THÊM TÀI KHOẢN</div></td>
  </tr>
  <tr>
    <td>Tên đăng nhập</td>
    <td><label>
      <input style="width:90%;height:25px;" type="text" name="tendangnhap" id="tendangnhap" placeholder="nhập tên đăng nhập.." required>
    </label></td>
  </tr>
   <tr>
    <td>Mật khẩu</td>
    <td><label>
      <input style="width:90%;height:25px;" type="text" name="matkhau" id="matkhau" placeholder="nhập mật khẩu.." required>
    </label></td>
  </tr>
   <tr>
    <td>Email</td>
    <td><label>
      <input style="width:90%;height:25px;" type="email" name="email" id="email" placeholder="nhập email..">
    </label></td>
  </tr>
   <tr>
    <td>Điện thoại</td>
    <td><label>
      <input style="width:90%;height:25px;" type="number" min="0" name="dienthoai" id="dienthoai" placeholder="nhập điện thoại..">
    </label></td>
  </tr>
   <tr>
    <td>level</td>
    <td><label>
      <input min="0" max="10" style="width:90%;height:25px;" type="number" name="level" id="level" placeholder="nhập quyền truy cập..." required>
    </label></td>
  </tr>


  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm tài khoản">
    </div></td>
  </tr>
</table>
</div>
</form>
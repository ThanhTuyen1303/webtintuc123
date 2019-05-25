<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
       header('Content-Type: text/html; charset=UTF-8');
        // xử lý đăng nhập
        if(isset($_POST['uname']))
        {
            // kết nối dữ liệu
            include('modules/config.php');
            $uname=$_POST['uname'];
            $upass=$_POST['pword'];
            
              //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect,"SELECT * FROM taikhoanadmin WHERE tentaikhoan='$uname'");
           
          $rows= mysqli_num_rows($query);
    if ( $rows >0) {
         //lấy mật khẩu  csdl ra
            $row=mysqli_fetch_array($query);
            // so sánh mật khẩu
            if($upass !=$row['matkhau']){
                echo "mật khẩu không đúng";
				header('location: dangnhap.php');
                
            }else{
				
				//lưu tên đăng nhập
            $_SESSION['username']=$uname;
//            echo "xin chào: ".$uname." đăng nhập thành công!";
           
            header('location: ./index.php');
			}

    }
            else{
    $loidangnhap="loi dang nhap";
               header('location: dangnhap.php');
            }
            
           
        }
?>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus {
 border: 2px solid red;
/*	background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);*/
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<body>


<div style="width: 50%;margin-left: 25%;height: auto;box-shadow: 5px 20px 20px 20px #ccc;border:none;">
  
    <form action="dangnhap.php" method="POST">
     <h4 style="text-align:  center;">ĐĂNG NHẬP QUẢN TRỊ VIÊN</h4>
  <div class="imgcontainer">
    <img src="./img/imglogin.png" alt="Avatar" class="avatar" style="height: 200px;width: 200px;">
  </div>

  <div class="container">
   
    <label for="uname"><b>Tài khoản:</b></label>
    <input type="text" placeholder="nhập tài khoản..." name="uname" autofocus required>

    <label for="psw"><b>Mật khẩu:</b></label>
    <input type="password" placeholder="nhập mật khẩu.." name="pword" required>
        
    <button type="submit">Đăng Nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> nhớ mật khẩu.
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" ><a href="/webtintuc">Quay lại</a></button>
   
    <span class="psw">quên <a href="">mật khẩu?</a></span>
  </div>
</form>
</div>

</body>



<body>
<style>

.dropbtn:hover, .dropbtn:focus {
 
}

.dropdown {
  position: relative;
  display: inline-block;
      float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: green;
  min-width: 130px;
  right: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  
  
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>


<div class="menu">
	<ul>
    	<li><a href="index.php?quanly=loaitin&ac=them">Quản lý loại tin</a></li>
        <li><a href="index.php?quanly=baiviet&ac=them">Quản lý bài viết</a></li>
        <li><a href="index.php?quanly=taikhoan&ac=taikhoan">Quản lý tài khoản</a></li>
        <li style="float:right;" class="dropdown">
        <?php 
           
            if(isset($_SESSION['username']))
           {
//              echo "xin chào: ".$_SESSION['username'];
               
                echo "<a href='#'  onclick='myFunction()' class='dropbtn'>"."xin chào: ".$_SESSION['username']."</a><div id='myDropdown' class='dropdown-content'><a href='dangxuat.php'>Đăng Xuất</a>
               
  </div>";
             
           }
           
           ?>
    </li>
    </ul>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<style>
.tbgioitinh{
		
        width: 75%;
      margin-left:5px;
        outline: none;
        font-size: 15px;
        font-weight: 300;
        color: gray;
        display: inline-block;
       
        font-family: 'Montserrat', sans-serif;
        border: 1px solid #fff;
        background: transparent;
  

        letter-spacing: 1px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius:5px;
        -o-border-radius: 5px;
    }
.txtNd_gioitinh{
	margin-right:10px;
}	
</style>

  <title>Trang Đăng ký</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme  -->
<link rel="stylesheet" href="giaodien/login/css/style.css">
   <!-- font-awesome icons -->
<link href="giaodien/login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
     
	  
           <div class="login w3_login">
		   
                <h2 class="login-header w3_header">Đăng ký</h2>
				
				    <div class="w3l_grid">
					
                        <form class="login-container" action="giaodien/login/dxuly.php" method="post">
                             <input type="text" placeholder="Tên tài khoản" Name="txtNd_taikhoan" required>
							 <input type="text" placeholder="Mật khẩu" Name="txtNd_matkhau" required>
                             <input type="password" placeholder=" Nhập lại Mật khẩu" Name="txtNd_matkhau1" required>
							 <input type="text" placeholder="Họ và tên" Name="txtNd_ten" required>
					 <div class="tbgioitinh">
              
              <label style="margin-right:5px;" class="gioitinh">Giới tính:</label>
              <input type="radio" name="txtNd_gioitinh" value="Nam"><label class="txtNd_gioitinh">Nam</label>
              <input type="radio" name="txtNd_gioitinh" value="Nữ"><label class="txtNd_gioitinh">Nữ</label>
			
              </div>
				 <input type="text" placeholder="Email" Name="txtNd_mail" required>
				  <input type="text" placeholder="Địa chỉ" Name="txtNd_diachi" required>
				   <input type="text" placeholder="Số điện thoại" Name="txtNd_sdt" required>
                             <input type="submit" name="dangky" value="Đăng ký">
							 
                        </form>

                 
<div class="bottom-text w3_bottom_text">
      <p style='margin-top:10px;'>Bạn đã có tài khoản?<a href="?quanly=dangnhap">Đăng nhập</a></p>
      <h4> <a href="#">Quên mật khẩu?</a></h4>
</div>
                  </div>
       </div>
  
</div>
  
  


  
<div class="footer-w3l">
		<p class="agile"> &copy; 2017 Elegant Login Form . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
</body>
</html>
<?php

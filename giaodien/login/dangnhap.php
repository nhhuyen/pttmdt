<?php

 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('kn.php');
     
    //Lấy dữ liệu nhập vào
    $nd_taikhoan = addslashes($_POST['txtNd_taikhoan']);
    $nd_matkhau = addslashes($_POST['txtNd_matkhau']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$nd_taikhoan || !$nd_matkhau) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //chưa mã hóa mà đi xét mã hóa
    //XONG
    $nd_matkhau = md5($nd_matkhau);
     
    //Kiểm tra tên đăng nhập có tồn tại không

    $query = $conn->query("SELECT nd_taikhoan, nd_matkhau FROM nguoi_dung WHERE nd_taikhoan = '$nd_taikhoan' AND nd_matkhau = '$nd_matkhau' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else{
		//Khai báo sử dụng session
		session_start();
        $_SESSION['nd_taikhoan'] = $nd_taikhoan;
        echo ". Bạn đã đăng nhập thành công. <meta http-equiv='refresh' content ='1;../../index.php'>";
        die();
	
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($nd_matkhau != $row['nd_matkhau']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='../dangnhap.php'></a>";
        exit;
    }
     
    
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trang Đăng nhập</title>
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
                <h2 class="login-header w3_header">Đăng nhập</h2>
				
				    <div class="w3l_grid">
					<img src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/avat-01-512.png" width="100px" style="margin-left:120px;">
                        <form class="login-container" action="giaodien/login/dangnhap.php?do=login" method='POST'>
                             <input type="text" placeholder="Tên tài khoản" Name="txtNd_taikhoan" required="" >
                             <input type="password" placeholder="Mật khẩu" Name="txtNd_matkhau" required="">
                             <input type="submit"name="dangnhap" value="Đăng nhập">
                        </form>
<div class="second-section w3_section">
     <div class="bottom-header w3_bottom">
          <h3>Hoặc</h3>
     </div>
     <div class="social-links w3_social">
         <ul>
         <!-- facebook -->
             <li> <a class="facebook" href="#" target="blank"><i class="fa fa-facebook"></i></a></li>

         <!-- twitter -->
             <li> <a class="twitter" href="#" target="blank"><i class="fa fa-twitter"></i></a></li>

         <!-- google plus -->
             <li> <a class="googleplus" href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
       </ul>
   </div>
</div>
                 
<div class="bottom-text w3_bottom_text">
      <p>Bạn chưa có tài khoản?<a href="?quanly=dangky">Đăng ký</a></p>
      <h4> <a href="#">Quên mật khẩu..</a></h4>
</div>

                  </div>
       </div>
  
</div>
  
  


  
<div class="footer-w3l">
		<p class="agile"> &copy; 2017 Elegant Login Form . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
</body>
</html>

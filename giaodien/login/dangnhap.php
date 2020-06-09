<?php
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['dangnhap'])) {
    include('modules/connect.php');
	
    $nd_taikhoan = addslashes($_POST['txtNd_taikhoan']);
    $nd_matkhau = addslashes($_POST['txtNd_matkhau']);
    $nd_matkhau = md5($nd_matkhau); 
  
		$sql="SELECT * FROM nguoi_dung WHERE nd_taikhoan = '$nd_taikhoan' AND nd_matkhau = '$nd_matkhau' ";
		$result=mysql_query($sql,$conn)
		or die(mysql_error());
		$num=mysql_num_rows($result);
		if($num == 0){
			echo '<style-align:center style="color:red">Tài khoản hoặc mật khẩu không đúng!!!!';
		}
		else{
			
			
			while($row=mysql_fetch_array($result)){
				$_SESSION['nd_ma']=$row['nd_ma'];
				$nd_ten=substr($row['nd_ten'],strrpos($row['nd_ten']," "),strlen($row['nd_ten'])-strrpos($row['nd_ten']));
				$_SESSION['nd_ten']=$nd_ten;
				if($row['nd_phanquyen']==1){
					header('location:admin/index.php');
				}
				else{
					header('location:index.php');
				}					
			}
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
<div style='margin-top:45px;' class="login-form w3_form">
  <!--  Title-->
           <div class="login w3_login">
                <h2 class="login-header w3_header">Đăng nhập</h2>
				
				    <div class="w3l_grid">
					<img src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/avat-01-512.png" width="100px" style="margin-left:120px;">
                        <form class="login-container" action="" method='POST'>
                             <input type="text" placeholder="Tên tài khoản" Name="txtNd_taikhoan" required >
                             <input type="password" placeholder="Mật khẩu" Name="txtNd_matkhau" required>
                             <input type="submit"name="dangnhap" value="Đăng nhập">
                        </form>
						<div class="bottom-text w3_bottom_text">
							  <p style='margin-top:20px;'>Bạn chưa có tài khoản?<a href="?quanly=dangky">Đăng ký</a></p>
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

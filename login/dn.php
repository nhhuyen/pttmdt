<?php
//Khai báo sử dụng session
session_start();
 
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
  
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($nd_matkhau != $row['nd_matkhau']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    // $_SESSION['username'] = $username;
    // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    // die();
}
?>
<!-<!DOCTYPE html>
  <head>
    <title>May Bay</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
     <div class="header">
    <h1> BAY XA BAY CAO </h1>
    </div>
     <div class="container"> 
        <header id="header" class="">
            <h2>Xin Chào Các Bạn Đã Đến Với Cửa Hàng Của Chúng Tôi</h2>
            <h3>Vui Lòng Đăng Nhập</h3>
        <br>
        </header><!-- /header -->


        <form action='dn.php?do=login' method='POST'>
        
            <table >
                <tr>

                    <td>Tên đăng nhập</td>
                    <td><input type="text" placeholder="nhập tên đăng nhập" name="txtNd_taikhoan"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" placeholder="nhập mật khẩu" name="txtNd_matkhau"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="dangnhap" value="Đăng Nhập">
                        <input type="reset" value="Làm lại">
                        <a href="dk.php" target="_blank">Tạo Tài Khoản?</a>
                    </td>
                </tr>
            </table>
        </form> 
 
    </div>
      
  </body>
</html>
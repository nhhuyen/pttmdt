<!DOCTYPE html>
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


        <form action="dxuly.php" method="POST">
        
            <table >
                <tr>
                    <br>
                    <td>Tên đăng nhập</td>
                    <td><input type="text" name="txtNd_taikhoan" ></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="txtNd_matkhau"></td>
                </tr>
                <td>Họ và tên</td>
                    <td><input type="text" name="txtNd_ten"></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <input type="radio" name="txtNd_gioitinh" value="1">Nam
                        <input type="radio" name="txtNd_gioitinh" value="2">Nữ
                        <input type="radio" name="txtNd_gioitinh" value="0">Khác
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                   <td><input type="text" name="txtNd_diachi"></td>
                </tr>
                <tr>
                    <td>Email</td>
                   <td><input type="email" name="txtNd_mail"></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại (+84)</td>
                   <td><input type="number" name="txtNd_sdt"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="txtNd_phanquyen">
                            <option value="0">Thành Viên</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="dangky" value="Đăng kí">
                        <input type="reset"  name="reset" value="Làm lại">
                    </td>
                </tr>
            </table>
        </form>  
    </div>
</body>
</html>

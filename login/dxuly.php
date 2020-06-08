<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtNd_mail'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('kn.php');
          // 
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $nd_taikhoan  = $_POST['txtNd_taikhoan'];
    $nd_matkhau   = $_POST['txtNd_matkhau'];
    $nd_ten  = $_POST['txtNd_ten'];
    $nd_gioitinh  = $_POST['txtNd_gioitinh'];
    $nd_diachi     = $_POST['txtNd_diachi'];
    $nd_mail      = $_POST['txtNd_mail'];
    $nd_sdt        = $_POST['txtNd_sdt'];
    $nd_phanquyen      =0;


    
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if ($nd_taikhoan == '' || $nd_matkhau == '' || $nd_ten == ''|| $nd_gioitinh == '' || $nd_diachi == '' || $nd_mail == '' || $nd_sdt == '' || $nd_phanquyen == '')
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $nd_matkhau = md5($nd_matkhau);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows($conn->query("SELECT nd_taikhoan FROM nguoi_dung WHERE nd_taikhoan='$nd_taikhoan'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows($conn->query("SELECT nd_mail FROM nguoi_dung WHERE nd_mail='$nd_mail'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      //Lưu thông tin thành viên vào bảng
    //ID tự động tăng r nên k cần thêm
    $sql = "
        INSERT INTO nguoi_dung (
            nd_taikhoan,
            nd_matkhau,
            nd_ten,
            nd_gioitinh,
            nd_diachi,
            nd_mail,
            nd_sdt,
            nd_phanquyen
        )
        VALUES (
            '$nd_taikhoan',
            '$nd_matkhau',
            '$nd_ten',
            '$nd_gioitinh',
            '$nd_diachi',
            '$nd_mail',
            '$nd_sdt',
            '$nd_phanquyen'
        )
    ";
    // echo $sql;
    if($conn->query($sql)){
        echo 'Thành công';
    }
    // echo "Done";                         
    //Thông báo quá trình lưu
    // if ($addmember)
    // echo "Quá trình đăng ký thành công. <a href='home.php'>Về trang chủ</a>";
    //else
      //   echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>
<?php session_start(); 
 
if (isset($_SESSION['nd_taikhoan'])){
    unset($_SESSION['nd_taikhoan']); // xóa session login
}
    echo ". Bạn đã đăng xuất thành công. <meta http-equiv='refresh' content ='1;../../index.php'>";
?>

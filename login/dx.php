<?php session_start(); 
 
if (isset($_SESSION['nd_taikhoan'])){
    unset($_SESSION['nd_taikhoan']); // xóa session login
}
?>
<a href="tt.php">Trang Chủ</a>
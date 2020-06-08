<?php
// Thực hiện kết nối
    $conn = mysqli_connect('localhost', 'root', '','pttmdt') or die('No connect');
    $conn->set_charset('utf_8');
    $conn->query("SET NAMES 'utf8'");
	$conn->query("SET CHARACTER SET utf8");
	$conn->query("SET SESSION collation_connection = 'utf8_unicode_ci'");
// Kiểm tra kết nối thành công hay thất bại
// nếu thất bại thì thông báo lỗi
    // if (!$conn) {
    //     die("Kết nối thất bại: " . mysqli_connect_error());
    // }
     
    // // Thông báo kết nối thành công
    // echo "Kết nối thành công";

?>
<?php
$host="localhost"; // Mặc định là localhost
$uname="root";
$pass="";
$database = "pttmdt";
// Hàm bỏ qua lỗi kết nối
error_reporting(E_ALL ^ E_DEPRECATED);
// Xử lý kết nối database
$connection=mysql_pconnect($host,$uname,$pass) or die("Database Connection Failed");
// Xử lý lấy dữ liệu ngôn ngữ utf8
mysql_set_charset('utf8',$connection);
// Kết nối đến cơ sở dữ liệu
$selectdb=mysql_select_db($database) or die("Database could not be selected");
$result=mysql_select_db($database) or die("Database cannot be selected");
?>
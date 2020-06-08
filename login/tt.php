<?php session_start(); ?>
<!DOCTYPE html>
  <head>
    <title>May Bay</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
    <?php 
       if (isset($_SESSION['nd_taikhoan']) && $_SESSION['nd_taikhoan']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['nd_taikhoan']."<br/>";
           echo 'Click vào đây để <a href="dx.php">Đăng Xuất</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập'."<br/>";
           echo 'Click vào đây để <a href="dn.php">Đăng Nhập</a>';
       }
       ?>
<html>
<meta charset="utf-8"> 
<body>
<?php
//connect to mysql
   include "connect.php";

 $sql="select * from nguoi_dung where nd_taikhoan='".$_POST["taikhoan"]."' and nd_matkhau='". $_POST["matkhau"]."'";
 

 $res=mysql_query($sql,$conn)
  or die("query failed: " .mysql_error());
  $cnt = mysql_num_rows($res);
  mysql_free_result($res);
  mysql_close($conn);
  if($cnt<1){
	  echo"dang nnhap sai...";
  echo"<meta http-equiv='refresh' content ='3;index.php'>";}
		else{
		echo" <br> Đăng Nhap tài khoảng thành công..... <br>";
		echo"<meta http-equiv='refresh' content ='3;index.php'>";}
 ?>
 </body>
 </html>



?>
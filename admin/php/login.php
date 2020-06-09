
<?php
   include "../php/Connect.php";

 $sql="select * from nguoidung where email='".$_POST["taikhoan"]."' and matkhau='". $_POST["matkhau"]."'";
 

 $res=mysqli_query($conn,$sql)
  or die("query failed: " .mysqli_error());
  $cnt = mysqli_num_rows($res);
  mysqli_free_result($res);
  mysqli_close($conn);
  if($cnt<1){
	  echo"dang nnhap sai...";
  header("Location: http://localhost/ungdungtimnha/admin/login.php#");}
		else{
	
		  header("Location: http://localhost/ungdungtimnha/admin/index.php");}
 ?>
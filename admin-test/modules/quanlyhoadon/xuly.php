<?php
	include('../connect.php');
	
   $tt_ten =filter_input(INPUT_POST,"tt_ten");
	
   
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO dich_vu  VALUES(null,'".$dv_ten."','".$lv_ma."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=dichvu&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update hoa_don set tt_ma='$tt_ten'where hd_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=hoadon&ac=lietke');
	}else{
		$sql_xoa = "delete from dich_vu where dv_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=dichvu&ac=lietke');
	}
?>
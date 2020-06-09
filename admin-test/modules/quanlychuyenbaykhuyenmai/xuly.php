<?php
	include('../connect.php');
	$km_ma =filter_input(INPUT_POST,"km_ma");
   $cb_ma =filter_input(INPUT_POST,"cb_ma");
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO tuyenbay_khuyenmai  VALUES('".$km_ma."','".$cb_ma."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=chuyenbaykhuyenmai&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update tuyenbay_khuyenmai set km_ma='$km_ma',tb_ma='$cb_ma' where km_ma='$_GET[id]' and tb_ma='$_GET[macb]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=chuyenbaykhuyenmai&ac=lietke');
	}else{
		$sql_xoa = "delete from tuyenbay_khuyenmai where km_ma = $_GET[id] and tb_ma = $_GET[macb]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=chuyenbaykhuyenmai&ac=lietke');
	}
?>

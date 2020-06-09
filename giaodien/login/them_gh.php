<?php 
	$nd_taikhoan=$_GET['nd_taikhoan'];
	echo $nd_taikhoan;
	include('../../modules/connect.php');
	$sql="select * from nguoi_dung where nd_taikhoan= '$nd_taikhoan'";
	$row=mysql_query($sql);
	$result=mysql_fetch_array($row);
	$nd_ma=$result['nd_ma'];
	
	$sqlgh="insert into gio_hang value('$nd_ma','$nd_ma');";
	$rowgh=mysql_query($sqlgh);
	header('location:../../index.php?quanly=dangnhap');
?>
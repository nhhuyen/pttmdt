<?php
	include('../connect.php');
	$mb_ma =$_POST['mb_ma'];
    $lv_ma =$_POST['lv_ma'];
	$so_luong =$_POST['so_luong'];

	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO chitiet_ghe VALUES('{$lv_ma}','{$mb_ma}','{$so_luong}')";		 
		mysql_query($sql_them);
		header('location:../../index.php?quanly=chitietghe&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua	
			
		$sql_sua = "update chitiet_ghe set lv_ma='$lv_ma', mb_ma='$mb_ma',so_luong='$so_luong' where mb_ma = $_GET[id] and lv_ma = $_GET[id1]";
		
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=chitietghe&ac=lietke');
	}else{
	
		$sql_xoa = "delete from chitiet_ghe where mb_ma=$_GET[id] and lv_ma=$_GET[id1]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=chitietghe&ac=lietke');
	}
?>

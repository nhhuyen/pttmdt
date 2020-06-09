<?php
	include('../connect.php');
	$hl_mota =filter_input(INPUT_POST,"hl_mota");
	$hl_gia =filter_input(INPUT_POST,"hl_gia");
	
   
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO hanh_ly VALUES(null,'".$hl_mota."','".$hl_gia."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=hanhly&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update hanh_ly set hl_mota='$hl_mota',hl_gia='$hl_gia' where hl_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=hanhly&ac=lietke');
	}else{
		$sql_xoa = "delete from hanh_ly where hl_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=hanhly&ac=lietke');
	}
?>

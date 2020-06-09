<?php
	include('../connect.php');
	$tg_ten =filter_input(INPUT_POST,"tg_ten");
	$tg_donvi =filter_input(INPUT_POST,"tg_donvi");
	$tg_tigia =filter_input(INPUT_POST,"tg_tigia");
   
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO ti_gia  VALUES(null,'".$tg_ten."','".$tg_donvi."','".$tg_tigia."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=tigia&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update ti_gia set tg_ten='$tg_ten',tg_donvi='$tg_donvi',tg_tigia='$tg_tigia' where tg_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=tigia&ac=lietke');
	}else{
		$sql_xoa = "delete from ti_gia where tg_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=tigia&ac=lietke');
	}
?>

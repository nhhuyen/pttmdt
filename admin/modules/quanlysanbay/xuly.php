<?php
	include('../connect.php');
	$sb_ten =filter_input(INPUT_POST,"sb_ten");
    $sb_diachi =filter_input(INPUT_POST,"sb_diachi");
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO san_bay  VALUES(null,'".$sb_ten."','".$sb_diachi."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=sanbay&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update san_bay set sb_ten='$sb_ten',sb_diachi='$sb_diachi' where sb_ma='$_GET[id]'";
		
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=sanbay&ac=lietke');
	}else{
		$sql_xoa = "delete from san_bay where sb_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=sanbay&ac=lietke');
	}
?>

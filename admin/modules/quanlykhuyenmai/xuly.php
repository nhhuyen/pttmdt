<?php
	include('../connect.php');
	$km_ten =filter_input(INPUT_POST,"km_ten");
   $km_tgbatdau =filter_input(INPUT_POST,"km_tgbatdau");
    $km_tgketthuc =filter_input(INPUT_POST,"km_tgketthuc");
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO khuyen_mai  VALUES(null,'".$km_ten."','".$km_tgbatdau."','".$km_tgketthuc."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=khuyenmai&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update khuyen_mai set km_ten='$km_ten',km_tgbatdau='$km_tgbatdau',km_tgketthuc='$km_tgketthuc' where km_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=khuyenmai&ac=lietke');
	}else{
		$sql_xoa = "delete from khuyen_mai where km_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=khuyenmai&ac=lietke');
	}
?>

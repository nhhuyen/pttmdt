<?php
	include('../connect.php');
	$mb_ten =filter_input(INPUT_POST,"mb_ten");
    $mb_soghe =filter_input(INPUT_POST,"mb_soghe");
	$mb_namsanxuat =filter_input(INPUT_POST,"mb_namsanxuat");
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO may_bay  VALUES(null,'".$mb_ten."','".$mb_soghe."','".$mb_namsanxuat."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=maybay&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update may_bay set mb_ten='$mb_ten',mb_soghe='$mb_soghe',mb_namsanxuat='$mb_namsanxuat' where mb_ma='$_GET[id]'";
		
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=maybay&ac=lietke');
	}else{
		$sql_xoa = "delete from may_bay where mb_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=maybay&ac=lietke');
	}
?>

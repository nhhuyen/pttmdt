<?php
	include('../connect.php');
	$lv_ten =filter_input(INPUT_POST,"tenloaive");
   
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO loai_ve  VALUES(null,'".$lv_ten."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=loaive&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update loai_ve set lv_ten='$lv_ten' where lv_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=loaive&ac=lietke');
	}else{
		$sql_xoa = "delete from nguoi_dung where nd_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=nguoidung&ac=lietke');
	}
?>

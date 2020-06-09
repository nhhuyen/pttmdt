<?php
	include('../connect.php');
	$dv_ten =filter_input(INPUT_POST,"tendichvu");
   $lv_ma =filter_input(INPUT_POST,"maloaive");
	
   
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO dich_vu  VALUES(null,'".$dv_ten."','".$lv_ma."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=dichvu&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update dich_vu set dv_ten='$dv_ten',lv_ma='$lv_ma'where dv_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=dichvu&ac=lietke');
	}else{
		$sql_xoa = "delete from dich_vu where dv_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=dichvu&ac=lietke');
	}
?>

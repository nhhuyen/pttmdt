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
		$sql_sua = "update loai_ve set lv_ten='$lv_ten' where lv_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=loaive&ac=lietke');
	}else{
		$sql_xoa = "delete from loai_ve where lv_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=loaive&ac=lietke');
	}
?>

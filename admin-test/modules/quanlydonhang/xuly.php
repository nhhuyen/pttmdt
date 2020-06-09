<?php
	include('../connect.php');
	$tt_ten =filter_input(INPUT_POST,"tt_ten");
    $hd_ma =filter_input(INPUT_POST,"hd_ma");
	if(isset($_POST['sua'])){
		//sua
		$sql_sua = "update trang set tt_ten='$tt_ten' where hd_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=donhang&ac=lietke');
	}else{
		$sql_xoa = "delete from donhang where hd_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=donhang&ac=lietke');
	}

?>
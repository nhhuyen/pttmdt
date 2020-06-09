<?php
	include('../connect.php');
	$cb_ma =$_POST['cb_ma'];
    $lv_ma =$_POST['lv_ma'];
	$gia =$_POST['gia'];
	$lv_ma2 =$_POST['lv_ma2'];
	$gia2 =$_POST['gia2'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO gia VALUES('{$cb_ma}','{$lv_ma}','{$gia}')";		 
		mysql_query($sql_them);
		$sql_them="INSERT INTO gia VALUES('{$cb_ma}','{$lv_ma2}','{$gia2}')";		 
		mysql_query($sql_them);
		header('location:../../index.php?quanly=gia&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua	
			
		$sql_sua = "update gia set cb_ma='$cb_ma',lv_ma='$lv_ma',gia='$gia' where cb_ma = $_GET[id] and lv_ma = $_GET[id1]";
		
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=gia&ac=lietke');
	}else{
	
		$sql_xoa = "delete from gia where cb_ma=$_GET[id] and lv_ma=$_GET[id1]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=gia&ac=lietke');
	}
?>

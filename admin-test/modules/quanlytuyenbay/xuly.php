<?php
	include('../connect.php');
	
	$tb_ts=$_POST['tb_tansuat'];
	$tb_hanhtrinh=filter_input(INPUT_POST,"tb_hanhtrinh");
	$sb_ma_di=filter_input(INPUT_POST,"sb_ma_di");
	$sql="select * from san_bay where sb_ma = $sb_ma_di";
	$result=mysql_query($sql);
	while ($dong=mysql_fetch_array($result)){
		$sb_ten_di=$dong['sb_diachi'];
	}
	$sb_ma_den=filter_input(INPUT_POST,"sb_ma_den");
	$sql="select * from san_bay where sb_ma = $sb_ma_den";
	$result=mysql_query($sql);
	while ($dong=mysql_fetch_array($result)){
		$sb_ten_den=$dong['sb_diachi'];
	}
	$tb_ten = $sb_ten_di.' - '.$sb_ten_den;
	if(isset($_POST['them'])){
		//them
		$tb_tansuat='';
		if(sizeof($tb_ts)==7){
			$tb_tansuat="Hàng ngày";
		}
		else{
			for ($i=0; $i<sizeof ($tb_ts);$i++) {  
				if($i<sizeof($tb_ts)-1){
					$tb_tansuat=$tb_tansuat.$tb_ts[$i].", ";
				}
				else{
					$tb_tansuat=$tb_tansuat.$tb_ts[$i];
				}
			}
		}
											
		$sql_them="INSERT INTO tuyen_bay VALUES(null,'".$tb_ten."','".$tb_tansuat."','".$tb_hanhtrinh."','".$sb_ma_di."','".$sb_ma_den."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=tuyenbay&ac=lietke');
		
	}elseif(isset($_POST['sua'])){
		//sua
		$tb_tansuat='';
		if(sizeof($tb_ts)==7){
			$tb_tansuat="Hàng ngày";
		}
		else{
			for ($i=0; $i<sizeof ($tb_ts);$i++) {  
				if($i<sizeof($tb_ts)-1){
					$tb_tansuat=$tb_tansuat.$tb_ts[$i].", ";
				}
				else{
					$tb_tansuat=$tb_tansuat.$tb_ts[$i];
				}
			}
		}
		$sql_sua = "update tuyen_bay set tb_ten='$tb_ten',tb_tansuat='$tb_tansuat',tb_hanhtrinh='$tb_hanhtrinh',sb_ma_di='$sb_ma_di',sb_ma_den='$sb_ma_den' where tb_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=tuyenbay&ac=lietke');
	}else{
		//xoa
		$sql_xoa = "delete from tuyen_bay where tb_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=tuyenbay&ac=lietke');
	}
?>

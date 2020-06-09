<?php
	include('../connect.php');
	$tb_ma =filter_input(INPUT_POST,"tb_ma");
	$cb_thoidiem =filter_input(INPUT_POST,"cb_thoidiem");
    $cb_tinhtrang =filter_input(INPUT_POST,"cb_tinhtrang");
    $cb_giocatcanh_dukien=filter_input(INPUT_POST,"cb_giocatcanh_dukien");
    $cb_giocatcanh_chinhthuc =filter_input(INPUT_POST,"cb_giocatcanh_chinhthuc");
	
	$sql="select * from tuyen_bay where tb_ma = $tb_ma";
	$result=mysql_query($sql);
	while ($dong=mysql_fetch_array($result)){
		$tb_hanhtrinh=$dong['tb_hanhtrinh'];
	}
	
	$cb_giohacanh_dukien = date('H:i',strtotime($cb_giocatcanh_dukien) + $tb_hanhtrinh*60*60);
	$cb_giohacanh_chinhthuc = date('H:i',strtotime($cb_giocatcanh_chinhthuc) + $tb_hanhtrinh*60*60);	
	$hv_ma =filter_input(INPUT_POST,"hv_ma");
	$mb_ma =filter_input(INPUT_POST,"mb_ma");
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO chuyen_bay  VALUES(null,'".$cb_thoidiem."','".$cb_tinhtrang."','".$cb_giocatcanh_dukien."'
		,'".$cb_giohacanh_dukien."','".$cb_giocatcanh_chinhthuc."','".$cb_giohacanh_chinhthuc."','".$tb_ma."','".$hv_ma."','".$mb_ma."')";
		mysql_query($sql_them);
		
		$result_cb=mysql_query('SELECT * FROM `chuyen_bay` inner join chitiet_ghe on chuyen_bay.mb_ma = chitiet_ghe.mb_ma order by cb_ma DESC limit 2');
				while ($dong=mysql_fetch_array($result_cb)){
					$cb_ma= $dong['cb_ma'];
					$lv_ma= $dong['lv_ma'];
					$mb_ma= $dong['mb_ma'];
					$so_luong = $dong['so_luong'];
					$sql_them=mysql_query("INSERT INTO ghe_chuyen values('{$cb_ma}','{$lv_ma}','{$mb_ma}','{$so_luong}')");			
				}		
				header('location:../../index.php?quanly=gia&ac=them&cb_ma=$cb_ma');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update chuyen_bay set cb_thoidiem='$cb_thoidiem',cb_tinhtrang='$cb_tinhtrang',cb_giocatcanh_dukien='$cb_giocatcanh_dukien',
		 cb_giohacanh_dukien='$cb_giohacanh_dukien',cb_giocatcanh_chinhthuc='$cb_giocatcanh_chinhthuc',cb_giohacanh_chinhthuc='$cb_giohacanh_chinhthuc',
		 tb_ma='$tb_ma',hv_ma='$hv_ma',mb_ma='$mb_ma'
		where cb_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=chuyenbay&ac=lietke');
	}else{
		$sql_xoa = "delete from chuyen_bay where cb_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=chuyenbay&ac=lietke');
	}
?>

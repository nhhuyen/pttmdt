<?php
	include('../connect.php');
	$cb_thoidiem =filter_input(INPUT_POST,"cb_thoidiem");
   $cb_tinhtrang =filter_input(INPUT_POST,"cb_tinhtrang");
     $cb_giocatcanh_dukien=filter_input(INPUT_POST,"cb_giocatcanh_dukien");
    $cb_giohacanh_dukien =filter_input(INPUT_POST,"cb_giohacanh_dukien");
	   $cb_giocatcanh_chinhthuc =filter_input(INPUT_POST,"cb_giocatcanh_chinhthuc");
	   $cb_giohacanh_chinhthuc =filter_input(INPUT_POST,"cb_giohacanh_chinhthuc");
	      $tb_ma =filter_input(INPUT_POST,"tb_ma");
		   $hv_ma =filter_input(INPUT_POST,"hv_ma");
		    $mb_ma =filter_input(INPUT_POST,"mb_ma");
			 
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO chuyen_bay  VALUES(null,'".$cb_thoidiem."','".$ $cb_tinhtrang."','".$cb_giocatcanh_dukien."'
		,'".$cb_giohacanh_dukien."','".$cb_giocatcanh_chinhthuc."','".$cb_giohacanh_chinhthuc."','".$tb_ma."','".$hv_ma."','".$mb_ma."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=chuyenbay&ac=lietke');
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

<?php
	include('../connect.php');
	$tt_tieude =filter_input(INPUT_POST,"tt_tieude");
   $tt_noidung =filter_input(INPUT_POST,"tt_noidung");
   	$hinhanh=$_FILES['tt_hinhanh']['name'];
	$hinhanh_tmp=$_FILES['tt_hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'../../images/'.$hinhanh);
	$tt_hinhanh=$sever.$hinhanh;
	 $tt_mota =filter_input(INPUT_POST,"tt_mota");
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO tin_tuc  VALUES(null,'".$tt_tieude."','".$tt_noidung."',1,'".$tt_hinhanh."','".$tt_mota."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=tintuc&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update tin_tuc set tt_tieude='$tt_tieude',tt_noidung='$tt_noidung',tt_hinhanh='$tt_hinhanh',tt_mota='$tt_mota'
	  where tt_ma='$_GET[id]'";
		}else{
			  $sql_sua = "update tin_tuc set tt_tieude='$tt_tieude',tt_noidung='$tt_noidung',tt_mota='$tt_mota'
	  where tt_ma='$_GET[id]'";
		}
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=tintuc&ac=lietke');
	}else{
		$sql_xoa = "delete from tin_tuc where tt_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=tintuc&ac=lietke');
	}
?>

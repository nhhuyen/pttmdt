<?php
	include('../connect.php');
	$hv_ten =filter_input(INPUT_POST,"hv_ten");
    $hv_kihieu =filter_input(INPUT_POST,"hv_kihieu");
	$hinhanh=$_FILES['hv_hinh']['name'];
	$hinhanh_tmp=$_FILES['hv_hinh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'../../image/'.$hinhanh);  
	$hv_hinh=$sever.$hinhanh;
	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO hang_ve  VALUES(null,'".$hv_ten."','".$hv_kihieu."','".$hv_hinh."')";
		mysql_query($sql_them);
		header('location:../../index.php?quanly=hangve&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update hang_ve set hv_ten='$hv_ten', hv_kihieu='$hv_kihieu', hv_hinh='$hv_hinh' where hv_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=hangve&ac=lietke');
	}else{
		$sql_xoa = "delete from hang_ve where hv_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=hangve&ac=lietke');
	}
?>

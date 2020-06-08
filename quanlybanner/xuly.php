<?php
	
	header("Content-type: text/html; charset=utf-8");
	$conn=mysql_connect('127.0.0.1','root','')
	or die(mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
	or die(mysql_error());
	mysql_set_charset('UTF8',$conn);
	$sever="localhost/pttmdt/quanlybanner/image/";

	$bn_tieude =filter_input(INPUT_POST,"bn_tieude");
	$hinhanh=$_FILES['bn_hinh']['name'];
	$hinhanh_tmp=$_FILES['bn_hinh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'image/'.$hinhanh);
	$bn_hinh=$sever.$hinhanh;
    	
	if(isset($_POST['them'])){
		//them
		$sql_them="INSERT INTO banner  VALUES(null,'".$bn_tieude."','".$bn_hinh."')";
		mysql_query($sql_them);
	//	header('location:../../index.php?quanly=banner&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update banner set bn_tieude='$bn_tieude',bn_hinh='$bn_hinh' where bn_ma='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=banner&ac=lietke');
	}else{
		$sql_xoa = "delete from banner where bn_ma = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=banner&ac=lietke');
	}
?>
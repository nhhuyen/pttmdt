<?php 
	session_start();
	include('../modules/connect.php');
	$pdv_ma=$_SESSION['pdv_ma'];
	$sql="select * from phieu_dat_ve inner join ve_may_bay on phieu_dat_ve.pdv_ma=ve_may_bay.pdv_ma
											inner join nguoi_dung on phieu_dat_ve.nd_ma = nguoi_dung.nd_ma
											inner join loai_ve on ve_may_bay.lv_ma = loai_ve.lv_ma
											inner join chuyen_bay on ve_may_bay.cb_ma= chuyen_bay.cb_ma
											inner join hanh_ly on ve_may_bay.hl_ma = hanh_ly.hl_ma
											where phieu_dat_ve.pdv_ma=$pdv_ma";
			$result = mysql_query($sql);
			
			$i=0;
			$tong_hl=0;
			while($dong=mysql_fetch_array($result)){
				$tong_hl+=$dong['hl_gia'];
				$tong_ve=$dong['pdv_tongve'];
			}
	$sqlhl="update phieu_dat_ve set pdv_tonghl=$tong_hl where pdv_ma=$pdv_ma";
	$resulthl=mysql_query($sqlhl);		
	$tongtien = $tong_hl + $tong_ve - $_SESSION['gg'];
	
	$sql="insert into hoa_don value(null,'{$tongtien}',now(),'{$pdv_ma}',1)";
	$result=mysql_query($sql);
	echo "<meta http-equiv='refresh' content='1;trangthanhtoan.php'>";
?>
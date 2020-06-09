<?php 
	session_start();
	include('../modules/connect.php');
	$nd_ma=$_SESSION['nd_ma'];
	$sql="select * from phieu_dat_ve inner join hoa_don on phieu_dat_ve.pdv_ma=hoa_don.pdv_ma
										inner join nguoi_dung on phieu_dat_ve.nd_ma = nguoi_dung.nd_ma
					where nguoi_dung.nd_ma = $nd_ma";										
			$result = mysql_query($sql);
			
			$i=0;
			$tong_hd=0;
			while($dong=mysql_fetch_array($result)){
				$tong_hd+=$dong['hd_tongtien'];
			}
			if($tong_hd>=10000000){
				$sqlhl="update nguoi_dung set nd_vip=1 where nd_ma=$nd_ma";
				$resulthl=mysql_query($sqlhl);
			}
	echo "<meta http-equiv='refresh' content='1;trangthanhtoan.php'>";
?>
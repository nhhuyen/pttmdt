<!--<?php
	header("Content-type: text/html; charset=utf-8");
	$conn=mysql_connect('127.0.0.1','root','')
	or die(mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
	or die(mysql_error());
	mysql_set_charset('UTF8',$conn);
?> -->

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Liệt kê</title>
	<link rel="stylesheet" type="text/css" href="xulydonhang.css">
</head>

<body>

	<form action="tim_kiem.php" style="text-align:right">
      <input type="text" placeholder="Nhập mã hóa đơn để tìm..." required name="search">
      <button type="submit" name="tim">Tìm</button>
  


	<br>
	<?php 
		if (isset($_REQUEST['tim'])) 
		{
			$search = addslashes($_GET['search']);
			$sql = "select * from hoa_don inner join phieu_dat_ve on hoa_don.pdv_ma = phieu_dat_ve.pdv_ma 
				inner join nguoi_dung on nguoi_dung.nd_ma = phieu_dat_ve.nd_ma 
				inner join trang_thai on trang_thai.tt_ma = hoa_don.tt_ma 
				where hd_ma like '%$search%' ";
			$result = mysql_query($sql,$conn)
				or die(mysql_error());
			$num = mysql_num_rows($result);
			if($num>0){
	?>
				<div id="main" class="clearFix">
				<?php
					while($row=mysql_fetch_array($result)){
						$ma_sp=$row['ma_sp'];
				?>
				<a class="item" href="chi_tiet_sp.php?&ma_sp=<?php echo $ma_sp;?>">
					
					<?php echo "<img src='data:image;base64,".base64_encode($row["hinh_anh"])."' alt=''>"?>
					<p id="tensp"><?php echo $row['ten_sp'] ?></p>
					
					<span style="color:red"><?php echo $row['gia'].' đồng'?><span>
				
				</a>
			<?php
				}
			echo "</div>";
		}
		else
		{
			echo "Không tìm thấy ...";
		}
	}
?>
</form>
<?php
	$sql_lietketienich="select * from hoa_don inner join phieu_dat_ve on hoa_don.pdv_ma = phieu_dat_ve.pdv_ma 
				inner join nguoi_dung on nguoi_dung.nd_ma = phieu_dat_ve.nd_ma";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
	<table class="t1" width= "80%" border="1">
		
		<tr class="tieude">
			
			<th>Khách hàng</th>
			<th>Đơn hàng</th>
			<th>Tổng tiền</th>
			<th>Trạng thái</th>
			<th colspan="2">Tùy chọn</th>
		</tr>
		
		<?php
			$i=1;
			while($dong=mysql_fetch_array($row_lietketienich)){
		?>
		<tr>
			
			<td><?php echo $dong['nd_ten'] ?></td>
			<td><?php echo $dong['hd_ma'] ?></td>
			<td><?php echo $dong['hd_tongtien'] ?></td>
			<td><?php echo $dong['tt_ten'] ?></td>
			
			<td width="45px" ><a href="index.php?quanly=donhang&ac=sua&id=<?php echo $dong['hd_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
			<td width="45px" ><a href="modules/quanlydonhang/xuly.php?id=<?php echo $dong['hd_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
			
		</tr>
		<?php
			$i++;
		}
		?>
	</table>
	<br>

	



</body>
</html>
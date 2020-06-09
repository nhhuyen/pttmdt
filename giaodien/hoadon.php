<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="../css/hoadon.css">

<?php
 include('../modules/connect.php');
	include('head/head.php');
	include('head/menu.php');
	$nd_ma = $_SESSION['nd_ma'];
	
	$sql1="select * from hoa_don inner join phieu_dat_ve on phieu_dat_ve.pdv_ma=hoa_don.pdv_ma
								inner join nguoi_dung on nguoi_dung.nd_ma=phieu_dat_ve.nd_ma 
								where nguoi_dung.nd_ma = $nd_ma order by hoa_don.hd_ma DESC limit 1";
	$result1=mysql_query($sql1);
	while($dong = mysql_fetch_array($result1)){  
?>

</head>
<body>
<div id="page" class="page">
    <div class="header">
        <div ><img class="logo_hd"  src="../hinhanh/logo_mb.png"/>
        <p style='float:right'>Số HĐ: <?php echo $dong['hd_ma'] ?></p></div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN ĐIỆN TỬ
        <br/>
  </div>





<table style="width:100%;"border="0" cellpadding="2">
<tr>

 <td style="width:100px;">Họ và tên:</td><td><input style='border:0;' readonly type="text" name="nd_ten" value="<?php echo $dong['nd_ten']; ?>" style="width:400px;"></td>
</tr>
<tr><td>Điện thoại:</td><td><input style='border:0;' type="text" readonly name="nd_sdt" value="<?php echo $dong['nd_sdt']; ?>" style="width:400px;"></td></tr>
<tr><td>Email:</td><td><input style='border:0;' type="text" readonly name="nd_email" value="<?php echo $dong['nd_mail']; ?>" style="width:400px;"></td></tr>
<tr><td>Địa chỉ:</td><td><input style='border:0;' type="text" readonly name="nd_diachi" value="<?php echo $dong['nd_diachi']; ?>" style="width:400px;"></td></tr>

</table>






	<?php } ?>
  <br/>
  <br/>
  <table class="TableData">
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Thành tiền</th>
    </tr>
	
    <?php
	$tongsotien = 0;
    $pos = 1;
    $tongsotien = 0;
	$sql='select * from hoa_don inner join phieu_dat_ve on phieu_dat_ve.pdv_ma=hoa_don.pdv_ma';
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){  
        
        echo "<tr>";
        echo "<td class=\"cotSTT\">1</td>";
        echo "<td class=\"cotTenSanPham\">Tổng giá vé</td>";
        echo "<td class=\"cotGia\">".number_format($row['pdv_tongve']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "<td class=\"cotSoLuong\">1</td>";
        echo "<td class=\"cotSo\">".number_format($row['pdv_tongve']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "</tr>"; 
		
		echo "<tr>";
        echo "<td class=\"cotSTT\">2</td>";
        echo "<td class=\"cotTenSanPham\">Tổng giá hành lý</td>";
        echo "<td class=\"cotGia\">".number_format($row['pdv_tonghl']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "<td class=\"cotSoLuong\">1</td>";
        echo "<td class=\"cotSo\">".number_format($row['pdv_tonghl']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "</tr>"; 
		
		echo "<tr>";
        echo "<td class=\"cotSTT\">3</td>";
        echo "<td class=\"cotTenSanPham\">Giảm giá</td>";
        echo "<td class=\"cotGia\">".number_format($_SESSION['gg']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "<td class=\"cotSoLuong\">1</td>";
        echo "<td class=\"cotSo\">".number_format($_SESSION['gg']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</td>";
        echo "</tr>"; 
?>


    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo number_format(($row['pdv_tongve']+$row['pdv_tonghl']-$_SESSION['gg'])*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']?></td>
    </tr>
  </table>
<?php }

?>  
    <?php
  function sw_get_current_weekday() {
date_default_timezone_set('Asia/Ho_Chi_Minh');
	$weekday = date("l");
	$weekday = strtolower($weekday);
	switch($weekday) {
		case 'monday':
			$weekday = 'Thứ hai';
			break;
		case 'tuesday':
			$weekday = 'Thứ ba';
			break;
		case 'wednesday':
			$weekday = 'Thứ tư';
			break;
		case 'thursday':
			$weekday = 'Thứ năm';
			break;
		case 'friday':
			$weekday = 'Thứ sáu';
			break;
		case 'saturday':
			$weekday = 'Thứ bảy';
			break;
		default:
			$weekday = 'Chủ nhật';
			break;
	}
	return $weekday.' ,ngày '.date('d/m/Y');
}
?>
  
  <div style='float:right;margin-top:20px;'> Cần Thơ - <?php echo sw_get_current_weekday(); ?>
  
   </div>
  
</div>
</body>
</html>
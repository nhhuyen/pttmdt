<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="style.css">

<?php
 include('conn.php');
?>

</head>
<body>
<div id="page" class="page">
    <div class="header">
        <!--<div class="logo"><img src="../images/logo.jpg"/></div>-->
        <div class="company">Sky Small</div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
  </div>
  <br/>
  <br/>
  <table class="TableData">
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Đơn giá</th>
      <th>Số</th>
      <th>Thành tiền</th>
    </tr>
	
    <?php
	$tongsotien = 0;
    $pos = 1;
    $tongsotien = 0;
	$sql='select * from giohang';
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){  
        $tongsotien += $row['sp_soluong']*$row['sp_dongia'];
        echo "<tr>";
        echo "<td class=\"cotSTT\">".$pos++."</td>";
        echo "<td class=\"cotTenSanPham\">".$row['sp_ten']."</td>";
        echo "<td class=\"cotGia\">".number_format($row['sp_dongia'],0,",",".")."</td>";
        echo "<td class=\"cotSoLuong\">".$row['sp_soluong']."</td>";
        echo "<td class=\"cotSo\">".number_format(($row['sp_soluong']*$row['sp_dongia']),0,",",".")."</td>";
        echo "</tr>";     
}

?>


    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo number_format(($tongsotien),0,",",".")?></td>
    </tr>
  </table>
  
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
	return $weekday.' Ngày '.date('d/m/Y');
}
?>
  
  <div class="footer"> Cần thơ,<?php echo sw_get_current_weekday(); ?>
  
   </div>
  
</div>
</body>
</html>
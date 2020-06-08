<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thêm tuyến bay</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>

<div class="button_themsp">
<a href="index.php?quanly=tuyenbay&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlytuyenbay/xuly.php" method="post" enctype="multipart/form-data">

<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">THÊM TUYẾN BAY</td>
  </tr>
  <tr>
	<td width="97">Tần suất bay</td>
	<td width="87">
	
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 2'>Thứ 2
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 3'>Thứ 3
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 4'>Thứ 4
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 5'>Thứ 5
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 6'>Thứ 6
		<input type="checkbox" name="tb_tansuat[]"  value='Thứ 7'>Thứ 7
		<input type="checkbox" name="tb_tansuat[]"  value='Chủ nhật'>Chủ nhật
	
	</td>
  </tr>
  <tr>
	<td width="97">Hành trình</td>
	<td width="87"><input type="time" name="tb_hanhtrinh"></td>
  </tr>
  <tr>
	<td width="97">Sân bay đi</td>
	<td width="87">
	<div class="box">
	<div class="select-box">
	<select name="sb_ma_di" required>
	<?php
	include ('../connect.php');
		$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
		while ($rowdv = mysql_fetch_array($resultdv)){
			echo "<option value='".$rowdv['sb_ma']."'>".$rowdv['sb_ten']."</option>";}
	?>
	</select>
	</td>
  </tr>
  <tr>
	<td width="97">Sân bay đến</td>
	<td width="87">
	<div class="box">
	<div class="select-box">
	<select name="sb_ma_den" required>
	<?php
		$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
		while ($rowdv = mysql_fetch_array($resultdv)){
			echo "<option value='".$rowdv['sb_ma']."'>".$rowdv['sb_ten']."</option>";}
	?>
	</select>
	</div>
	</div>
	</td>
  </tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from san_bay where sb_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=sanbay&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlysanbay/xuly.php?id=<?php echo $dong['sb_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">SỬA SÂN BAY</td>
  </tr>
  <tr>
    <td width="97">Tên sân bay</td>
    <td width="87"><input type="text" name="sb_ten" value="<?php echo $dong['sb_ten'] ?>"></td>
  </tr>
  <tr>
	<td width="97">Địa chỉ</td>
    <td width="87"><input type="int" name="sb_diachi" value="<?php echo $dong['sb_diachi'] ?>"></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



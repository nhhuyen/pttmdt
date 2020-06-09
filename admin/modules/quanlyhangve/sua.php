<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from hang_ve where hv_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=hangve&ac=lietke">Liệt Kê</a> 
</div>
<form action="modules/quanlyhangve/xuly.php?id=<?php echo $dong['hv_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Sửa Hãng Vé</td>
  </tr>
   <tr>
    <td width="97">Tên hãng vé</td>
    <td width="87"><input type="text" name="hv_ten" value="<?php echo $dong['hv_ten'] ?>"></td>
  </tr>
   <tr>
    <td width="97">Kí hiệu hãng vé</td>
    <td width="87"><input type="text" name="hv_kihieu" value="<?php echo $dong['hv_kihieu'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Hình hãng vé</td>
	<td width="87"><img src="<?php echo $dong['hv_hinh'] ?>" width="80" height="80" /><br>
	<input type="file" name="hv_hinh"></td>
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



<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from khuyen_mai where km_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=khuyenmai&ac=lietke">Liệt kê sp</a> 
</div>
<form action="modules/quanlykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Sửa khuyến mãi</td>
  </tr>
  <tr>
    <td width="97">Tên khuyến mãi</td>
    <td width="87"><input type="text" name="km_ten" value="<?php echo $dong['km_ten'] ?>"></td>
  </tr>
    <tr>
    <td width="97">Thời gian bắt đầu</td>
    <td width="87"><input type="date" name="km_tgbatdau" value="<?php echo $dong['km_tgbatdau'] ?>"></td>
  </tr>
    <tr>
    <td width="97">Thời gian kết thúc</td>
    <td width="87"><input type="date" name="km_tgketthuc" value="<?php echo $dong['km_tgketthuc'] ?>"></td>
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



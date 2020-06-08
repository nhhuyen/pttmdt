<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from tin_tuc where tt_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=tintuc&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlytintuc/xuly.php?id=<?php echo $dong['tt_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Sửa tin tức</td>
  </tr>
  <tr>
    <td width="97">Tiêu đề</td>
    <td width="87"><input type="text" name="tt_tieude" value="<?php echo $dong['tt_tieude'] ?>"></td>
  </tr>
    <tr>
    <td>Nội dung</td>
    <td><textarea name="tt_noidung" cols="40" rows="10"><?php echo $dong['tt_noidung'] ?></textarea></td>
  </tr>
  <tr>
   <tr>
    <td width="97">Mô tả</td>
    <td width="87"><input type="text" name="tt_mota" value="<?php echo $dong['tt_mota'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="tt_hinhanh" /><img src="<?php echo $dong['tt_hinhanh'] ?>" width="80" height="80" /> 
  </tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=tintuc&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlytintuc/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Thêm tin tức</td>
  </tr>
  <tr>
    <td width="97">Tiêu đề</td>
    <td width="87"><input type="text" name="tt_tieude"></td>
  </tr>
 
    <tr>
    <td>Nội dung </td>
    <td><textarea name="tt_noidung" cols="40" rows="10"></textarea></td>
  </tr>
   <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="tt_hinhanh" /></td>
  </tr>
  <tr>
    <td width="97">Mô tả</td>
    <td width="87"><input type="text" name="tt_mota"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



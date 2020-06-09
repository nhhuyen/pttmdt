<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=hangve&ac=lietke">Liệt kê</a>
</div>
<form action="modules/quanlyhangve/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">THÊM HÃNG VÉ</td>
  </tr>
   <tr>
    <td width="97">Tên hãng vé</td>
    <td width="87"><input type="text" name="hv_ten"></td>
  </tr>
   <tr>
    <td width="97">Kí hiệu hãng vé</td>
    <td width="87"><input type="text" name="hv_kihieu"></td>
  </tr>
  <tr>
    <td width="97">Hình hãng vé</td>
    <td width="87"><input type="file" name="hv_hinh"></td>
  </tr>
   
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



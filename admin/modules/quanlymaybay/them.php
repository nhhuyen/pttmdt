<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=maybay&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlymaybay/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">THÊM MÁY BAY</td>
  </tr>
  <tr>
    <td width="97">Tên máy bay</td>
    <td width="87"><input type="text" name="mb_ten"></td>
  </tr>
  <tr>
	<td width="97">Số ghế</td>
	<td width="87"><input type="int" name="mb_soghe"></td>
  </tr>
  <tr>
	<td width="97">Năm sản xuất</td>
    <td width="87"><input type="int" name="mb_namsanxuat"></td>
  </tr>
   
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



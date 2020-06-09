<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=khuyenmai&ac=lietke">Liệt kê </a> 
</div>
<form action="modules/quanlykhuyenmai/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Thêm Khuyến mãi</td>
  </tr>
  <tr>
    <td width="97">Tên khuyến mãi</td>
    <td width="87"><input type="text" name="km_ten"></td>
  </tr>
   <tr>
    <td width="97">Thời gian bắt đầu</td>
    <td width="87"><input type="datetime-local" name="km_tgbatdau"></td>
  </tr>
    <tr>
    <td width="97">Thời gian kết thúc</td>
    <td width="87"><input type="datetime-local" name="km_tgketthuc"></td>
  </tr>
   
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



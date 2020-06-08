<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thêm</title>
	<link rel="stylesheet" type="text/css" href="css/cssadmin.css">
	<style>
		.tb{
			border-collapse: collapse;
		}
	</style>
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=banner&ac=lietke">Liệt kê</a> 
</div>
<form action="xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table class="tb" width="200" border="1">
	<tr>
    <td colspan="3" style="text-align:center; font-size:25px">THÊM BANNER</td>
  </tr>
  <tr>
    <td style="text-align:center" >Tiêu đề</td>
	<td style="text-align:center" >Hình ảnh</td>
	
	</tr>
	<td><input type="text" name="bn_tieude"></td>
	<td><input type="file" name="bn_hinh"></td>
	
   <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>
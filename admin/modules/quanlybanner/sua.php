<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sửa</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from banner where bn_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=banner&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlybanner/xuly.php?id=<?php echo $dong['bn_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
 <tr>
    <td colspan="2" style="text-align:center; font-size:25px">SỬA BANNER</td>
  </tr>
  <tr>
    <td width="97">Tiêu đề</td>
    <td width="87"><input type="text" name="bn_tieude" value="<?php echo $dong['bn_tieude'] ?>"></td>
  </tr>
  <tr>
	<td width="97">Hình ảnh</td>
    <td width="87"><input type="int" name="bn_hinh" value="<?php echo $dong['bn_hinh'] ?>"></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</body>
</html>
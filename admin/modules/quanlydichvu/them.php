<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>


<div class="button_themsp">
<a href="index.php?quanly=tuyenbay&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlytuyenbay/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Thêm Dịch Vụ</td>
  </tr>
  <tr>
    <td width="97">Tên Dịch Vụ</td>
    <td width="87"><input type="text" name="tendichvu"></td>
  </tr>
  <tr>
  <?php
  $sql_loaive = "select lv_ma,lv_ten from loai_ve";
  $row_loaive=mysql_query($sql_loaive);
  ?>
    <td>Loại Vé</td>
    <td><select name="maloaive">
    <?php
	while($dong_loaive=mysql_fetch_array($row_loaive)){
	?>
    	<option value="<?php echo $dong_loaive['lv_ma'] ?>"><?php echo $dong_loaive['lv_ten'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
   
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>



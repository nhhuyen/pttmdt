<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Liệt kê tuyến bay</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from tuyen_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=tuyenbay&ac=them">Thêm mới</a> 
</div>
<h3> DANH SÁCH TUYẾN BAY </h3>
<table width="100%" border="1">
  <tr>
    <td>Mã</td>
    <td>Tần suất bay</td>
	<td>Hành trình</td>
	<td>Sân bay đi</td>
	<td>Sân bay đến</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $dong['tb_tansuat'] ?></td>
	<td><?php echo $dong['tb_hanhtrinh'] ?></td>
	<td><?php echo $dong['sb_ma_di'] ?></td>
	<td><?php echo $dong['sb_ma_den'] ?></td>
    <td><a href="index.php?quanly=tuyenbay&ac=sua&id=<?php echo $dong['tb_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlytuyenbay/xuly.php?id=<?php echo $dong['tb_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
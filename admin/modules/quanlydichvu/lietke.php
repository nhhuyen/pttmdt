<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from dich_vu ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=loaive&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH DỊCH VỤ</h3>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên Dịch vụ</td>
   <td>Loại vé</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['dv_ten'] ?></td>
	<td><?php echo $dong['lv_ma'] ?></td>
    <td><a href="index.php?quanly=loaive&ac=sua&id=<?php echo $dong['lv_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyloaive/xuly.php?id=<?php echo $dong['lv_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
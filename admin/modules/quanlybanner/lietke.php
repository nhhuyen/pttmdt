<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Liệt kê</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from san_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=banner&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH BANNER </h3>
<table width="100%" border="1">
  <tr>
    <td>Mã</td>
    <td>Tiêu đề</td>
	<td>Hình ảnh</td>
	
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php echo $dong['bn_ma'];?></td>
    <td><?php echo $dong['bn_tieude'] ?></td>
	<td><?php echo $dong['bn_hinh'] ?></td>
	
    <td><a href="index.php?quanly=banner&ac=sua&id=<?php echo $dong['bn_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlybanner/xuly.php?id=<?php echo $dong['bn_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
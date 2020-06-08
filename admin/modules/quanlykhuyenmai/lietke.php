<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from khuyen_mai ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=khuyenmai&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH LOẠI VÉ </h3>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên khuyến mãi</td>
	<td>Thời gian bắt đầu</td>
   <td>Thời gian kết thúc</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php echo $dong['km_ma'] ?></td>
    <td><?php echo $dong['km_ten'] ?></td>
	<td><?php echo $dong['km_tgbatdau'] ?></td>
	<td><?php echo $dong['km_tgketthuc'] ?></td>
    <td><a href="index.php?quanly=khuyenmai&ac=sua&id=<?php echo $dong['km_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
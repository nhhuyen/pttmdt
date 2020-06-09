<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from tin_tuc ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=tintuc&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH BÀI VIẾT</h3>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tiêu đề</td>
   <td>Hình ảnh</td>
   <td>Nội dung</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tt_tieude'] ?></td>
	 <td><img src="<?php echo $dong['tt_hinhanh'] ?>" width="80" height="80" /></td>
	 <td><?php echo $dong['tt_noidung'] ?></td>
	  <td><?php echo $dong['tt_mota'] ?></td>
    <td><a href="index.php?quanly=tintuc&ac=sua&id=<?php echo $dong['tt_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlytintuc/xuly.php?id=<?php echo $dong['tt_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from hang_ve ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=hangve&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH HÃNG VÉ </h3>
<table width="100%" border="1">
  <tr>
    <td>Mã</td>
    <td>Tên hãng vé</td>
	<td>Kí hiệu</td>
    <td>Hình ảnh</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php  echo $dong['hv_ma'];?></td>
    <td><?php echo $dong['hv_ten'] ?></td>
	<td><?php  echo $dong['hv_kihieu'];?></td>
    <td><img src="<?php echo $dong['hv_hinh'] ?>" height="80" /></td>
    <td><a href="index.php?quanly=hangve&ac=sua&id=<?php echo $dong['hv_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyhangve/xuly.php?id=<?php echo $dong['hv_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
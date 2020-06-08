<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from chuyen_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=chuyenbay&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH CHUYẾN BAY </h3>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Thời điểm</td>
	<td>Tình trạng</td>
   <td>Giờ cất cánh dự kiến</td>
      <td>Giờ hạ cánh dự kiến</td>
	     <td>Giờ cất cánh chính thức</td>
		    <td>Giờ hạ cánh chính thức</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php echo $dong['cb_ma'] ?></td>
    <td><?php echo $dong['cb_thoidiem'] ?></td>
	<td><?php echo $dong['cb_giocatcanh_dukien'] ?></td>
	<td><?php echo $dong['cb_giohacanh_dukien'] ?></td>
	<td><?php echo $dong['cb_giocatcanh_chinhthuc'] ?></td>
	<td><?php echo $dong['cb_giohacanh_chinhthuc'] ?></td>
	<td><?php echo $dong['tb_ma'] ?></td>
	<td><?php echo $dong['hv_ma'] ?></td>
	<td><?php echo $dong['mb_ma'] ?></td>
    <td><a href="index.php?quanly=chuyenbay&ac=sua&id=<?php echo $dong['cb_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
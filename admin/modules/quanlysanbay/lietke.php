<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql_lietketienich="select * from san_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
<div class="button_themsp">
<a href="index.php?quanly=sanbay&ac=them">Thêm Mới</a> 
</div>
<h3> DANH SÁCH SÂN BAY </h3>
<table width="100%" border="1">
  <tr>
    <td>Mã</td>
    <td>Tên sân bay</td>
	<td>Địa chỉ</td>
   
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
  <tr>
    <td><?php echo $dong['sb_ma'];?></td>
    <td><?php echo $dong['sb_ten'] ?></td>
	<td><?php echo $dong['sb_diachi'] ?></td>
    <td><a href="index.php?quanly=sanbay&ac=sua&id=<?php echo $dong['sb_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlysanbay/xuly.php?id=<?php echo $dong['sb_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</body>
</html>
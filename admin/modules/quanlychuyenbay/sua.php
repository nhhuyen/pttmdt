<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng Ký</title>
 <link rel="stylesheet" type="text/css" href="css/cssadmin.css">
</head>

<body>
<?php
	$sql = "select * from chuyen_bay where cb_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=chuyenbay&ac=lietke">Liệt kê</a> 
</div>
<form action="modules/quanlychuyenbay/xuly.php?id=<?php echo $dong['cb_ma']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
<tr>
    <td colspan="2" style="text-align:center; font-size:25px">Thêm chuyến bay</td>
  </tr>
 
   <tr>
    <td width="97">Thời điểm chuyến bay</td>
    <td width="87"><input type="date" name="cb_thoidiem"value="<?php echo $dong['cb_thoidiem'] ?>"></td>
  </tr>
    <tr>
    <td>Tình trạng</td>
    <td><select name="cb_tinhtrang">
   
    <option value="Còn">Còn</option>
     <option value="Hết">Hết</option>
	 
    </select></td>
  </tr>
    <tr>
    <td width="97">Giờ cất cánh dự kiến</td>
    <td width="87"><input type="time" name="cb_giocatcanh_dukien" value="<?php echo $dong['cb_giocatcanh_dukien'] ?>"></td>
  </tr>
   <tr>
    <td width="97">Giờ hạ cánh dự kiến</td>
    <td width="87"><input type="time" name="cb_giohacanh_dukien"value="<?php echo $dong['cb_giohacanh_dukien'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Giờ cất cánh chính thức</td>
    <td width="87"><input type="time" name="cb_giocatcanh_chinhthuc"value="<?php echo $dong['cb_giocatcanh_chinhthuc'] ?>"></td>
  </tr>
     <tr>
    <td width="97">Giờ hạ cánh chính thức</td>
    <td width="87"><input type="time" name="cb_giohacanh_chinhthuc"value="<?php echo $dong['cb_giohacanh_chinhthuc'] ?>"></td>
  </tr>
   <tr>
  <?php
  $sql_tb = "select tb_ma,sb_ma_di from tuyen_bay";
  $row_tb=mysql_query($sql_tb);
  ?>
    <td>Tuyến bay</td>
    <td><select name="tb_ma">
    <?php
	while($dong_tb=mysql_fetch_array($row_tb)){
	?>
    	<option value="<?php echo $dong_tb['tb_ma'] ?>"><?php echo $dong_tb['sb_ma_di'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
     <tr>
  <?php
  $sql_hv = "select hv_ma,hv_ten from hang_ve";
  $row_hv=mysql_query($sql_hv);
  ?>
    <td>Hãng vé</td>
    <td><select name="hv_ma">
    <?php
	while($dong_hv=mysql_fetch_array($row_hv)){
	?>
    	<option value="<?php echo $dong_hv['hv_ma'] ?>"><?php echo $dong_hv['hv_ten'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
       <tr>
  <?php
  $sql_mb = "select mb_ma,mb_ten from may_bay";
  $row_mb=mysql_query($sql_mb);
  ?>
    <td>Máy bay</td>
    <td><select name="mb_ma">
    <?php
	while($dong_mb=mysql_fetch_array($row_mb)){
	?>
    	<option value="<?php echo $dong_mb['mb_ma'] ?>"><?php echo $dong_mb['mb_ten'] ?></option>
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



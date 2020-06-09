<div  class="tintuc">
<p id="tenndtintuc">Nội dung tin tức</p>
<center><hr width="20%" size="5px" color="#ff8000"/></center>

<div class="clearFix">
<?php
include('admin/modules/connect.php');
	$sql_lietkenews="select * from tin_tuc";
	$row_lietkenews=mysql_query($sql_lietkenews);
	  while($dong=mysql_fetch_array($row_lietkenews)){

?>
<a class="item" href="giaodien/tintuc.php?&ma_tt=<?php echo $dong['tt_ma']?>"><img src="<?php echo $dong['tt_hinhanh'] ?>"/>
<p id="tensp"><?php echo $dong['tt_tieude'] ?></p>
<p id="noidung" ><?php echo $dong['tt_mota'] ?></p>
 <p id="xemthem">Xem thêm >></p>
 <?php

  }
  ?>

</a>


</div>



</div>
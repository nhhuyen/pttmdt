<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/noidungtintuc.css">
<style>
.newscontetn .content .description img{
	width:500px;
}
</style>
</head>
<body>
<?php
 include('../giaodien/header.php');
 include('../giaodien/menu.php');
?>

<div class="chaba">
<div class="newscontetn">
<div class="content">
<div class="description">
<?php
include('../admin/modules/connect.php');
	$sql_lietkenews="select * from tin_tuc where tt_ma=$_GET[ma_tt]";
	$row_lietkenews=mysql_query($sql_lietkenews);
	  while($dong=mysql_fetch_array($row_lietkenews)){

?>
<h2><?php echo $dong['tt_tieude'] ?></h2>

<p>
<?php echo $dong['tt_noidung'] ?>
</p>
 <?php

  }
  ?>
</div>
</div>
</div>

  
<div id="column-right">
<div class="box-tintuclienquan">
<h3>Tin tức liên quan</h3>
<ul>
<?php
include('../admin/modules/connect.php');
	$sql_lietkenews1="select * from tin_tuc";
	$row_lietkenews1=mysql_query($sql_lietkenews1);
	  while($dong=mysql_fetch_array($row_lietkenews1)){

?>
<li><a href="link"><?php echo $dong['tt_tieude'] ?></a></li>

 <?php

  }
  ?>
</ul>
</div>
</div>
</div>


</body>

</html>
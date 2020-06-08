<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Trang quản trị admin</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>

<body>
	<div class="wrapper">
    	<?php
		include('modules/header.php');
		?>
		<div class="content_left">
		<div class="tieude">DANH MỤC MENU</div>	
		<?php
		 include('modules/menu.html');?>
		</div>
		<div class="tieude">QUẢN LÝ</div>	
		<div class ="content_right">
		<?php
		 include('modules/connect.php');
		  include('modules/content.php');
		 ?>
		
		
		</div>
		
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/delete.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>			
			
	
	
</div>
</body>

</html>
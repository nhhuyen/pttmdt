<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="../css/hienthitimkiem.css">
</head>

<body>
<?php 
	//Lấy giá trị từ search
	include('../modules/connect.php');
	include('head/head.php');
	include('head/menu.php');

	if(isset($_POST['san_bay_di'])){
		$_SESSION['san_bay_di']	= $_POST['san_bay_di'];
		$_SESSION['san_bay_den']= $_POST['san_bay_den'];
		$_SESSION['ngay_di'] 	= $_POST['ngay_di'];	
		$_SESSION['loai_ve'] 	= $_POST['loai_ve'];
		$_SESSION['ng_lon'] 	= $_POST['quant1'];
		$_SESSION['tre_em'] 	= $_POST['quant2'];
		$_SESSION['em_be'] 		= $_POST['quant3'];
		$_SESSION['khuhoi'] 	= $_POST['khuhoi'];
		$_SESSION['ngay_ve']	= "";
		if($_SESSION['khuhoi'] == 1){
			$_SESSION['ngay_ve'] = $_POST['ngay_ve'];	
		}
	}
		
		$san_bay_di = $_SESSION['san_bay_di'];
		$san_bay_den= $_SESSION['san_bay_den'];
		$ngay_di 	= $_SESSION['ngay_di'];	
		$loai_ve 	= $_SESSION['loai_ve'];
		$ng_lon 	= $_SESSION['ng_lon'];
		$tre_em 	= $_SESSION['tre_em'];
		$em_be 		= $_SESSION['em_be'];
		$khuhoi 	= $_SESSION['khuhoi'];

	
	//Cắt chuổi	
	$sb_di=substr($san_bay_di,0,strpos($san_bay_di,"-"));
	$sb_den=substr($san_bay_den,0,strpos($san_bay_den,"-"));
	$tp_di=substr($san_bay_di,strpos($san_bay_di,"-")+2);
	$tp_den=substr($san_bay_den,strpos($san_bay_den,"-")+2);
	
	//Lấy mã sân bay đi
	$sqlsb="select * from san_bay where sb_ten='$sb_di'";
	$rowsb = mysql_query($sqlsb);
	$dongsb=mysql_fetch_array($rowsb);
	$sb_ma_di=$dongsb['sb_ma'];
	
	//Lấy mã sân bay đến
	$sqlsb="select * from san_bay where sb_ten='$sb_den'";
	$rowsb = mysql_query($sqlsb);
	$dongsb=mysql_fetch_array($rowsb);
	$sb_ma_den= $dongsb['sb_ma'];
?>	
											<!-- ..............................CHUYẾN ĐI................................ -->
<div class="content">
<div class="content-l">
<form method='post' enctype="multipart/form-data" name="sx_gia">
<?php $_SESSION['sx_gia']= 'ASC' ?>						
<label style='margin-top:10px;'>Sắp xếp theo giá: </label>
<input type='submit' name='giatc' value='Từ thấp đến cao'>
<input type='submit' name='giact' value='Từ cao đến thấp'>
	<?php
		if(isset($_POST['giatc'])){
			$_SESSION['sx_gia']= 'ASC';		
		}
		if(isset($_POST['giact'])){
			$_SESSION['sx_gia']= 'DESC';			
		}
	?>
</form>

<table height="60" border="1" class='tb'>
	<tr>
	<td>
	<p class="cd" style="font-size:20px;"><b>Chuyến đi:</b> <?php echo $san_bay_di.' >> '.$san_bay_den?></p>
	<p class="cd"><b>Ngày đi:</b> <?php echo $ngay_di?></p>
	</td>
	</tr>
</table>
<br>

<?php	
	$sx_gia=$_SESSION['sx_gia'];
	if($loai_ve=='all'){
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   left join tuyenbay_khuyenmai on tuyen_bay.tb_ma =  tuyenbay_khuyenmai.tb_ma	
									   left join khuyen_mai on khuyen_mai.km_ma = tuyenbay_khuyenmai.km_ma				
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
                                       inner join ghe_chuyen on ghe_chuyen.lv_ma=loai_ve.lv_ma
															and ghe_chuyen.cb_ma=chuyen_bay.cb_ma
															and ghe_chuyen.mb_ma=chuyen_bay.mb_ma
			where sb_ma_di=$sb_ma_di and sb_ma_den=$sb_ma_den and cb_thoidiem='$ngay_di' and cb_tinhtrang='Còn' order by gia $sx_gia";
	}else{
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   left join tuyenbay_khuyenmai on tuyen_bay.tb_ma =  tuyenbay_khuyenmai.tb_ma
									   left join khuyen_mai on khuyen_mai.km_ma = tuyenbay_khuyenmai.km_ma
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
                                       inner join ghe_chuyen on ghe_chuyen.lv_ma=loai_ve.lv_ma
															and ghe_chuyen.cb_ma=chuyen_bay.cb_ma
															and ghe_chuyen.mb_ma=chuyen_bay.mb_ma
			where sb_ma_di=$sb_ma_di and sb_ma_den=$sb_ma_den and cb_thoidiem='$ngay_di' and cb_tinhtrang='Còn' and loai_ve.lv_ma=$loai_ve order by gia $sx_gia";
	}


	$row=mysql_query($sql);
	$mave=mysql_num_rows($row);
	$i=1;
		if(mysql_num_rows($row) != 0){
			while($dong=mysql_fetch_array($row)){
				if(isset($dong['km_giatri'])){
					$km_giatri=1-$dong['km_giatri'];
				}else{
					$km_giatri=1;
				}
				
?>
<div id="ve<?php echo $i ?>" class="test">
<table  border="1" class="tb1">
	<tr>
    <td style="width:150px; padding:0px; border-right:1px solid rgb(225,225,225);">
	<div class="carrier">
	<img class="plane-logo" src="<?php echo $dong['hv_hinh'] ?>">
	</div>
	<!--<img src="https://baydep.vn/Images/Airline/VJ.gif" />--></td>

    <td style=" display:flex; border-right:1px solid rgb(225,225,225); justify-content: center;">
	<p class="time"><img class="clock" src="../hinhanh/icon/clock.png"/> <?php echo $dong['cb_giocatcanh_dukien'] ?> </p>
		<button class="btn-chitiet" onclick="openForm<?php echo $i ?>()" id="chitiet<?php echo $i ?>">Chi tiết &or;</button> 
		<button style="display:none; " type="button" class="btn-chitiet" onclick="closeForm<?php echo $i ?>()" id="close<?php echo $i ?>">Chi tiết &and;</button>
	<p class="time"><img class="clock" src="../hinhanh/icon/clock.png"/><?php echo $dong['cb_giohacanh_dukien'] ?> </p>
	</td>
	
	<td style="width:180px; border-right:1px solid rgb(225,225,225);padding-top:0px;">
		<?php 	if($km_giatri<>1){	echo '<p class="km">'.((1-$km_giatri)*100).'%</p>'; echo '<p class="giagoc">'.number_format($dong['gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'].'</p>'; }		?>
		<p class="price"><?php echo number_format($km_giatri*$dong['gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']; ?></p> 
	</td>
	<td style="width:95px;"><input type="submit" onclick="chonve<?php echo $i ?>()" id="datve<?php echo $i ?>" class="btn-datve" name="datve<?php echo $i ?>" value="Đặt vé"></td>
	</tr>
</table>
										<!-- ...........Chi tiết vé............. -->
	<div style="display:none; padding: 5px;" class="form-popup" id="myForm<?php echo $i ?>">
		<form action="/action_page.php" class="form-container">
		<div class="fare-option fare-option-active" >
			<div class="fare-data">
				<div class="box-item" data-type="flight">
					<div class="box-item-title"><img class="plane" src="../hinhanh/icon/black-plane.png"/>
						<p class="fa-plane">Chi tiết chuyến bay</p>
						<p class="lb_socho">Số chổ: </p> <p class="socho"><?php echo $dong['so_cho']; ?></p>
					</div>
					<hr style=" border:0px;border-top:1px solid rgb(225,225,225);">
						<div class="box-item-content" data-id="pnFlightDetailTemplate">
							<div class="flight-detail">         
				        
								<div class="depart">             
									<div class="city"><?php echo 'Thành phố đi: '.$tp_di ?></div>             
									<div class="airport"><?php echo 'Sân bay: '.$sb_di ?> <br><p style="margin-top:8px;margin-bottom:0px;"> Nhà ga: </p></div>             
										<span class="hour"><?php echo $dong['cb_giocatcanh_dukien'] ?></span>             
										<span class="date"><?php echo $dong['cb_thoidiem'] ?></span>         
								</div>         
								<div class="arrival">             
									<div class="city"><?php echo 'Thành phố đến: '.$tp_den ?></div>             
									<div class="airport"><?php echo 'Sân bay: '.$sb_den ?><br>
									<p style="margin-top:8px;margin-bottom:0px;">Nhà ga:</p></div>             
										<span class="hour"><?php echo $dong['cb_giohacanh_dukien']?></span>             
										<span class="date"><?php echo $dong['cb_thoidiem']?></span>         
								</div>         
								<div class="flight-detail-info">             
									Chuyến bay: <?php echo $dong['hv_kihieu'].$dong['cb_ma'] ?><br>             
									Thời gian bay: <?php echo $dong['tb_hanhtrinh'] ?><br>             
									Hạng chỗ: <?php echo $dong['lv_ten'] ?><br>             
									Máy bay: <?php echo $dong['mb_ten'] ?>         
								</div>         
								<div class="clear"></div>     
							</div>     
			    
						</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>	

<script>
		// khai báo biến toàn cục giá
		var gia_nl;
		var gia_te;
		var gia_eb;

		function openForm<?php echo $i ?>() {
			document.getElementById("myForm<?php echo $i ?>").style.display = "block";
			document.getElementById("close<?php echo $i ?>").style.display = "block";
			document.getElementById("chitiet<?php echo $i ?>").style.display = "none";
		}

		function closeForm<?php echo $i ?>() {
			document.getElementById("myForm<?php echo $i ?>").style.display = "none";
			document.getElementById("close<?php echo $i ?>").style.display = "none";
			document.getElementById("chitiet<?php echo $i ?>").style.display = "block";
		}
		
		function chonve<?php echo $i ?>(){
			document.getElementById("datve<?php echo $i ?>").value="Đã đặt";
			document.getElementById("datve<?php echo $i ?>").style.backgroundColor="grey";
			var sove = <?php echo $mave?>;
			var j;
			var i = <?php echo $i ?>;
			var ma_cb = <?php echo $dong['cb_ma'] ?>;
			var cb_di = "<?php echo $dong['tb_ten']?>";
			var lv_ten = "<?php echo $dong['lv_ten']?>";
			var ma_lv = <?php echo $dong['lv_ma'] ?>;
			var ng_lon = <?php echo $ng_lon ?>;
			var tre_em = <?php echo $tre_em ?>;
			var em_be = <?php echo $em_be ?>;
			var gia = <?php echo $dong['gia'] ?>;
			gia_nl = ng_lon*gia ;
			gia_te = tre_em*gia*95/100 ;
			gia_eb = em_be*gia*20/100 ;
			tg_gia_nl= Math.round(gia_nl*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>*100)/100;
			tg_gia_te= Math.round(gia_te*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>*100)/100;
			tg_gia_eb= Math.round(gia_eb*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>*100)/100;
			for(j=1;j<=sove;j++){
				if(j != i){
					document.getElementById("ve"+j).style.display = "none";
				}else{
					document.getElementById("mcb").value=ma_cb ;
					document.getElementById("cb_di").value=cb_di ;
					document.getElementById("mlv").value=ma_lv ;
					document.getElementById("lv_ten").value=lv_ten ;					
					document.getElementById("ng_lon").value=ng_lon ;
					document.getElementById("tre_em").value=tre_em ;	
					document.getElementById("em_be").value=em_be ;
					document.getElementById("gia_nl").value=gia_nl ;
					document.getElementById("gia_te").value=gia_te ;
					document.getElementById("gia_eb").value=gia_eb ;
					document.getElementById("tg_gia_nl").value=tg_gia_nl + " <?php echo $_SESSION['tg_donvi'] ?>";
					document.getElementById("tg_gia_te").value=tg_gia_te + " <?php echo $_SESSION['tg_donvi'] ?>";
					document.getElementById("tg_gia_eb").value=tg_gia_eb + " <?php echo $_SESSION['tg_donvi'] ?>";					
				}
			}
		}	
</script>
<?php
	
	$i++;
		}//đóng while
	}
	else{
		echo "<div class='ktt'>Không tìm thấy chuyến bay</div>";
	}
								/* ..............................PHP thêm giỏ hàng................................ */
	

?>
								<!-- ..............................CHUYẾN VỀ................................ -->
<?php 
	$ngay_ve="";
	$khu_hoi = $_SESSION['khuhoi'];
	
	if($khu_hoi==1){
		$ngay_ve = $_SESSION['ngay_ve'];	
	
?>
<table style="margin-top:50px;" height="60" border="1" class='tb'>
	<tr>
	<td>
	<p class="cd" style="font-size:20px;"><b>Chuyến về:</b> <?php echo $san_bay_den.' >> '.$san_bay_di?></p>
	<p class="cd"><b>Ngày về:</b> <?php echo $ngay_ve?></p>
	</td>
	</tr>
</table>
<br>

<?php	// 
	$sx_gia=$_SESSION['sx_gia'];
	if($loai_ve=='all'){
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma
									   left join tuyenbay_khuyenmai on tuyen_bay.tb_ma =  tuyenbay_khuyenmai.tb_ma								   
									   left join khuyen_mai on khuyen_mai.km_ma = tuyenbay_khuyenmai.km_ma
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
                                       inner join ghe_chuyen on ghe_chuyen.lv_ma=loai_ve.lv_ma
									   and ghe_chuyen.cb_ma=chuyen_bay.cb_ma
                                       and ghe_chuyen.mb_ma=may_bay.mb_ma
			where sb_ma_di=$sb_ma_den and sb_ma_den=$sb_ma_di and cb_thoidiem='$ngay_ve' and cb_tinhtrang='Còn' order by gia $sx_gia";
	}else{
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   left join tuyenbay_khuyenmai on tuyen_bay.tb_ma =  tuyenbay_khuyenmai.tb_ma
									   left join khuyen_mai on khuyen_mai.km_ma = tuyenbay_khuyenmai.km_ma
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
                                       inner join ghe_chuyen on ghe_chuyen.lv_ma=loai_ve.lv_ma
									   and ghe_chuyen.cb_ma=chuyen_bay.cb_ma
                                       and ghe_chuyen.mb_ma=may_bay.mb_ma
			where sb_ma_di=$sb_ma_den and sb_ma_den=$sb_ma_di and cb_thoidiem='$ngay_ve' and cb_tinhtrang='Còn' and loai_ve.lv_ma=$loai_ve order by gia $sx_gia";
	}
	$row=mysql_query($sql);
	$maveve=mysql_num_rows($row);
	$i=1;
		if(mysql_num_rows($row) != 0){
			while($dong=mysql_fetch_array($row)){
				if(isset($dong['km_giatri'])){
					$km_giatri=1-$dong['km_giatri'];
				}else{
					$km_giatri=1;
				}
				
?>
<div id="veve<?php echo $i ?>" class="test">
<table border="1" class="tb1">
	<tr>
    <td style="width:150px; padding:0px; border-right:1px solid rgb(225,225,225);">
	<div class="carrier">
	<img class="plane-logo" src="<?php echo $dong['hv_hinh'] ?>">
	</div>
	<!--<img src="https://baydep.vn/Images/Airline/VJ.gif" />--></td>

    <td style=" display:flex; border-right:1px solid rgb(225,225,225); justify-content: center;">
	<p class="time"><img class="clock" src="../hinhanh/icon/clock.png"/> <?php echo $dong['cb_giocatcanh_dukien'] ?> </p>
		<button class="btn-chitiet" onclick="openFormve<?php echo $i ?>()" id="chitietve<?php echo $i ?>">Chi tiết &or;</button> 
		<button style="display:none; " type="button" class="btn-chitiet" onclick="closeFormve<?php echo $i ?>()" id="closeve<?php echo $i ?>">Chi tiết &and;</button>
	<p class="time"><img class="clock" src="../hinhanh/icon/clock.png"/><?php echo $dong['cb_giohacanh_dukien'] ?> </p>
	</td>
	
	<td style="width:180px; border-right:1px solid rgb(225,225,225);">
				<?php 	if($km_giatri<>1){	echo '<p class="km">'.((1-$km_giatri)*100).'%</p>'; echo '<p class="giagoc">'.number_format($dong['gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'].'</p>'; }		?>
		<p class="price"><?php echo number_format($km_giatri*$dong['gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']; ?></p> 
	</td>
	<td style="width:90px;"><input type="submit" onclick="chonveve<?php echo $i ?>()" id="datveve<?php echo $i ?>" class="btn-datve" name="datve" value="Đặt vé"></td>
	</tr>
	</table>
										<!-- ...........Chi tiết vé............. -->
	<div style="display:none; padding: 5px;" class="form-popup" id="myFormve<?php echo $i ?>">
		<form action="/action_page.php" class="form-container">
		<div class="fare-option fare-option-active" >
			<div class="fare-data">
				<div class="box-item" data-type="flight">
					<div class="box-item-title"><img class="plane" src="../hinhanh/icon/black-plane.png"/>
						<p class="fa-plane">Chi tiết chuyến bay</p>
						<p class="lb_socho">Số chổ: </p> <p class="socho"><?php echo $dong['so_cho']; ?></p>
					</div>
					<hr style=" border:0px;border-top:1px solid rgb(225,225,225);">
						<div class="box-item-content" data-id="pnFlightDetailTemplate">
							<div class="flight-detail">         
				        
								<div class="depart">             
									<div class="city"><?php echo 'Thành phố đi: '.$tp_den ?></div>             
									<div class="airport"><?php echo 'Sân bay: '.$sb_den ?> <br><p style="margin-top:8px;margin-bottom:0px;"> Nhà ga: </p></div>             
										<span class="hour"><?php echo $dong['cb_giocatcanh_dukien'] ?></span>             
										<span class="date"><?php echo $dong['cb_thoidiem'] ?></span>         
								</div>         
								<div class="arrival">             
									<div class="city"><?php echo 'Thành phố đến: '.$tp_di ?></div>             
									<div class="airport"><?php echo 'Sân bay: '.$sb_di ?><br>
									<p style="margin-top:8px;margin-bottom:0px;">Nhà ga:</p></div>             
										<span class="hour"><?php echo $dong['cb_giohacanh_dukien']?></span>             
										<span class="date"><?php echo $dong['cb_thoidiem']?></span>         
								</div>         
								<div class="flight-detail-info">             
									Chuyến bay: <?php echo $dong['hv_kihieu'].$dong['cb_ma'] ?><br>             
									Thời gian bay: <?php echo $dong['tb_hanhtrinh'] ?><br>             
									Hạng chỗ: <?php echo $dong['lv_ten'] ?><br>             
									Máy bay: <?php echo $dong['mb_ten'] ?>         
								</div>         
								<div class="clear"></div>     
							</div>     
			    
						</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>	

<script>
		
		function openFormve<?php echo $i ?>() {
		document.getElementById("myFormve<?php echo $i ?>").style.display = "block";
		document.getElementById("closeve<?php echo $i ?>").style.display = "block";
		document.getElementById("chitietve<?php echo $i ?>").style.display = "none";
		}

		function closeFormve<?php echo $i ?>() {
		document.getElementById("myFormve<?php echo $i ?>").style.display = "none";
		document.getElementById("closeve<?php echo $i ?>").style.display = "none";
		document.getElementById("chitietve<?php echo $i ?>").style.display = "block";
		}
		
		function chonveve<?php echo $i ?>(){ 
			document.getElementById("datveve<?php echo $i ?>").value="Đã đặt";
			document.getElementById("datveve<?php echo $i ?>").style.backgroundColor="grey";
			var soveve = <?php echo $maveve?>;
			var jve;
			var ive = <?php echo $i ?>;
			var ma_cb2 = <?php echo $dong['cb_ma'] ?>;
			var cb_ve = "<?php echo $dong['tb_ten']?>";
			var lv_ten2 = "<?php echo $dong['lv_ten']?>";
			var ma_lv2 = <?php echo $dong['lv_ma'] ?>;
			var ng_lon = <?php echo $ng_lon ?>;
			var tre_em = <?php echo $tre_em ?>;
			var em_be = <?php echo $em_be ?>;
			var gia = <?php echo $dong['gia'] ?>;			
			gia_nl = ng_lon *gia  ;  
			gia_te = tre_em *gia*95/100;
			gia_eb = em_be  *gia*20/100;
			tg_gia_nl +=gia_nl*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>;
			tg_gia_te +=gia_te*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>;
			tg_gia_eb +=gia_eb*<?php echo $_SESSION['tg_tigia']*$km_giatri ?>;
			tg_gia_nl = Math.round(tg_gia_nl *100)/100;
			tg_gia_te = Math.round(tg_gia_te *100)/100;
			tg_gia_eb = Math.round(tg_gia_eb *100)/100;
			for(jve=1;jve<=soveve;jve++){
				if(jve != ive){
					document.getElementById("veve"+jve).style.display = "none";
				}else{
					document.getElementById("mcb2").value=ma_cb2 ;
					document.getElementById("cb_ve").value=cb_ve ;
					document.getElementById("lv_ten2").value=lv_ten2 ;
					document.getElementById("mlv2").value=ma_lv2 ;	
					document.getElementById("gia_nl").value=gia_nl;
					document.getElementById("gia_te").value=gia_te;
					document.getElementById("gia_eb").value=gia_eb;
					document.getElementById("tg_gia_nl").value=tg_gia_nl + " <?php echo $_SESSION['tg_donvi'] ?>";
					document.getElementById("tg_gia_te").value=tg_gia_te + " <?php echo $_SESSION['tg_donvi'] ?>";
					document.getElementById("tg_gia_eb").value=tg_gia_eb + " <?php echo $_SESSION['tg_donvi'] ?>";
				}
			}
		}	
		
		
</script>
<?php
	$i++;
		}//đóng while
	}
	else{
		echo "<div class='ktt'>Không tìm thấy chuyến bay</div>";
	}
	}
?>							
								<!-- ..............................CHUYẾN VỀ................................ -->
</div>
<form action="nhapthongtinkh.php" method="POST">
<div class="content-r">
	<table style="margin-bottom:10px;width:520px;" height="60" border="1" class='tb' id="myShop" border="1">
		<tbody>
		<tr>
			<td colspan ="2" style='font-size:23px;padding:10px 0;font-weight:bold;text-align:center'>Chuyến bay bạn chọn</td>
		</tr>
		<tr><td style='padding:10px 0;font-weight:bold'>Chuyến bay</td><td style='font-weight:bold'>Loại vé</td></tr>
		<tr id="ch0">
		<td><label>Đi:</label>
			<input  hidden readonly  type="text" id="mcb" name="mcb"> 
			<input class='ttgv' style='margin-left:12px;border:1px solid #b3edfc;' type="text" readonly  id="cb_di" > 
		</td>
		<td> 
			<input type="text" hidden readonly  id="mlv" name="mlv"> 
			<input style='border:1px solid #b3edfc;' type="text"  readonly  id="lv_ten" >
		</td>
		</tr>
		
		<tr id="ch1">
		<td><label>Về:</label><input hidden readonly  type="text" id="mcb2" name="mcb2"> 
		<input class='ttgv' style='margin-left:10px;border:1px solid #b3edfc;' type="text" readonly  id="cb_ve" ></td>
		<td>
			<input type="text" hidden readonly  id="mlv2" name="mlv2"> 
			<input style='border:1px solid #b3edfc;' type="text" readonly  id="lv_ten2" >
		</td>
		</tr>
		<tr>
		<td style='padding:10px 0;font-weight:bold'>Tóm tắt giá vé</td><td style='font-weight:bold'>Giá vé</td>
		</tr>
		<tr>
		
		<td ><input style='width:40px;margin-right:5px;border:1px solid #b3edfc;' type="text" id="ng_lon" readonly name="ng_lon"><label>x Người lớn</label></td>	
		<td> <input type="text" hidden readonly  id="gia_nl" name="gia_nl"> <input type="text" style='border:1px solid #b3edfc;' readonly  id="tg_gia_nl"></td>
		</tr>
		<tr>
		<td ><input style='width:40px;margin-right:5px;border:1px solid #b3edfc;' type="text" id="tre_em" readonly  name="tre_em"><label>x Trẻ em</label></td>	
		<td> <input type="text" hidden readonly  id="gia_te" name="gia_te"> <input type="text" style='border:1px solid #b3edfc;' readonly  id="tg_gia_te"></td>
		</tr>
		<tr>
		<td ><input style='width:40px;margin-right:5px;border:1px solid #b3edfc;' type="text" id="em_be" readonly  name="em_be"><label>x Em bé</label></td>	
		<td> <input type="text" hidden readonly  id="gia_eb" name="gia_eb"> <input type="text" style='border:1px solid #b3edfc;' readonly  id="tg_gia_eb"></td>
		</tr>
		
		<tr>
			<td colspan ="2" style='font-weight:bold;text-align:center;padding-top:10px'><input style='padding:10px 15px;border:1px solid #b3edfc;border-radius:10px;' type="submit" value="Tiếp tục" name="tieptuc"></td>
		</tr>
		</tbody>
	</table>	
</form>

	<?php include('search-hienthitimkiem.php');

	?>
</div>
</div>
</div>
</body>
</html>
<?php
	include('head/footer.php');
?>
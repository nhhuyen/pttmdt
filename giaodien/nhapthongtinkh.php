<html>
<head>
<meta charset='utf-8'>
<?php
	include('../modules/connect.php');
	include('head/head.php');
	include('head/menu.php');

	if(empty($_SESSION['nd_ma'])){
		header('location:../?quanly=dangnhap');
	}

	
	
	$mgh=$_SESSION['nd_ma'];
	if(isset($_POST['tieptuc'])){
		$_SESSION['mcb']= $_POST['mcb'];
		$_SESSION['mcb2'] = $_POST['mcb2'];
		$_SESSION['mlv'] = $_POST['mlv'];
		$_SESSION['mlv2'] = $_POST['mlv2'];		
		$_SESSION['ng_lon']=$_POST['ng_lon'];
		$_SESSION['tre_em']=$_POST['tre_em'];
		$_SESSION['em_be']=$_POST['em_be'];
		$_SESSION['sove'] = $_SESSION['ng_lon']+$_SESSION['tre_em']+$_SESSION['em_be'];

		$mcb=$_SESSION['mcb'];
		$mcb2=$_SESSION['mcb2'];
		$mlv=$_SESSION['mlv'];
		$mlv2=$_SESSION['mlv2'];
		$ng_lon=$_SESSION['ng_lon'];
		$tre_em=$_SESSION['tre_em'];
		$em_be=$_SESSION['em_be'];
/*		if($_SESSION['mcb2']==''){
			$sql="insert into chitiet_giohang value ('{$mgh}','{$mcb}','{$mlv}')";	
			$result=mysql_query($sql,$conn)
			or die(mysql_error());
		}else{
			$sql="insert into chitiet_giohang value ('{$mgh}','{$mcb}','{$mlv}');"; 
			$sql1="insert into chitiet_giohang value ('{$mgh}','{$mcb2}','{$mlv2}');";
			$result=mysql_query($sql,$conn)
			or die(mysql_error());
			$result1=mysql_query($sql1,$conn)
			or die(mysql_error());
		}	*/	  
	}
		$tongcong2=0;
		$mcb=$_SESSION['mcb'];
		$mcb2=$_SESSION['mcb2'];
		$mlv=$_SESSION['mlv'];
		$mlv2=$_SESSION['mlv2'];
		$ng_lon=$_SESSION['ng_lon'];
		$tre_em=$_SESSION['tre_em'];
		$em_be=$_SESSION['em_be'];
		
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_di
			where chuyen_bay.cb_ma=$mcb and loai_ve.lv_ma=$mlv";
		$row=mysql_query($sql);	
		$dong=mysql_fetch_array($row);
		
		$sql1="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_den									   
			where chuyen_bay.cb_ma=$mcb";
		$row1=mysql_query($sql1);	
		$dong1=mysql_fetch_array($row1);
		
		$gia_nl = $dong['gia'];
		$gia_te = $gia_nl*95/100;
		$gia_eb = $gia_nl*20/100;
		$tong_nl=0;
		$tong_te=0;
		$tong_eb=0;
		$tongcong1=0;
		if($ng_lon<>0){
			$thue_nl = $gia_nl*0.2;
			$tt_nl=$ng_lon*($gia_nl+$thue_nl);
			$tongcong1 += $tt_nl;
			$tong_nl += $tt_nl;
			
		}
		if($tre_em<>0){
			$thue_te = $gia_te*0.2;
			$tt_te=$tre_em*($gia_te+$thue_te);
			$tongcong1 += $tt_te;
			$tong_te += $tt_te;
		}
		if($em_be<>0){
			$thue_eb = $gia_eb*0.2;
			$tt_eb=$em_be*($gia_eb+$thue_eb);
			$tongcong1 += $tt_eb;
			$tong_eb += $tt_eb;
		}
		$_SESSION['tongcong1']=$tongcong1;
		$_SESSION['tong_nl']=$tong_nl;
		$_SESSION['tong_te']=$tong_te;
		$_SESSION['tong_eb']=$tong_eb;
		
		$tongcong1=$_SESSION['tongcong1'];
?>
<title>Nhập TTKH</title>
<link rel="stylesheet" href="../css/style.css">

<style>
body{
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;  
}

label{
    padding: 0;
    border: 0;
    border-top-color: initial;
    border-top-style: initial;
    border-top-width: 0px;
    border-right-color: initial;
    border-right-style: initial;
    border-right-width: 0px;
    border-bottom-color: initial;
    border-bottom-style: initial;
    border-bottom-width: 0px;
    border-left-color: initial;
    border-left-style: initial;
    border-left-width: 0px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    font-size: 100%;
    font: inherit;
    font-style: inherit;
    font-variant-ligatures: inherit;
    font-variant-caps: inherit;
    font-variant-numeric: inherit;
    font-variant-east-asian: inherit;
   
    font-stretch: inherit;
    font-size: 100%;
    line-height: inherit;
    
}
label {
    display: inline-block; 
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.content{
	width:1400px;
	height:auto;
	display:flex;
	margin:auto;
	background-color:#ffffff;
	
}
.content_left{
	margin-left:0px;
	height:auto;
	width:900px;
	border :0;
   background-color:#ffffff;
}
.content_right{
	width:500px;
}
.formgiohang{
	
	margin:20px auto;
	width:auto;
	height:auto;
	border: #D8D8D8 solid 2px;
   background-color:#ffffff;
}
.thongtinkhachhang{
	width:900px;
	height:40px;
	margin:auto;
	 background-color:#007369;
}
#chuthongtinkh{
	margin-top:20px;
	color:#ffffff;
	font-size:25px;
	text-align:center;
	padding-top:5px;
}
.formthongtinve{
	margin:20px auto;
	width:850px;
	border: #000 solid 2px;

	border-radius: 5px;
	
}
.form_title{
	width:850px;
	height:40px;

	background-color:#337AB7;
	border-bottom:#000 solid 2px;
}
.form_body{
	width:800px;
	height:auto;
	border:#58FAF4 solid 2px;
	margin: 20px auto;
}
.chuthongtinchuyenbay{
color:#ffffff;
	font-size:20px;
	padding: 10px 10px;
}
.body1{
	width:800px;
	display:flex;
	height:90px;
}
.logove{
	width:150px;
	background-color:#E6E6E6
}
.benphailogo{
	margin-top:10px;
	width:750px;
}
.bangthongtinve{
	width:800px;
	
	
}	
	.btn_datve{
		background-color:#2E64FE;
		margin:10px 400px;
		width:200px;
		height:50px;
	}
		.chudatve{
		color:#ffffff;
	font-size:20px;
	}

</style>

</head>
<body>
<div class="content">
<div class="content_left">
<div class="thongtinkhachhang">
<p id="chuthongtinkh">THÔNG TIN KHÁCH HÀNG</p>
</div>
<div class="formthongtinve">
<div class="form_title">
<div class="chuthongtinchuyenbay">THÔNG TIN CHUYẾN BAY</div>
</div>

<div class="form_body">
<div class="body1">
		<div class="logove">       			
                    <img  src="<?php echo $dong['hv_hinh']; ?>" style="width:120px;padding-left:5px;padding-top:30px;" class="CToWUd">
        		</div>
				<div class="benphailogo">
					<div class="col-sm-10">
		            <div class="table-responsive">
		            <table style="width:100%;background-color:White;" border="0" cellpadding="5" cellspacing="0">
		                <tbody>
		                    <tr>
		                        <td colspan="2" style="background: #fff;padding: 10px 0px;">
		                            <table style="width:100%;font-size:14px;font-family:Arial,Helvetica,Verdana,sans-serif;color:#2f2f2f">
		                                <tbody>
		                                    <tr>
		                                        <td style="text-align:right">
		                                            <strong><?php echo $dong['sb_diachi']; ?></strong>
		                                            <br> <font style='color:#fb7604; font-size: 15px; font-weight: bold;'><?php echo $dong['cb_giocatcanh_chinhthuc']; ?></font> <font style="font-size: 13px;"><?php echo $dong['cb_thoidiem']; ?></font>
		                                        </td>
		                                        <td style="text-align: center;">
		                                            <font style="font-size:12px;">Chuyến bay: <strong><?php echo $dong['hv_kihieu'];echo $dong['cb_ma'] ?></strong></font><br>
		                                            <img src="http://asm.vn/img/flight-direct.png"/><br>
		                                            <font style='font-size:12px;'>Hạng chỗ: <strong><?php echo $dong['lv_ten']; ?></strong></font>
		                                        </td>
		                                        <td style="width:25%;text-align:left">
		                                            <strong><?php echo $dong1['sb_diachi']; ?></strong>
		                                            <br> <font style='color:#fb7604; font-size: 15px; font-weight: bold;'><?php echo $dong['cb_giohacanh_chinhthuc']; ?></font> <font style="font-size: 13px;"><?php echo $dong['cb_thoidiem']; ?></font>
		                                        </td>
		                                        
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </td>
		                    </tr>
		                </tbody>
		            </table>
		            </div>        		
        		</div>
				</div>
				</div>
			<div class="bangthongtinve">
		         <table style="width:100%;" border="1" cellpadding="5" cellspacing="0">
				   <tr style="width:100%;text-align:left;font-size:14px;font-family:Arial,Helvetica,Verdana,sans-serif;color:#2f2f2f;background-color:#d0f7fd">
		                                        <td colspan="1" style="text-align: center;">
		                                            Số lượng
		                                        </td>
		                                        <td colspan="1">
		                                            Hành khách
		                                        </td>
		                                        <td colspan="1">
		                                            Giá mỗi vé
		                                        </td>
		                                        <td colspan="1">
		                                            Thuế và phí
		                                        </td>
		                                        <td colspan="1">
		                                            Thành tiền
		                                        </td>
		            </tr>
												
									<?php 
										if($ng_lon <> 0){?>			
		                                    	<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $ng_lon; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Người lớn</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}
										if($tre_em <> 0){?>				
												<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $tre_em; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Trẻ em</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}	
										if($em_be <> 0){?>				
												<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $em_be; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Em bé</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}
									?>				
												
												
												
												
											   <tr>
		                                        <td colspan="5" style="text-align: right;font-weight: bold;font-size:18px;">
		                                            <span style="color:#fb7604;">Tổng cộng:</span><span style="margin-left: 15px;color:#fb7604;" class="currency">&nbsp;<?php echo number_format($tongcong1*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                    </tr>
				 </table>
				 
        		</div>		
</div>


<?php
	if($mcb2<>''){
		$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_di
			where chuyen_bay.cb_ma=$mcb2 and loai_ve.lv_ma=$mlv2";
		$row=mysql_query($sql);	
		$dong=mysql_fetch_array($row);
		
		$sql1="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_den									   
			where chuyen_bay.cb_ma=$mcb2";
		$row1=mysql_query($sql1);	
		$dong1=mysql_fetch_array($row1);
		
		
		$gia_nl = $dong['gia'];
		$gia_te = $gia_nl*95/100;
		$gia_eb = $gia_nl*20/100;
		
		
		if($ng_lon<>0){
			$thue_nl = $gia_nl*0.2;
			$tt_nl=$ng_lon*($gia_nl+$thue_nl);
			$tongcong2 += $tt_nl;
			$_SESSION['tong_nl']+=$tt_nl;;
		}
		if($tre_em<>0){
			$thue_te = $gia_te*0.2;
			$tt_te=$tre_em*($gia_te+$thue_te);
			$tongcong2 += $tt_te;
			$_SESSION['tong_te']+=$tt_te;
		}
		if($em_be<>0){
			$thue_eb = $gia_eb*0.2;
			$tt_eb=$em_be*($gia_eb+$thue_eb);
			$tongcong2 += $tt_eb;
			$_SESSION['tong_eb']+=$tt_eb;
		}
		$_SESSION['tongcong2']=$tongcong2;
?>

<div class="form_body">
<div class="body1">
		<div class="logove">       			
                    <img  src="<?php echo $dong['hv_hinh']; ?>" style="width:120px;padding-left:5px;padding-top:30px;;" class="CToWUd">
        		</div>
				<div class="benphailogo">
					<div class="col-sm-10">
		            <div class="table-responsive">
		            <table style="width:100%;background-color:White;" border="0" cellpadding="5" cellspacing="0">
		                <tbody>
		                    <tr>
		                        <td colspan="2" style="background: #fff;padding: 10px 0px;">
		                            <table style="width:100%;font-size:14px;font-family:Arial,Helvetica,Verdana,sans-serif;color:#2f2f2f">
		                                <tbody>
		                                    <tr>
		                                        <td style="text-align:right">
		                                            <strong><?php echo $dong['sb_diachi']; ?></strong>
		                                            <br> <font style='color:#fb7604; font-size: 15px; font-weight: bold;'><?php echo $dong['cb_giocatcanh_chinhthuc']; ?></font> <font style="font-size: 13px;"><?php echo $dong['cb_thoidiem']; ?></font>
		                                        </td>
		                                        <td style="text-align: center;">
		                                            <font style="font-size:12px;">Chuyến bay: <strong><?php echo $dong['hv_kihieu'];echo $dong['cb_ma'] ?></strong></font><br>
		                                            <img src="http://asm.vn/img/flight-direct.png"/><br>
		                                            <font style='font-size:12px;'>Hạng chỗ: <strong><?php echo $dong['lv_ten']; ?></strong></font>
		                                        </td>
		                                        <td style="width:25%;text-align:left">
		                                            <strong><?php echo $dong1['sb_diachi']; ?></strong>
		                                            <br> <font style='color:#fb7604; font-size: 15px; font-weight: bold;'><?php echo $dong['cb_giohacanh_chinhthuc']; ?></font> <font style="font-size: 13px;"><?php echo $dong['cb_thoidiem']; ?></font>
		                                        </td>
		                                        
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </td>
		                    </tr>
		                </tbody>
		            </table>
		            </div>        		
        		</div>
				</div>
				</div>
			<div class="bangthongtinve">
		         <table style="width:100%;" border="1" cellpadding="5" cellspacing="0">
				   <tr style="width:100%;text-align:left;font-size:14px;font-family:Arial,Helvetica,Verdana,sans-serif;color:#2f2f2f;background-color:#d0f7fd">
		                                        <td colspan="1" style="text-align: center;">
		                                            Số lượng
		                                        </td>
		                                        <td colspan="1">
		                                            Hành khách
		                                        </td>
		                                        <td colspan="1">
		                                            Giá mỗi vé
		                                        </td>
		                                        <td colspan="1">
		                                            Thuế và phí
		                                        </td>
		                                        <td colspan="1">
		                                            Thành tiền
		                                        </td>
		            </tr>
												
									<?php 
										if($ng_lon <> 0){?>			
		                                    	<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $ng_lon; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Người lớn</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_nl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}
										if($tre_em <> 0){?>				
												<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $tre_em; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Trẻ em</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_te*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}	
										if($em_be <> 0){?>				
												<tr style="background: #FFFFFF;">
		                                        <td style="text-align: center;">
		                                            <span><?php echo $em_be; ?></span>
		                                        </td>
		                                        <td>
		                                            <span>Em bé</span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($gia_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($thue_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                        <td style="text-align: right;">
		                                            <span class="currency"><?php echo number_format($tt_eb*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
												</tr>
									<?php	
										}
									?>					
											   <tr>
		                                        <td colspan="5" style="text-align: right;font-weight: bold;font-size:18px;">
		                                            <span style="color:#fb7604;">Tổng cộng:</span><span style="margin-left: 15px;color:#fb7604;" class="currency">&nbsp;<?php echo number_format($tongcong2*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></span>
		                                        </td>
		                                    </tr>
				 </table>
				 
        		</div>		
</div>
	<?php } 
	
	?>

</div>

<?php
	$sql="select * from nguoi_dung where nd_ma=$mgh";
	$row=mysql_query($sql);	
	$dong=mysql_fetch_array($row);

	
	$_SESSION['tongcong']=$_SESSION['tongcong1']+$_SESSION['tongcong2'];
	
?>
<form method="POST" enctype="multipart/form-data">
<div class="formthongtinve">
<div class="form_title">
<div class="chuthongtinchuyenbay">THÔNG TIN LIÊN HỆ</div>
</div>
<table style="width:100%;"border="0" cellpadding="2">
<tr>

 <td >Quý danh</td>
 <td >Họ và tên</td></tr>
 
 <tr>
<td width="87">
<select name="dropdown"style="width:100px;" >
<option value="ong">Ông</option>
<option value="ba">Bà</option>
</select>
</td>
	<td><input type="text" name="nd_ten" value="<?php echo $dong['nd_ten']; ?>" style="width:700px;"></td>
</tr>
<tr><td>Điện thoại</td></tr>
<tr><td colspan="2"><input type="text" name="nd_sdt" value="<?php echo $dong['nd_sdt']; ?>" style="width:800px;"></td></tr>
<tr><td>Email</td></tr>
<tr><td colspan="2"><input type="text" name="nd_email" value="<?php echo $dong['nd_mail']; ?>" style="width:800px;"></td></tr>
<tr><td>Địa chỉ</td></tr>
<tr><td colspan="2"><input type="text" name="nd_diachi" value="<?php echo $dong['nd_diachi']; ?>" style="width:800px;"></td></tr>
<tr><td>Ghi chú</td></tr>
<tr><td colspan="2"><input type="text" name="pdv_ghichu" style="width:800px;height:150px;"></td></tr>
</table>
</div>

<div class="formthongtinve">
<div class="form_title">
<div class="chuthongtinchuyenbay">DANH SÁCH KHÁCH HÀNG</div>
</div>
<table style="width:100%;"border="1" cellpadding="3">
<tr>
Hành lý xách tay: Mỗi hành khách có 10kg/hành khách (trừ trẻ sơ sinh dưới 2 tuổi).<br>
Hành lý ký gửi: <br>
+ Hành khách thương gia được tặng miễn phí 1 kiện 15kg.<br>
+ Hành khách thương gia được tặng miễn phí 1 kiện 10kg.
<tr>
<tr>
	<td >Quý danh</td>
	<td >Họ</td>
	<td >Tên</td>
	<td >Ngày sinh</td>
	<td >Hành lý ký gửi</td>
</tr>

<?php	//Nhập thông tin người lớn 
		$i=1;	
		if($ng_lon<>0){
			echo "<tr><td colspan='5	'>Người lớn</td></tr>";
			for($i=1;$i<=$ng_lon;$i++){		
?>
				<tr>
				<td  rowspan='2' width="70">
				<select name="quydanh<?php echo $i ?>" style="width:70px;" >
					<option value="Mr">Ông</option>
					<option value="Ms">Bà</option>
				</select>
				</td>
					<td rowspan='2'><input type="text" name="ho<?php echo $i ?>" style="width:100px;" required></td>
					<td rowspan='2'><input type="text" name="ten<?php echo $i ?>" style="width:200px;" required></td>
					<td rowspan='2'><input type="date" name="ns<?php echo $i ?>" style="width:140px;" required></td>
				<?php if($mcb2==0){ ?>
					<td rowspan='2'>
						
						<select name="hanhly_di<?php echo $i ?>" style="width:220px;" required>
							<?php
								$result = mysql_query("SELECT * FROM hanh_ly",$conn);
								while ($row = mysql_fetch_array($result)){
									echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
							?>
						</select>
					</td>
				</tr>
				<tr></tr>

				<?php }else{ ?>
				<td>
					<label style="margin-right: 7px">Đi</label>
					<select name="hanhly_di<?php echo $i ?>" style="width:220px;" required>
						<?php
							$result = mysql_query("SELECT * FROM hanh_ly",$conn);
							while ($row = mysql_fetch_array($result)){
								echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
						?>
					</select>
				</td>
				</tr>
				<tr>
					<td>
						<label style="margin-right:5px">Về</label>
						<select name="hanhly_ve<?php echo $i ?>" style="width:220px;" required>
					<?php
						$result = mysql_query("SELECT * FROM hanh_ly",$conn);
						while ($row = mysql_fetch_array($result)){
							echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
					?>
				</select>
					</td>
				</tr>
<?php 
				}
			}
		} 
?>

<?php	//Nhập thông tin trẻ em
		$j=$i;	
		if($tre_em<>0){
			echo "<tr><td colspan='5	'>Trẻ em</td></tr>";
			for($j=$i;$j<=($tre_em+$i-1);$j++){		
?>
				<tr>
				<td  rowspan='2' width="70">
				<select name="quydanh<?php echo $j ?>" style="width:70px;" >
					<option value="Mr">Nam</option>
					<option value="Ms">Nữ</option>
				</select>
				</td>
					<td rowspan='2'><input type="text" name="ho<?php echo $j ?>" style="width:100px;" required></td>
					<td rowspan='2'><input type="text" name="ten<?php echo $j ?>" style="width:200px;" required></td>
					<td rowspan='2'><input type="date" name="ns<?php echo $j ?>" style="width:140px;" required></td>
				
				<?php if($mcb2==0){ ?>
					<td rowspan='2'>
						
						<select name="hanhly_di<?php echo $j ?>" style="width:220px;" required>
							<?php
								$result = mysql_query("SELECT * FROM hanh_ly",$conn);
								while ($row = mysql_fetch_array($result)){
									echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
							?>
						</select>
					</td>
					</tr>
					<tr></tr>
				<?php }else{ ?>
				<td>
					<label style="margin-right: 7px">Đi</label>
					<select name="hanhly_di<?php echo $j ?>" style="width:220px;" required>
						<?php
							$result = mysql_query("SELECT * FROM hanh_ly",$conn);
							while ($row = mysql_fetch_array($result)){
								echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
						?>
					</select>
				</td>
				</tr>
				<tr>
					<td>
						<label style="margin-right:5px">Về</label>
						<select name="hanhly_ve<?php echo $j ?>" style="width:220px;" required>
					<?php
						$result = mysql_query("SELECT * FROM hanh_ly",$conn);
						while ($row = mysql_fetch_array($result)){
							echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
					?>
				</select>
					</td>
				</tr>
<?php 
				}
			}
		} 
		
?>

<?php	//Nhập thông tin em bé
		if($em_be<>0){
			
			echo "<tr><td colspan='5'>Em bé</td></tr>";
			for($k=$j;$k<=($em_be+$j-1);$k++){		
?>
				<tr>
				<td  rowspan='2' width="70">
				<select name="quydanh<?php echo $k ?>" style="width:70px;" >
					<option value="Mr">Nam</option>
					<option value="Ms">Nữ</option>
				</select>
				</td>
					<td rowspan='2'><input type="text" name="ho<?php echo $k ?>" style="width:100px;" required></td>
					<td rowspan='2'><input type="text" name="ten<?php echo $k ?>" style="width:200px;" required></td>
					<td rowspan='2'><input type="date" name="ns<?php echo $k ?>" style="width:140px;" required></td>
				
				<?php if($mcb2==0){ ?>
					<td rowspan='2'>
						
						<select name="hanhly_di<?php echo $k ?>" style="width:220px;" required>
							<?php
								$result = mysql_query("SELECT * FROM hanh_ly",$conn);
								while ($row = mysql_fetch_array($result)){
									echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
							?>
						</select>
					</td>
					</tr>
					<tr></tr>
				<?php }else{ ?>
				<td>
					<label style="margin-right: 7px">Đi</label>
					<select name="hanhly_di<?php echo $k ?>" style="width:220px;" required>
						<?php
							$result = mysql_query("SELECT * FROM hanh_ly",$conn);
							while ($row = mysql_fetch_array($result)){
								echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
						?>
					</select>
				</td>
				</tr>
				<tr>
					<td>
						<label style="margin-right:5px">Về</label>
						<select name="hanhly_ve<?php echo $k ?>" style="width:220px;" required>
					<?php
						$result = mysql_query("SELECT * FROM hanh_ly",$conn);
						while ($row = mysql_fetch_array($result)){
							echo "<option value='".$row['hl_ma']."'>".$row['hl_mota']." - ".number_format($row['hl_gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi']."</option>";}
					?>
				</select>
					</td>
				</tr>
				
<?php 
				}
				
			}
		} 
		
?>

</table>
</div>

<button class="btn_datve" name="tiep" onclick="tiep()" value="false"><a class="chudatve">Tiếp tục</a></button>	
</div>
</form>

<?php 
	
	if(isset($_POST['tiep'])){
		$mcb=$_SESSION['mcb'];
		$mcb2=$_SESSION['mcb2'];
		$mlv=$_SESSION['mlv'];
		$mlv2=$_SESSION['mlv2'];
		$sove = $_SESSION['sove'];
		$ghi_chu = $_POST['pdv_ghichu'];
		$tongcong = $_SESSION['tongcong'];
		
		if($mcb2<>0){
			$sove_kh = $sove * 2;
			$sql="INSERT INTO phieu_dat_ve values (null,'{$sove_kh}',1,'{$ghi_chu}','{$tongcong}','','{$mgh}',1)";				// SỬA CHƯA CHECK
		}else{
			$sql="INSERT INTO phieu_dat_ve values (null,'{$sove}',0,'{$ghi_chu}','{$tongcong}','','{$mgh}',1)";
		}		
		$result=mysql_query($sql);	

			for($i=1;$i<=$sove;$i++){
				$quydanh=$_POST['quydanh'.$i];
				$ho=$_POST['ho'.$i];
				$ten=$_POST['ten'.$i];
				$ns=$_POST['ns'.$i];
				$hl_ma_di=$_POST['hanhly_di'.$i];
			
				//lấy mã 
				$result_pdv=mysql_query('select * from phieu_dat_ve order by pdv_ma DESC limit 1');
				while ($dong=mysql_fetch_array($result_pdv)){
					$pdv_ma= $dong['pdv_ma'];
					$_SESSION['pdv_ma']=$pdv_ma;
				}
				$sql_vmb="INSERT INTO `ve_may_bay`(`vmb_ma`, `vmb_quydanh`, `vmb_ho`, `vmb_ten`, `vmb_ngaysinh`, `vmb_soghe`, `nd_ma`, `lv_ma`, `pdv_ma`,`cb_ma`, `hl_ma`) VALUES ('','{$quydanh}','{$ho}','{$ten}','{$ns}','','{$mgh}','{$mlv}','{$pdv_ma}','{$mcb}','{$hl_ma_di}')";
				$result_vmb=mysql_query($sql_vmb);			
			}
		
		
		
		$sql="select * from ghe_chuyen where cb_ma=$mcb and lv_ma=$mlv";
		$result=mysql_query($sql);
			while ($dong=mysql_fetch_array($result)){
				$so_cho=$dong['so_cho'];
			}
		$so_cho=$so_cho-$sove;	
		$sql="update ghe_chuyen set so_cho=$so_cho where cb_ma=$mcb and lv_ma=$mlv";
		$result=mysql_query($sql);
		
		if($mcb2<>0){
			for($i=1;$i<=$sove;$i++){
				$quydanh=$_POST['quydanh'.$i];
				$ho=$_POST['ho'.$i];
				$ten=$_POST['ten'.$i];
				$ns=$_POST['ns'.$i];
				$hl_ma_ve=$_POST['hanhly_ve'.$i];
		
				//lấy mã 
				$result_pdv=mysql_query('select * from phieu_dat_ve order by pdv_ma DESC limit 1');
				while ($dong=mysql_fetch_array($result_pdv)){
					$pdv_ma= $dong['pdv_ma'];
				}
				$sql_vmb="INSERT INTO `ve_may_bay`(`vmb_ma`, `vmb_quydanh`, `vmb_ho`, `vmb_ten`, `vmb_ngaysinh`, `vmb_soghe`, `nd_ma`, `lv_ma`, `pdv_ma`,`cb_ma`, `hl_ma`) VALUES ('','{$quydanh}','{$ho}','{$ten}','{$ns}','','{$mgh}','{$mlv2}','{$pdv_ma}','{$mcb2}','{$hl_ma_ve}')";
				$result_vmb=mysql_query($sql_vmb);
	
			}
		$sql="select * from ghe_chuyen where cb_ma=$mcb2 and lv_ma=$mlv2";
		$result=mysql_query($sql);
			while ($dong=mysql_fetch_array($result)){
				$socho=$dong['so_cho'];
			}
		$socho=$socho-$sove;	
		$sql="update ghe_chuyen set so_cho=$socho where cb_ma=$mcb2 and lv_ma=$mlv2";
		$result=mysql_query($sql);	
		}
		if($result_vmb){
			echo "<meta http-equiv='refresh' content='0;add_hd.php'>";
		}
	}	
?>
<div class="content_right">

<?php 
	$tongcong = $_SESSION['tongcong'];
	$mcb=$_SESSION['mcb'];
	$mlv=$_SESSION['mlv'];

	$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_di
			where chuyen_bay.cb_ma=$mcb and loai_ve.lv_ma=$mlv";
	$row=mysql_query($sql);	
	while($dong=mysql_fetch_array($row)){
?>


<div class="formgiohang">
<table border="0" align="center">

<tr><td><img src="https://toppng.com/public/uploads/thumbnail/cart-png-clipart-icon-gio-hang-115630026513wwdve21pi.png" width="30px" >
</td><td><p style="font-size:24px;font-weight: bold; margin: 25px 0px;">VÉ CỦA BẠN</p></td></tr>
</table >

<table border="0">
<tr>
<td><img style="padding-left:15px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1200px-VietJet_Air_logo.svg.png" width="100px"></td>
<td style=' white-space:nowrap; width:180px;'><p style="padding-left:10px"><?php echo $dong['tb_ten'] ?></p></td>
<td>
<img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-alarm-clock-icon-png-image_1611893.jpg" width="30px">
</td>
<td><?php echo $dong['cb_giocatcanh_chinhthuc']?></td>
<td><?php echo $dong['cb_thoidiem'] ?></td>
</tr>
<?php } 
	$mcb2=$_SESSION['mcb2'];
	$mlv2=$_SESSION['mlv2'];
	$sql="select * from chuyen_bay inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma 
									   inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
									   inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
									   inner join gia on chuyen_bay.cb_ma=gia.cb_ma 
									   inner join loai_ve on loai_ve.lv_ma=gia.lv_ma
									   inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_di
			where chuyen_bay.cb_ma=$mcb2 and loai_ve.lv_ma=$mlv2";
	$row=mysql_query($sql);	
	while($dong=mysql_fetch_array($row)){
?>
<tr>
<td><img style="padding-left:15px" src="https://www.etrip4u.com/Content/userfiles/logo-vietnam-airlines-lich-su-hinh-thanh-va-y-nghia-3.png" width="100px"></td>
<td style=' white-space:nowrap;'><p style="padding-left:10px"><?php echo $dong['tb_ten'] ?></p></td>
<td>
<img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-alarm-clock-icon-png-image_1611893.jpg"width="30px">
</td>
<td><?php echo $dong['cb_giocatcanh_chinhthuc']?></td>
<td><?php echo $dong['cb_thoidiem'] ?></td>
</tr>
</table >
<?php } ?>
<table border="0" style="width:490px;padding-bottom:10px;">
<tr><td><p style="padding-left:15px;padding-top:15px;font-weight: bold;">Tóm tắt giá vé</p></td>
<td><p style="padding-top:15px;font-weight: bold;float:right;">Tổng</p></td>
</tr>
<?php
	$ng_lon=$_SESSION['ng_lon'];
	$tre_em=$_SESSION['tre_em'];
	$em_be=$_SESSION['em_be'];
	if($ng_lon<>0){ ?>
		<tr>
		<td>
		<p style="padding-left:15px"><?php echo $ng_lon ?> x Người Lớn</p>
		</td>
		<td>
		<p style="margin:5px 0px ;float:right"><?php echo number_format($_SESSION['tong_nl']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
		</td>
		</tr>
<?php
	}
	if($tre_em<>0){ ?>
		<tr>
		<td>
		<p style="padding-left:15px"><?php echo $tre_em ?> x Trẻ em</p>
		</td>
		<td >
		<p style="margin:5px 0px ;float:right"><?php echo number_format($_SESSION['tong_te']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
		</td>
		</tr>
<?php
	}
	if($em_be<>0){ ?>		
		<tr>
		<td>
		<p style="padding-left:15px"><?php echo $em_be ?> x Em bé</p>
		</td>
		<td >
		<p style="margin:5px 0px ;float:right"><?php echo number_format($_SESSION['tong_eb']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
		</td>
		</tr>
<?php } ?>	
<tr>
<td>
<p style="padding-left:15px;font-weight: bold;">Tổng cộng</p>
</td>
<td >
<?php 
	$tc= $_SESSION['tong_nl'] + $_SESSION['tong_te'] + $_SESSION['tong_eb'];
	$_SESSION['tc']=$tc;
?>
<p style="float:right;color:#FF8000;"><?php echo number_format($_SESSION['tc']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
</td>
</tr>
<?php
$gg=0;
if(isset($_SESSION['km_giatri'])){
	if($_SESSION['km_giatri']<>1){
		echo '<tr><td style="padding-left:18px;padding-top:5px;font-weight:bold;">Mã giảm giá</td><td style=text-align:right;color:#FF8000;>';			
				$tc= $_SESSION['tong_nl'] + $_SESSION['tong_te'] + $_SESSION['tong_eb'];
				$gg=$_SESSION['km_giatri']*$tc;
				$_SESSION['gg']=$gg;
				echo number_format($gg*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'];
			
		echo'</td></tr>';
	}
}
?>	
<tr>
<td>
<p style="padding:5px 0px 0px 15px;font-weight: bold;">Thành tiền</p>
</td>
<td >
<?php 
	$tt= $tc-$gg;
	$_SESSION['tt']=$tt;
?>
<p style="float:right;color:#FF8000;"><?php echo number_format($_SESSION['tt']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
</td>
</tr>
</table>
</div>

<form method="post" enctype="multipart/form-data" name="formgg">
<p>Nhập mã giảm giá</p>
<input type='text' name='ma_gg'></input>	<button type='submit' name='luu' id='luu'>Lưu</button>
<?php
						if(!isset($_SESSION['km_giatri'])){
							$_SESSION['km_giatri']=1;
						}
						if(isset($_POST['luu'])){
							$ma_gg = $_POST['ma_gg'];
							
							$sql="select * from khuyen_mai where km_code = '$ma_gg'";
							$result=mysql_query($sql) or
							die('Không có mã giảm giá này!!!');
							if(mysql_num_rows($result)<>0){
								while($dong=mysql_fetch_array($result)){
									$_SESSION['km_giatri']=$dong['km_giatri'];
									echo "<meta http-equiv='refresh' content='0;nhapthongtinkh.php'>";
								}
							}else{
								$_SESSION['km_giatri']=1;
								echo 'Không có mã giảm giá này!!!';
								echo "<meta http-equiv='refresh' content='1;nhapthongtinkh.php'>";
							}
						}
					
						
?>				
</form>	

</div>
</div>

<?php
	include('head/footer.php');
?>

</body>
</html>
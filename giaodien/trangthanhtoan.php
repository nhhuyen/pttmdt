<html>
<head>
<meta charset='utf-8'>
<?php
	include('../modules/connect.php');
	include('head/head.php');
	include('head/menu.php');
?>
<title>THANH TOÁN</title>
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
.btdangnhap {
    width: 110px;
    margin-left: 35px;
    margin-top: 5px;
    border-radius: 10px;
    padding: 10px 0; 
    background-color: #ccc;
    border: 1px solid #00a698;
    text-decoration: none!important;
    display: block;
    color: #00a698;
    font-weight: bold;
    text-align: center;
}
.content{
	width:1400px;
	display:flex;
	margin:auto;
border: #ff0000 solid 0px;
	
}
.content_left{
	
	width:900px;
border: #ff0000 solid 0px;
   background-color:#ffffff;
}
.content_right{
	border: #ffffff solid 0px;
	width:500px;

   background-color:#ffffff;
}
#menu li {
font-size:20px;
  color: #f1f1f1;
  display: inline-block;


  height: 50px;
  line-height: 50px;
  
}

#menu a {
	padding : 0 30px;
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
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
	background-color:#168FB0;
}
#chuthongtinkh{
	color:#ffffff;
	font-size:25px;
	text-align:center;
	margin-top:20px;
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
	height:200px;
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
.logo{
	width:150px;
	
	background-color:#E6E6E6
}
.logo{
	width:auto

}
.benphailogo{
	margin-top:10px;
	width:750px;
}
.bangthongtinve{
	width:800px;
}	
#tenchuden{
	color:#000000;
	font-size:20px;
	font-weight: bold;
	text-align:center;
}
#tenchudennho{
	color:#000000;
	font-size:1px;
	font-weight: bold;
}
.panel-title{ display:flex;
	height:50px;
	border-radius: 5px;
	margin:5px auto;
	width:800px;
	background-color:#D9EDF7;
}
.panel-title1{
	border:#D9EDF7 solid 2px;	
	margin:0px auto;
	width:800px;
	background-color:#ffffff;
}

	.chu{
		
			color:#31708F;
	font-size:18px;
	}
	.churadio{
		padding-left:500px;
			color:#000000;
	font-size:15px;
	}
		.churadio1{
		padding-left:440px;
			color:#000000;
	font-size:15px;
	}
	.churadio2{
		padding-left:250px;
			color:#000000;
	font-size:15px;
	}
	.churadio3{
		padding-left:400px;
			color:#000000;
	font-size:15px;
	}
	.chutongcong{
		color:#0D7F4E;
	font-size:26px;
	}
	.btn_datve{
		background-color:#2E64FE;
		margin:10px 400px;
		width:200px;
		height:50px;
	}
	
	.ct_hanhkhach{
		margin:0px 0px 20px 20px; 
		border-collapse:collapse;
		width:95%;
		
	}
	
	.ct_hanhkhach td,th{
		padding: 4px;
	}
	
	.tongtt{
		margin-bottom:120px;
		margin-right:25px;
		
	}
	
	.chudatve{
		color:#ffffff;
	font-size:20px;
	}
	<!--css -->
	ul.bankList {
		clear: both;
		height: 202px;
		width: 636px;
	}
	ul.bankList li {
		list-style-position: outside;
		list-style-type: none;
		cursor: pointer;
		float: left;
		margin-right: 0;
		padding: 5px 2px;
		text-align: center;
		width: 90px;
	}
	.list-content li {
		list-style: none outside none;
		margin: 0 0 10px;
	}
	
	.list-content li .boxContent {
		display: none;
		width: 700px;
		border:1px solid #cccccc;
		padding:10px; 
	}
	.list-content li.active .boxContent {
		display: block;
	}
	.list-content li .boxContent ul {
		height:280px;
	}
	
	i.VISA, i.MASTE, i.AMREX, i.JCB, i.VCB, i.TCB, i.MB, i.VIB, i.ICB, i.EXB, i.ACB, i.HDB, i.MSB, i.NVB, i.DAB, i.SHB, i.OJB, i.SEA, i.TPB, i.PGB, i.BIDV, i.AGB, i.SCB, i.VPB, i.VAB, i.GPB, i.SGB,i.NAB,i.BAB 
	{ width:80px; height:30px; display:block; background:url(https://www.nganluong.vn/webskins/skins/nganluong/checkout/version3/images/bank_logo.png) no-repeat;}
	i.MASTE { background-position:0px -31px}
	i.AMREX { background-position:0px -62px}
	i.JCB { background-position:0px -93px;}
	i.VCB { background-position:0px -124px;}
	i.TCB { background-position:0px -155px;}
	i.MB { background-position:0px -186px;}
	i.VIB { background-position:0px -217px;}
	i.ICB { background-position:0px -248px;}
	i.EXB { background-position:0px -279px;}
	i.ACB { background-position:0px -310px;}
	i.HDB { background-position:0px -341px;}
	i.MSB { background-position:0px -372px;}
	i.NVB { background-position:0px -403px;}
	i.DAB { background-position:0px -434px;}
	i.SHB { background-position:0px -465px;}
	i.OJB { background-position:0px -496px;}
	i.SEA { background-position:0px -527px;}
	i.TPB { background-position:0px -558px;}
	i.PGB { background-position:0px -589px;}
	i.BIDV { background-position:0px -620px;}
	i.AGB { background-position:0px -651px;}
	i.SCB { background-position:0px -682px;}
	i.VPB { background-position:0px -713px;}
	i.VAB { background-position:0px -744px;}
	i.GPB { background-position:0px -775px;}
	i.SGB { background-position:0px -806px;}
	i.NAB { background-position:0px -837px;}
	i.BAB { background-position:0px -868px;}
	
	ul.cardList li {
		cursor: pointer;
		float: left;
		margin-right: 0;
		padding: 5px 4px;
		text-align: center;
		width: 90px;
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
		<div class="chuthongtinchuyenbay">THÔNG TIN LIÊN HỆ & HÀNH KHÁCH</div>
		</div>
		<center><p id="tenchuden">CHI TIẾT LIÊN HỆ</p></center>
		<?php  
			$nd_ma=$_SESSION['nd_ma'];
			$pdv_ma=$_SESSION['pdv_ma'];
			$sql="select * from nguoi_dung inner join phieu_dat_ve on nguoi_dung.nd_ma = phieu_dat_ve.nd_ma where phieu_dat_ve.nd_ma = $nd_ma and pdv_ma=$pdv_ma";
			$result = mysql_query($sql);
			while($dong=mysql_fetch_array($result)){
		?>
			<table style="margin-left:20px; font-size:18px">
				<tr>
				<td>Khách hàng:</td>			<td style="padding-left:30px;"><?php echo $dong['nd_ten'] ?></td>		</tr>
				<tr>
				<td>SĐT:</td> 					<td style="padding-left:30px;"><?php echo $dong['nd_sdt'] ?></td>		</tr>
				<tr>
				<td>Email: </td>				<td style="padding-left:30px;"><?php echo $dong['nd_mail'] ?></td>		</tr>
				<tr>
				<td>Địa chỉ:</td> 				<td style="padding-left:30px;"><?php echo $dong['nd_diachi'] ?></td>	</tr>	
				<tr>
				<td>Ghi Chú:</td> 				<td style="padding-left:30px;"><?php echo $dong['pdv_ghichu'] ?></td> 	</tr>		
			</table>
			<?php 
			} 
			?>
		<br>
		<p id="tenchuden">CHI TIẾT HÀNH KHÁCH</p>
		<table class='ct_hanhkhach' border="1">
		<tr>
			<th>Họ tên</th><th>Ngày sinh</th><th>Hành lý</th>
		</tr>
		<?php 
			
			$sql="select * from phieu_dat_ve inner join ve_may_bay on phieu_dat_ve.pdv_ma=ve_may_bay.pdv_ma
											inner join nguoi_dung on phieu_dat_ve.nd_ma = nguoi_dung.nd_ma
											inner join loai_ve on ve_may_bay.lv_ma = loai_ve.lv_ma
											inner join chuyen_bay on ve_may_bay.cb_ma= chuyen_bay.cb_ma
											inner join hanh_ly on ve_may_bay.hl_ma = hanh_ly.hl_ma
											where phieu_dat_ve.pdv_ma=$pdv_ma";
			$result = mysql_query($sql);
			$i=0;
			$tong_hl=0;
			while($dong=mysql_fetch_array($result)){
				$tong_hl+=$dong['hl_gia'];
				$i++;
				if($dong['pdv_khuhoi']==1){
					$sove=$dong['pdv_sove']/2;
					if($i==1){
						echo '<td colspan="3"><strong>Chuyến đi</strong></td>';
					}
					if($i==$sove+1){
						echo '<td colspan="3"><strong>Chuyến về</strong></td>';
					}
				}
				$vmb_hoten= $dong['vmb_quydanh'].' '.$dong['vmb_ten'].' / '.$dong['vmb_ho'];
		?>
			<tr>
				<td><?php echo $vmb_hoten ?></td>
				<td><?php echo $dong['vmb_ngaysinh'] ?></td>
				<td><?php echo $dong['hl_mota'] ?></td>
			</tr>
<?php	
			} 
				
	//$sqlhl="update phieu_dat_ve set pdv_tonghl=$tong_hl where pdv_ma=$pdv_ma";
	//$resulthl=mysql_query($sqlhl);
?>
		</table>
</div>

<div class='tongtt'>
	<?php 
	$sql="select * from phieu_dat_ve where pdv_ma=$pdv_ma";
	$result=mysql_query($sql);
	$dong=mysql_fetch_array($result);
	$tong_tt=$dong['pdv_tongve']+$tong_hl;
	?>
	<table border='0' style="float:right; font-size:20px">
		<tr>
		<td>Tổng giá vé:</td>			<td style="padding-left:30px;color:#FF8000;font-weight:bold;"><?php echo number_format($dong['pdv_tongve']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></td>		</tr>
		<tr>
		<td>Tổng hành lý mua thêm:</td> <td style="padding-left:30px;color:#FF8000;font-weight:bold;"><?php echo number_format($tong_hl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?>			</td>		</tr>
		<tr>
		<td>Tổng thành tiền: </td>		<td style="padding-left:30px;color:#FF8000;font-weight:bold;"><?php echo number_format($tong_tt*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?>			</td>		</tr>					
	</table>
</div>

<div class="formthongtinve">
<div class="form_title">
<div class="chuthongtinchuyenbay">CHỌN HÌNH THỨC THANH TOÁN</div>
</div>


<?php
		$_SESSION['tong_hl']=$tong_hl;
if(@$_POST['nlpayment']) {
	include('../thanhtoan/config.php');	
	include('../thanhtoan/include/NL_Checkoutv3.php');	
	$nlcheckout= new NL_CheckOutV3(MERCHANT_ID,MERCHANT_PASS,RECEIVER,URL_API);
	$total_amount=$_POST['total_amount'];
	 
	 $array_items[0]= array('item_name1' => 'Product name',
					 'item_quantity1' => 1,
					 'item_amount1' => $total_amount,
					 'item_url1' => 'http://nganluong.vn/');
					 
	$array_items=array();				 
	 $payment_method =$_POST['option_payment'];
	 $bank_code = @$_POST['bankcode'];
	 $order_code ="macode_".time();
	
	 $payment_type ='';
	 $discount_amount =0;
	 $order_description='';
	 $tax_amount=0;
	 $fee_shipping=0;
	 $return_url ='http://localhost/nganluong.vn/checkoutv3/payment_success.php';
	 $cancel_url =urlencode('http://localhost/nganluong.vn/checkoutv3?orderid='.$order_code) ;
	
	 $buyer_fullname =$_POST['buyer_fullname'];
	 $buyer_email =$_POST['buyer_email'];
	 $buyer_mobile =$_POST['buyer_mobile'];
	 
	 $buyer_address ='';
	 
	 
	 
	
	if($payment_method !='' && $buyer_email !="" && $buyer_mobile !="" && $buyer_fullname !="" && filter_var( $buyer_email, FILTER_VALIDATE_EMAIL )  ){
		if($payment_method =="VISA"){
		
			$nl_result= $nlcheckout->VisaCheckout($order_code,$total_amount,$payment_type,$order_description,$tax_amount,
											  $fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
									          $buyer_address,$array_items,$bank_code);
											  
		}elseif($payment_method =="NL"){
			$nl_result= $nlcheckout->NLCheckout($order_code,$total_amount,$payment_type,$order_description,$tax_amount,
												$fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
												$buyer_address,$array_items);
												
		}elseif($payment_method =="ATM_ONLINE" && $bank_code !='' ){
			$nl_result= $nlcheckout->BankCheckout($order_code,$total_amount,$bank_code,$payment_type,$order_description,$tax_amount,
												  $fee_shipping,$discount_amount,$return_url,$cancel_url,$buyer_fullname,$buyer_email,$buyer_mobile, 
												  $buyer_address,$array_items) ;
		}
		elseif($payment_method =="NH_OFFLINE"){
				$nl_result= $nlcheckout->officeBankCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
			}
		elseif($payment_method =="ATM_OFFLINE"){
				$nl_result= $nlcheckout->BankOfflineCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
				
			}
		elseif($payment_method =="IB_ONLINE"){
				$nl_result= $nlcheckout->IBCheckout($order_code, $total_amount, $bank_code, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items);
			}
		elseif ($payment_method == "CREDIT_CARD_PREPAID") {

			$nl_result = $nlcheckout->PrepaidVisaCheckout($order_code, $total_amount, $payment_type, $order_description, $tax_amount, $fee_shipping, $discount_amount, $return_url, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, $array_items, $bank_code);
		}
		//var_dump($nl_result); die;
		if ($nl_result->error_code =='00'){
		
		//Cập nhât order với token  $nl_result->token để sử dụng check hoàn thành sau này
		?>
		<script type="text/javascript">
		<!--
		window.location = "<?php echo(string)$nl_result->checkout_url; // .'&lang=en' chuyển mặc định tiếng anh  ?>"
		//-->
		</script>
		<?PHP
		}else{
			echo $nl_result->error_message;
		}
			
	}else{
		echo "<h3> Bạn chưa nhập đủ thông tin khách hàng </h3>";
	}
 }				
	
?>

<body>
	<form  name="NLpayBank" action="#" method="post">	
		<table style="clear:both;width:500px;padding-left:20px;padding-top:10px"> 
			<tr><td colspan="2"><p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span> Bạn nhập đầy đủ thông tin sau </td>	
			</tr>
			
			<tr><td>Số tiền thanh toán: </td>
				<td>
					 <input type="text" readonly  style="width:270px;border:0px;" id="total_amount" name="total_amount" class="field-check" 
					 value="<?php echo $tong_tt-$_SESSION['gg']; ?>">
				</td>
			</tr>
				<?php  
			$_SESSION['tong_tt']=$tong_tt;
			$nd_ma=$_SESSION['nd_ma'];
			$pdv_ma=$_SESSION['pdv_ma'];
			$sql="select * from nguoi_dung inner join phieu_dat_ve on nguoi_dung.nd_ma = phieu_dat_ve.nd_ma where phieu_dat_ve.nd_ma = $nd_ma and pdv_ma=$pdv_ma";
			$result = mysql_query($sql);
			while($dong=mysql_fetch_array($result)){
		?>
			<tr><td>Họ Tên: </td>
				<td>
					 <input type="text" style="width:270px" id="fullname" name="buyer_fullname" class="field-check " value="<?php echo $dong['nd_ten'] ?>">
				</td>
			</tr>
			<tr><td>Email: </td>
				<td>
					 <input type="text" style="width:270px" id="fullname" name="buyer_email" class="field-check " value="<?php echo $dong['nd_mail'] ?>">
				</td>
			</tr>
			<tr><td>Số Điện thoại: </td>
				<td>
					 <input type="text" style="width:270px" id="fullname" name="buyer_mobile" class="field-check " value="<?php echo $dong['nd_sdt'] ?>">
				</td>
			</tr>
	<?php 
			} 
			?>			
		</table>	
	<ul class="list-content">
		<li class="active">
			<label><input type="radio" value="NL" name="option_payment" selected="true">Thanh toán bằng Ví điện tử NgânLượng</label>
			<div class="boxContent">
				<p>
				Thanh toán trực tuyến AN TOÀN và ĐƯỢC BẢO VỆ, sử dụng thẻ ngân hàng trong và ngoài nước hoặc nhiều hình thức tiện lợi khác.
				Được bảo hộ & cấp phép bởi NGÂN HÀNG NHÀ NƯỚC, ví điện tử duy nhất được cộng đồng ƯA THÍCH NHẤT 2 năm liên tiếp, Bộ Thông tin Truyền thông trao giải thưởng Sao Khuê
				<br/>Giao dịch. Đăng ký ví NgânLượng.vn miễn phí <a href="https://www.nganluong.vn/?portal=nganluong&amp;page=user_register" target="_blank">tại đây</a></p>
			</div>
		</li>
		<li>
			<label><input type="radio" value="ATM_ONLINE" name="option_payment">Thanh toán online bằng thẻ ngân hàng nội địa</label>
			<div class="boxContent">
				<p><i>
				<span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>: Bạn cần đăng ký Internet-Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện.</i></p>
							
						<ul class="cardList clearfix">
						<li class="bank-online-methods ">
							<label for="vcb_ck_on">
								<i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
								<input type="radio" value="BIDV"  name="bankcode" >
							
						</label></li>
						<li class="bank-online-methods ">
							<label for="vcb_ck_on">
								<i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
								<input type="radio" value="VCB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="vnbc_ck_on">
								<i class="DAB" title="Ngân hàng Đông Á"></i>
								<input type="radio" value="DAB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="tcb_ck_on">
								<i class="TCB" title="Ngân hàng Kỹ Thương"></i>
								<input type="radio" value="TCB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_mb_ck_on">
								<i class="MB" title="Ngân hàng Quân Đội"></i>
								<input type="radio" value="MB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_vib_ck_on">
								<i class="VIB" title="Ngân hàng Quốc tế"></i>
								<input type="radio" value="VIB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_vtb_ck_on">
								<i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
								<input type="radio" value="ICB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_exb_ck_on">
								<i class="EXB" title="Ngân hàng Xuất Nhập Khẩu"></i>
								<input type="radio" value="EXB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_acb_ck_on">
								<i class="ACB" title="Ngân hàng Á Châu"></i>
								<input type="radio" value="ACB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_hdb_ck_on">
								<i class="HDB" title="Ngân hàng Phát triển Nhà TPHCM"></i>
								<input type="radio" value="HDB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_msb_ck_on">
								<i class="MSB" title="Ngân hàng Hàng Hải"></i>
								<input type="radio" value="MSB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_nvb_ck_on">
								<i class="NVB" title="Ngân hàng Nam Việt"></i>
								<input type="radio" value="NVB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_vab_ck_on">
								<i class="VAB" title="Ngân hàng Việt Á"></i>
								<input type="radio" value="VAB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_vpb_ck_on">
								<i class="VPB" title="Ngân Hàng Việt Nam Thịnh Vượng"></i>
								<input type="radio" value="VPB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="sml_atm_scb_ck_on">
								<i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
								<input type="radio" value="SCB"  name="bankcode" >
							
						</label></li>

						

						<li class="bank-online-methods ">
							<label for="bnt_atm_pgb_ck_on">
								<i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
								<input type="radio" value="PGB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="bnt_atm_gpb_ck_on">
								<i class="GPB" title="Ngân hàng TMCP Dầu khí Toàn Cầu"></i>
								<input type="radio" value="GPB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="bnt_atm_agb_ck_on">
								<i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
								<input type="radio" value="AGB"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="bnt_atm_sgb_ck_on">
								<i class="SGB" title="Ngân hàng Sài Gòn Công Thương"></i>
								<input type="radio" value="SGB"  name="bankcode" >
							
						</label></li>	
						<li class="bank-online-methods ">
							<label for="sml_atm_bab_ck_on">
								<i class="BAB" title="Ngân hàng Bắc Á"></i>
								<input type="radio" value="BAB"  name="bankcode" >
							
						</label></li>
						<li class="bank-online-methods ">
							<label for="sml_atm_bab_ck_on">
								<i class="TPB" title="Tền phong bank"></i>
								<input type="radio" value="TPB"  name="bankcode" >
							
						</label></li>
						<li class="bank-online-methods ">
							<label for="sml_atm_bab_ck_on">
								<i class="NAB" title="Ngân hàng Nam Á"></i>
								<input type="radio" value="NAB"  name="bankcode" >
							
						</label></li>
						<li class="bank-online-methods ">
							<label for="sml_atm_bab_ck_on">
								<i class="SHB" title="Ngân hàng TMCP Sài Gòn - Hà Nội (SHB)"></i>
								<input type="radio" value="SHB"  name="bankcode" >
							
						</label></li>
						<li class="bank-online-methods ">
							<label for="sml_atm_bab_ck_on">
								<i class="OJB" title="Ngân hàng TMCP Đại Dương (OceanBank)"></i>
								<input type="radio" value="OJB"  name="bankcode" >
							
						</label></li>
						



						
					</ul>
				
			</div>
		</li>
		<li>
			<label><input type="radio" value="IB_ONLINE" name="option_payment">Thanh toán bằng IB</label>
			<div class="boxContent">
				<p><i>
						<span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>: Bạn cần đăng ký Internet-Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện.</i></p>

				<ul class="cardList clearfix">
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
							<input type="radio" value="BIDV"  name="bankcode" >

						</label></li>
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
							<input type="radio" value="VCB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="vnbc_ck_on">
							<i class="DAB" title="Ngân hàng Đông Á"></i>
							<input type="radio" value="DAB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="tcb_ck_on">
							<i class="TCB" title="Ngân hàng Kỹ Thương"></i>
							<input type="radio" value="TCB"  name="bankcode" >

						</label></li>


				</ul>

			</div>
		</li>
		<li>
			<label><input type="radio" value="ATM_OFFLINE" name="option_payment">Thanh toán atm offline</label>
			<div class="boxContent">
				
				<ul class="cardList clearfix">
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
							<input type="radio" value="BIDV"  name="bankcode" >

						</label></li>
						
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
							<input type="radio" value="VCB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="vnbc_ck_on">
							<i class="DAB" title="Ngân hàng Đông Á"></i>
							<input type="radio" value="DAB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="tcb_ck_on">
							<i class="TCB" title="Ngân hàng Kỹ Thương"></i>
							<input type="radio" value="TCB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_mb_ck_on">
							<i class="MB" title="Ngân hàng Quân Đội"></i>
							<input type="radio" value="MB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_vtb_ck_on">
							<i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
							<input type="radio" value="ICB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_acb_ck_on">
							<i class="ACB" title="Ngân hàng Á Châu"></i>
							<input type="radio" value="ACB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_msb_ck_on">
							<i class="MSB" title="Ngân hàng Hàng Hải"></i>
							<input type="radio" value="MSB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_scb_ck_on">
							<i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
							<input type="radio" value="SCB"  name="bankcode" >

						</label></li>
					<li class="bank-online-methods ">
						<label for="bnt_atm_pgb_ck_on">
							<i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
							<input type="radio" value="PGB"  name="bankcode" >

						</label></li>
					
					 <li class="bank-online-methods ">
						<label for="bnt_atm_agb_ck_on">
							<i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
							<input type="radio" value="AGB"  name="bankcode" >

						</label></li>
					<li class="bank-online-methods ">
						<label for="sml_atm_bab_ck_on">
							<i class="SHB" title="Ngân hàng TMCP Sài Gòn - Hà Nội (SHB)"></i>
							<input type="radio" value="SHB"  name="bankcode" >

						</label></li>
					



				</ul>

			</div>
		</li>
		<li>
			<label><input type="radio" value="NH_OFFLINE" name="option_payment">Thanh toán tại văn phòng ngân hàng</label>
			<div class="boxContent">
				
				<ul class="cardList clearfix">
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="BIDV" title="Ngân hàng TMCP Đầu tư &amp; Phát triển Việt Nam"></i>
							<input type="radio" value="BIDV"  name="bankcode" >

						</label></li>
					<li class="bank-online-methods ">
						<label for="vcb_ck_on">
							<i class="VCB" title="Ngân hàng TMCP Ngoại Thương Việt Nam"></i>
							<input type="radio" value="VCB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="vnbc_ck_on">
							<i class="DAB" title="Ngân hàng Đông Á"></i>
							<input type="radio" value="DAB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="tcb_ck_on">
							<i class="TCB" title="Ngân hàng Kỹ Thương"></i>
							<input type="radio" value="TCB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_mb_ck_on">
							<i class="MB" title="Ngân hàng Quân Đội"></i>
							<input type="radio" value="MB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_vib_ck_on">
							<i class="VIB" title="Ngân hàng Quốc tế"></i>
							<input type="radio" value="VIB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_vtb_ck_on">
							<i class="ICB" title="Ngân hàng Công Thương Việt Nam"></i>
							<input type="radio" value="ICB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_acb_ck_on">
							<i class="ACB" title="Ngân hàng Á Châu"></i>
							<input type="radio" value="ACB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_msb_ck_on">
							<i class="MSB" title="Ngân hàng Hàng Hải"></i>
							<input type="radio" value="MSB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="sml_atm_scb_ck_on">
							<i class="SCB" title="Ngân hàng Sài Gòn Thương tín"></i>
							<input type="radio" value="SCB"  name="bankcode" >

						</label></li>



					<li class="bank-online-methods ">
						<label for="bnt_atm_pgb_ck_on">
							<i class="PGB" title="Ngân hàng Xăng dầu Petrolimex"></i>
							<input type="radio" value="PGB"  name="bankcode" >

						</label></li>

					<li class="bank-online-methods ">
						<label for="bnt_atm_agb_ck_on">
							<i class="AGB" title="Ngân hàng Nông nghiệp &amp; Phát triển nông thôn"></i>
							<input type="radio" value="AGB"  name="bankcode" >

						</label></li>
					<li class="bank-online-methods ">
						<label for="sml_atm_bab_ck_on">
							<i class="TPB" title="Tền phong bank"></i>
							<input type="radio" value="TPB"  name="bankcode" >

						</label></li>



				</ul>

			</div>
		</li>
		<li>
			<label><input type="radio" value="VISA" name="option_payment" selected="true">Thanh toán bằng thẻ Visa hoặc MasterCard</label>
			<div class="boxContent">
				<p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">Lưu ý</span>:Visa hoặc MasterCard.</p>
				<ul class="cardList clearfix">
						<li class="bank-online-methods ">
							<label for="vcb_ck_on">
								Visa:
								<input type="radio" value="VISA"  name="bankcode" >
							
						</label></li>

						<li class="bank-online-methods ">
							<label for="vnbc_ck_on">
								Master:<input type="radio" value="MASTER"  name="bankcode" >
						</label></li>
				</ul>	
			</div>
		</li>
		<li>
			<label><input type="radio" value="CREDIT_CARD_PREPAID" name="option_payment" selected="true">Thanh toán bằng thẻ Visa hoặc MasterCard trả trước</label>
			
		</li>
	</ul>
	
	<div style="text-align:center;"><input style="font-size:18px;padding:10px;" type="submit" name="nlpayment" value="THANH TOÁN"/></div>
				
	</form>	
	<script src="https://www.nganluong.vn/webskins/javascripts/jquery_min.js" type="text/javascript"></script>		
	<script language="javascript">
		$('input[name="option_payment"]').bind('click', function() {
		$('.list-content li').removeClass('active');
		$(this).parent().parent('li').addClass('active');
		});		
	</script> 	

</div>	
</div>
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
</table>
<?php } ?>
<table border="0" style="width:490px;">
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
		<p style="padding-left:15px;font-weight: bold;">Tổng hành lý</p>
		</td>
		<td >
		<p style="margin:5px 0px ;float:right"><?php echo number_format($tong_hl*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
		</td>
</tr>
	
<tr>
<td>
<p style="padding-left:15px;font-weight: bold;">Tổng cộng</p>
</td>
<td >

<p style="float:right;margin:5px 0px ;color:#FF8000;"><?php echo number_format(($_SESSION['tc']+$tong_hl)*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
</td>
</tr>
<tr>
<td>
<p style="padding-left:15px;font-weight: bold;">Mã giảm giá</p>
</td>
<td >

<p style="float:right;margin:5px 0px ;color:#FF8000;"><?php echo number_format($_SESSION['gg']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
</td>
</tr>
<tr>
<td>
<p style="padding-left:15px;font-weight: bold;">Thành tiền</p>
</td>
<td >

<p style="float:right;margin:5px 0px ;color:#FF8000;"><?php echo number_format(($_SESSION['tc']+$tong_hl-$_SESSION['gg'])*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></p>
</td>
</tr>
</table>
</div>
	
</div>
</div>
</body>
</html>
<?php	session_start();	?>
<style>
.header{
	background-color:#ffffff;
	width:100%;
	height:100px;
	margin:0px;
}

.btdangnhap{
	width:110px;
	margin-left:35px;
	margin-top:5px;
	border-radius:10px;
	padding:10px;
	background-color:#ccc;
	border:1px solid #00a698;
	text-decoration: none!important;
	display:block;
	color:#00a698;
	font-weight:bold;
	text-align:center;
}

.btdangnhap:hover{
	background-color:#00a698;
	color:white;
	border:1px solid #ccc;
}

#menu ul {
	height:50px;
   background: #0b8bca;
  list-style-type: none;
  text-align: center;
}

.logo{
	width:auto;
	margin-left:50px;
}

.hotline{
	margin-top:0px;
	margin-left:30px;
	float:right;
}

.hotline-text{
margin-top:0px;
margin-right: 4px;
color: #00a698;
font-weight: 700;
text-align: center;
border-bottom: 1px solid #00a698;
}
.hotline-top{
color: #00a698;
font-size: 25px;
margin-left:13px;
}
.tbheader td{
	padding-top:14px;
}
</style>
<!-- AutoAds Tracking Code -->
<script id='autoAdsMaxLead-widget-script' src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=2E7EAAB7CD2248D28B78F7D695E21DEC' type='text/javascript' charset='UTF-8' async></script>
<!-- End -->
 
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'vi'},'google_translate_element');
}
</script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="header">
<table class='tbheader'><tr><td>
                  <div class="logo">
                    <a href="../index.php" title="Trang chủ">
                    <img title="Trang chủ" alt="Trang chủ" style='width:380px;' src="../hinhanh/logo_mb.png" /></a>
                      
                  </div>  </td> 
				<td style='padding-top:20px;'>
					<form method="post" enctype="multipart/form-data" name="myForm">
					<?php
						if(!isset($_SESSION['ti_gia'])){
							$_SESSION['ti_gia']=1;
						}
						if(isset($_POST['submit'])){
							$_SESSION['ti_gia']=$_POST['ti_gia'];
						}
							
					
						$ti_gia = $_SESSION['ti_gia'];
						$sql="select * from ti_gia where tg_ma = $ti_gia";
						$result=mysql_query($sql);
						while($dong=mysql_fetch_array($result)){
							$_SESSION['tg_donvi']=$dong['tg_donvi'];
							$_SESSION['tg_tigia']=$dong['tg_tigia'];
						}
					?>	
					<label style='margin-left:500px;'>Tiền tệ: </label>
					<select style="width:35px" name="ti_gia" id='ti_gia' onchange="myFunction()" required>
					<?php
					$sql="select * from ti_gia";
					$result=mysql_query($sql);
					while($dong=mysql_fetch_array($result)){
						if($ti_gia==$dong['tg_ma']) $selected='selected="selected"'; else $selected='';
						echo "<option ".$selected." value='".$dong['tg_ma']."'>".$dong['tg_donvi'].' - '.$dong['tg_ten']."</option>";
					}
					?>
					</select>
					<?php	
						$sql="select * from gia";
						$result=mysql_query($sql);
				/*		while($dong=mysql_fetch_array($result)){
							echo $dong['gia']*$_SESSION['tg_tigia'].' '.$_SESSION['tg_donvi'].'<br>';
						}*/
					?>

					<button hidden type='submit' name='submit' id='submit'>Submit</button>

					<script>
					function myFunction(){
						document.getElementById('submit').click();
					}
					</script>
					</form>
					<div style='margin-left:500px;' id="google_translate_element"></div>
				</td>  
                <td><div class="hotline">
                    <div class="hotline-text">TỔNG ĐÀI ĐẶT VÉ</div>
                    <div class="hotline-top">1900 2020</div>    
                    </div>
				</td>
				<td style='padding-left:15px'><a href="giohang.php"><img width='60px' src="../hinhanh/icon/cart.png" /></a></td>  
				<td style='padding-top: 10px; '>
					<?php
						if (isset($_SESSION['nd_ma'])){
							echo '<p style="margin-left:35px;">Xin chào: '.$_SESSION['nd_ten']."</p>";
							echo '<a class="btdangnhap" href="login/dx.php">Đăng Xuất</a>';
						}
						else{
							echo '<a class="btdangnhap" href="?quanly=dangnhap">Đăng Nhập</a>';
						}
					?>
				</td>
		</tr>                 
</table>
</div>
<?php
	session_start();
	$conn=mysql_connect("localhost","root","")
			or die("Could not connect:".mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
			or die("Could not select database");
	mysql_query("SET NAMES 'utf8'",$conn);
?>
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
<table class='tbheader' border='0'><tr><td>
                  <div class="logo">
                                            <a href="index.php" title="Trang chủ">
                      <img title="Trang chủ" alt="Trang chủ" style='width:380px;' src="hinhanh/logo_mb.png" /></a>
                      
                  </div>  </td> 
				<td>
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
					<select style="width:35px;" name="ti_gia" id='ti_gia' onchange="myFunction()" required>
					<?php
					$sql="select * from ti_gia";
					$result=mysql_query($sql);
					while($dong=mysql_fetch_array($result)){
						if($ti_gia==$dong['tg_ma']) $selected='selected="selected"'; else $selected='';
						echo "<option ".$selected." value='".$dong['tg_ma']."'>".$dong['tg_donvi'].' - '.$dong['tg_ten']."</option>";
					}
					?>
					</select>
					
					<button hidden type='submit' name='submit' id='submit'>Submit</button>
					
					<script>
					function myFunction(){
						document.getElementById('submit').click();
					}
					</script>
					</form>
					<div style='margin-left:500px;' id="google_translate_element"></div>
				</td>  
                <td > <div class="hotline">
				
                    <div class="hotline-text">TỔNG ĐÀI ĐẶT VÉ</div>
                    <div class="hotline-top">1900 2020</div>    
                    </div>
				</td>
				<td style='padding-left:15px'><a href="giaodien/giohang.php"><img width='60px' src="hinhanh/icon/cart.png" /></a></td>  
				<td  style='padding-top: 10px'>
					<?php
					if (isset($_SESSION['nd_ma'])){		   
						echo '<p style="margin-left:35px;">Xin chào: '.$_SESSION['nd_ten']."</p>";
						echo '<a class="btdangnhap" href="giaodien/login/dx.php">Đăng Xuất</a>';
					}
					else{
						echo '<a class="btdangnhap" href="?quanly=dangnhap">Đăng Nhập</a>';
				}
					?>
				</td>				   
			</tr>
								
                   
</table>
</div>
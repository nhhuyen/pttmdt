<html>
<head>
<meta charset='utf-8'>
<?php
	include('../modules/connect.php');
	include('head/head.php');
	include('head/menu.php');
?>
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
#menu li {
font-size:20px;
  color: #f1f1f1;
  display: inline-block;


  height: 50px;
  line-height: 50px;
  
}
#menu ul {
	height:50px;
   background: #0b8bca;
  list-style-type: none;
  text-align: center;
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
	padding:10px 0;
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
   background: #007369;
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
.content1{
	margin:auto;
	margin-top:10px;
	width:90%;
	height:600px;

}
.header1{
	
	width:100%;
	height:40px;
	background-color:#FE9A2E;
}

.chuvemaybay{
	padding:auto;
	margin-top:30px;
	
	font-size:24px;
	font-weight:bold;	
	
}
.formvemaybay{
	width:80%;
	margin:auto;
	margin-top:20px;
	border-collapse:collapse;
	font-size:18px;
	text-align:center;
}

.formvemaybay th{
	background-color:#0b8bca;
}

.formgiave{
	margin:auto;
	width:900px;
	display:flex;
	margin-left:200px;
	margin-top:10px;
}
.tomtatgiave{
	
	font-size:20px;
	font-weight:bold;
}
.chutongcong{
	
	font-size:20px;
	font-weight:bold;
}
.btn{
	display:flex;
}
.btnback{
	
	text-align:center;
	color:#fff;
	font-size:20px;
	font-weight:bold;
	width:150px;
	height:30px;
	background-color:#FE9A2E;
	margin-top:50px;
	margin-left:200px;
	
}
.btnthanhtoan{
	text-decoration:none;
	text-align:center;
	color:#fff;
	font-size:20px;
	font-weight:bold;
	width:150px;
	height:30px;
	background-color:#FE9A2E;
	margin-top:50px;
	margin-left:600px;
	padding:10px 20px ;
	
}
</style>
</head>
<body>
<div class="content1">

<?php 
	$gh_ma = $_SESSION['nd_ma'];
	$sql="SELECT * FROM chitiet_giohang inner join chuyen_bay on chuyen_bay.cb_ma = chitiet_giohang.cb_ma
								inner join loai_ve on loai_ve.lv_ma=chitiet_giohang.lv_ma
								inner join tuyen_bay on tuyen_bay.tb_ma = chuyen_bay.tb_ma                        
								inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma 
								inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma
								inner join gia on loai_ve.lv_ma=gia.lv_ma 
                                			  and gia.cb_ma=chitiet_giohang.cb_ma
								inner join san_bay on san_bay.sb_ma=tuyen_bay.sb_ma_di                               
								where gh_ma = $gh_ma";
	$result=mysql_query($sql);
	$i=0;
	$row=mysql_num_rows($result);
	
	if($row<>0){?>
		<center><p class="chuvemaybay">Vé máy bay của bạn</p></center>
		<table class="formvemaybay" border="1">
		<tr>
		<th>STT</th><th width="300px" height="40px">Hãng vé</th><th width="270px">Tuyến bay</th><th>Loại vé</th><th>Thời gian</th><th width="150px">Giá</th><th>Xóa</th>
		<tr>
<?php	}else{
		echo '<p style="font-size:20px;margin-top:15px;text-align:center;">Giỏ hàng trống</p>';
	}	
	while($dong=mysql_fetch_array($result)){
	$i++;
?>
<tr>
<td><?php echo $i ?></td>
<td width="300px" height="100px" ><img src="<?php echo $dong['hv_hinh']?>" height="40px"></td>
<td width="270px"><?php echo $dong['tb_ten'] ?></td>
<td><?php echo $dong['lv_ten'] ?></td>
<td><?php echo $dong['cb_giocatcanh_chinhthuc'].' '.$dong['cb_thoidiem'] ?></td>
<td><?php echo number_format($dong['gia']*$_SESSION['tg_tigia'],2).' '.$_SESSION['tg_donvi'] ?></td>
<td><a href='?&cb_ma=<?php echo $dong["cb_ma"] ?>&lv_ma=<?php echo $dong["lv_ma"] ?>'><img src="https://cdn1.iconfinder.com/data/icons/color-bold-style/21/56-512.png" width="50px"></a></td>
</tr>

<?php } 
if(isset($_GET["cb_ma"])){
	$del=mysql_query("delete from chitiet_giohang where gh_ma=$gh_ma and cb_ma ='".$_GET['cb_ma']."' and lv_ma='".$_GET["lv_ma"]."'",$conn);
	echo "<meta http-equiv='refresh' content='0;giohang.php'>";
}
?>
</table>
</div>
</body>
</html>
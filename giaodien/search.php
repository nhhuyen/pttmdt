<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
    <style>
	
		.bn{
			padding-top:25px;
			width:100%;
			display:flex;
			background-image:url(hinhanh/banner3.png);
			height:450px;
			background-size:100%;
			background-repeat:no-repeat;
			
		}
		
		.tieudecb{
			font-size:25px;
			margin:auto;
			text-align:center;
			padding-bottom:7px;
			color: white;
		} 
		
		.tieudecb img{
			width:10px;
			height:10px;
		}
		
		.a td{
			padding:0px;
			padding-left:22px;
			padding-bottom: 7px;
			padding-top:7px;
		}
		.tieude{
			font-size:18px;
			
			margin: 0;
			color: white;
		}
		
		.lbrd{
			font-size:20px;
			margin:0px 30px 0px 0px;
			font-weight:normal;
			color: white;
		}
		
        .a{
			margin:0px 0px 0px 60px;
            border:0px solid gray;
            font-size:25px;
			width: 620px;
			height:400px;
            z-index:1;
        }
		.table_1{
			background-color: rgba(114,209,233,0.7);
			width: 520px;
			height:395px;
			display:block;
			padding-left:0px;
		}
		.box{
			width:195px;
			border: 2px solid #aaa;
			border-radius:10px;		
			padding: 8px;
			outline:none;
			font-size:15px;
		}
		input[type=text]{
			width:195px;
			border: 2px solid #aaa;
			border-radius:10px;
			padding: 8px;
			outline:none;
			font-size:15px;
			color:black;
		}
		
		.btnrd{
			width:20px;
			height: 20px;			
		}
		
		.search{
			margin:17px 0px;
			width: 180px;
			height:42px;
			font-size: 20px;
			font-weight:bold;
			border-radius:10px;
			background-color: #00a698;
			color: white; 
		}
		
    </style>
	<?php
	
	$conn=mysql_connect('127.0.0.1','root','')
	or die(mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
	or die(mysql_error());
	mysql_set_charset('UTF8',$conn);
	?>
	
	<link rel="stylesheet" href="css/tanggiam.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<script src="js/jquery.ui.datepicker-vi.js"></script>
	
	<script>
		  $( function() {
			var availableTags = [
			  <?php
				$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
				while ($rowdv = mysql_fetch_array($resultdv)){
					echo '"'.$rowdv['sb_ten']." - ".$rowdv['sb_diachi'].'",';
				}	
			?>
			];
			$( "#san_bay_di" ).autocomplete({
			  source: availableTags
			});
		  } );
		  $( function() {
			var availableTags = [
			  <?php
				$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
				while ($rowdv = mysql_fetch_array($resultdv)){
					echo '"'.$rowdv['sb_ten']." - ".$rowdv['sb_diachi'].'",';
				}	
			?>
			];
			$( "#san_bay_den" ).autocomplete({
			  source: availableTags
			});
		  } );
	</script>
	<script>
		function check(khuhoi) {
			var nhan = khuhoi;
			document.getElementById("answer").value=khuhoi;	
		}
		
		function off_ngay_ve() {
			document.getElementById("ngay_ve").disabled="disabled";
			
		}
		function on_ngay_ve() {
			document.getElementById("ngay_ve").disabled="";
		}
		function ngdi(){
			var ndi = document.getElementById("ngay_di").value;				
		//	document.getElementById("ngay_ve").value=ndi;
			$("#ngay_ve").datepicker("option", "minDate", ndi);
		}
	</script>
	
	<script>
	$( document ).ready(function() {    
		$('.btn-number').click(function(e){        
		e.preventDefault();                
		var fieldName = $(this).attr('data-field');        
		var type      = $(this).attr('data-type');        
		var input = $("input[name='"+fieldName+"']");        
		var currentVal = parseInt(input.val());        
		if (!isNaN(currentVal)) {            
		if(type == 'minus') {                
		var minValue = parseInt(input.attr('min'));                 
		if(!minValue) minValue = 0;                
		if(currentVal > minValue) {                    
		input.val(currentVal - 1).change();                
		}                 
		if(parseInt(input.val()) == minValue) {                    
		$(this).attr('disabled', true);                
		}                
		} 
		else if(type == 'plus') {                
		var maxValue = parseInt(input.attr('max'));                
		if(!maxValue) maxValue = 9999999999999;                
		if(currentVal < maxValue) {                    
		input.val(currentVal + 1).change();                
		}                
		if(parseInt(input.val()) == maxValue) {                    
		$(this).attr('disabled', true);                
		}                
		}        
		} 
		else {            
		input.val(0);        
		}    
		});    
		$('.input-number').focusin(function(){       
		$(this).data('oldValue', $(this).val());    
		});    
		$('.input-number').change(function() {                
		var minValue =  parseInt($(this).attr('min'));        
		var maxValue =  parseInt($(this).attr('max'));        
		if(!minValue) minValue = 0;        
		if(!maxValue) maxValue = 9999999999999;        
		var valueCurrent = parseInt($(this).val());                
		var name = $(this).attr('name');        
		if(valueCurrent >= minValue) {            
		$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')        
		} 
		else {            
		alert('Sorry, the minimum value was reached');            
		$(this).val($(this).data('oldValue'));        
		}        
		if(valueCurrent <= maxValue) {            
		$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')        
		}
		else {            
		alert('Sorry, the maximum value was reached');            
		$(this).val($(this).data('oldValue'));        
		}                     
		});    
		$(".input-number").keydown(function (e) {            
		// Allow: backspace, delete, tab, escape, enter and .            
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||                 
		// Allow: Ctrl+A                
		(e.keyCode == 65 && e.ctrlKey === true) ||                  
		// Allow: home, end, left, right                
		(e.keyCode >= 35 && e.keyCode <= 39)) {                     
		// let it happen, don't do anything                     
		return;            
		}            
		// Ensure that it is a number and stop the keypress            
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {                
		e.preventDefault();            
		}    
		});
		});
	</script>
<script type="text/javascript">
    $(function() {
       $( ".datepicker" ).datepicker( $.datepicker.regional[ "vi" ] );
    });
	$(function() {
		$(".datepicker").datepicker("option", "minDate", 0);
	});	
	
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" href="banner/banner.css" />

</head>
<body>
 

<script src="js/jquery-1.11.1.min.js"></script>
<form action="giaodien/hienthitimkiem.php" method="POST" enctype="multipart/form-data">
	<div class="bn">
	<div class="a">
		<table border="0" class="table_1">
			<tr>
				<td colspan="6" style="border-bottom:2px solid #00a698">
					<p class="tieudecb"><img src="" />TÌM CHUYẾN BAY</p>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<div id="radio-group">
						<input type="radio" class="btnrd" id="1chieu" onclick="off_ngay_ve()" name="khuhoi" value="0" checked="checked"> <label class="lbrd">Một chiều</label>
						<input type="radio" class="btnrd" id="2chieu" onclick="on_ngay_ve()" name="khuhoi" value="1"> <label class="lbrd">Khứ hồi</label>
						<label style="margin-right:5px;" class="lbrd">Loại vé:</label>
						<select name='loai_ve'>
							<option value='all'>Tất cả</option>
						<?php
							$resultdv = mysql_query("SELECT * FROM loai_ve",$conn);
							while ($rowdv = mysql_fetch_array($resultdv)){
								echo "<option value='".$rowdv['lv_ma']."'>".$rowdv['lv_ten']."</option>";}
						?>
						
						</select>
						<br>
					</div>
				</td>
			</tr>
			<tr>
			  	<td colspan="3">
					<p class="tieude">Từ:</p>	
					<input class="box" name="san_bay_di" id="san_bay_di" placeholder="Thành phố đi" requiped>
				</td>
				<td colspan="3">
					<p class="tieude">Đến:</p>
					<input class="box" name="san_bay_den" id="san_bay_den" placeholder="Thành phố đến" requiped>
				</td>
			</tr>
			<tr>	
				<td colspan="3">
					<p class="tieude">Khởi Hành:</p>
					<input type="text" name="ngay_di" id="ngay_di" class="datepicker" onchange="ngdi()" autocomplete="off" requiped>
				</td>
				<td colspan="3">
					<p class="tieude">Về:</p>
						<input type="text"  name="ngay_ve" class="datepicker" autocomplete="off" disabled="disabled" id="ngay_ve">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="tieude">Người lớn:</p> 
					<div style="width:auto;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> 
							<span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant1"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input  style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 1px;border:1px;color: white;text-align:center;" name="quant1" class="form-control input-number" value="0" min="0" max="10" type="text" autocomplete="off"> 
							<span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant1"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td colspan="2">
					<p class="tieude">Trẻ em:</p> 
					<div style="width:auto;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant2"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 2px;border:1px;color: white;text-align:center; " name="quant2" class="form-control input-number" value="0" min="0" max="10" type="text" autocomplete="off"> <span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant2"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td colspan="2">
					<p class="tieude">Em bé:</p>
					<div style="width:auto;margin:0px;padding:0px;z-index:1;position:relative;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant3"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 1px;border:1px;color: white;text-align:center;" name="quant3" class="form-control input-number" value="0" min="0" max="4" type="text" autocomplete="off"> <span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant3"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="6" style="text-align:center;">
					<input type="submit" name="them" value="Tìm chuyến bay" class="search">
				</td>
			</tr>
			
		</table>
  </div>	
	
<script  src="banner/function.js"></script>
 
	<div class="main">
    <div class="slider" >
      <ul class="slider-parent">
		
		<?php 
			$sql="select * from banner;";
			$result=mysql_query($sql,$conn) or die(mysql_error());
			while($row=mysql_fetch_array($result)){
				echo '<li class="images-list" data-slider="'.$row["bn_ma"].'" style="background-image: url('.$row["bn_hinh"].')"></li>';
			}
			$dong=mysql_num_rows($result);
		?>
		</ul>

	  
      <ol class="buttom-circles">
        <li class="buttom-circles-list slider-active" data-slider="1"><i class="fa fa-circle-thin"></i></li>
		<?php 
			
			for($i=2;$i<=$dong;$i++){
				echo '<li class="buttom-circles-list" data-slider="'.$i.'"><i class="fa fa-circle-thin"></i></li> ';
			}
		?>
		<li class="buttom-circles-list" data-slider="100"></li>
		
      </ol>
      <i style="font-size:40px;margin-right:20px;" class="fa fa-chevron-right fa-5x"></i>
      <i style="font-size:40px;margin-left:10px;" class="fa fa-chevron-left fa-5x"></i>
	</div>
  </div>
</div>

</form>	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
    <style>	
		.tieudecb{
			font-size:25px;
			margin:auto;
			text-align:center;
			padding-bottom:7px;
		} 
		
		.bn{
			width: 580px;
			height:400px;
		}
		
		.tieudecb img{
			width:10px;
			height:10px;
		}
		
		.a td{
			padding:0px;
			padding-left:12px;
			padding-top:7px;
		}
		.tieude{
			font-size:20px;
			color:red;
			margin: 0;
		}
		
		.lbrd{
			font-size:20px;
			margin:0px 30px 0px 0px;
			font-weight:normal;
		}
		
        .a{
			margin:0px;
            border:0px solid gray;
            font-size:25px;
			width: 580px;
			height:400px;
            z-index:1;
        }
		.table_1{
			background-color: rgba(16,54,103,0.8);
			width: 490px;
			
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
			border: 2px solid #FF0004;
			background-color: greenyellow;
			color: blueviolet; 
		}
		
    </style>
	<?php
	
	$conn=mysql_connect('127.0.0.1','root','')
	or die(mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
	or die(mysql_error());
	mysql_set_charset('UTF8',$conn);
	?>
	
	<link rel="stylesheet" href="../css/tanggiam.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<script src="../js/jquery.ui.datepicker-vi.js"></script>
	
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
			document.getElementById("ngay_ve").value="--/--/----";
		}
		function on_ngay_ve() {
			document.getElementById("ngay_ve").disabled="";
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
</script>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />-->


</head>
<body>
 

<script src="js/jquery-1.11.1.min.js"></script>
<form action="hienthitimkiem.php" method="POST" enctype="multipart/form-data">
	<div class="bn">
	<div class="a">
		<table border="0" class="table_1">
			<tr>
				<td colspan="6" style="border-bottom:2px solid yellow">
					<p class="tieudecb"><img src="" />TÌM CHUYẾN BAY</p>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<div id="radio-group">
						<input type="radio" class="btnrd" id="1chieu" onclick="off_ngay_ve()" name="khuhoi" value="0" checked="checked"> <label class="lbrd">Một chiều</label>
						<input type="radio" class="btnrd" id="2chieu" onclick="on_ngay_ve()" name="khuhoi" value="1"> <label class="lbrd">Khứ hồi</label><br>
					</div>
				</td>
			</tr>
			<tr>
			  	<td colspan="3">
					<p class="tieude">TỪ:</p>	
					<input class="box" name="san_bay_di" id="san_bay_di" placeholder="Thành phố đi">
				</td>
				<td colspan="3">
					<p class="tieude">ĐẾN:</p>
					<input class="box" name="san_bay_den" id="san_bay_den" placeholder="Thành phố đến">
				</td>
			</tr>
			<tr>	
				<td colspan="3">
					<p class="tieude">KHỞI HÀNH:</p>
					<input type="text" name="ngay_di" class="datepicker" autocomplete="off">
				</td>
				<td colspan="3">
					<p class="tieude">VỀ:</p>
						<input type="text"  name="ngay_ve" class="datepicker" autocomplete="off" disabled="disabled" id="ngay_ve" value="--/--/----">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="tieude">NGƯỜI LỚN:</p> 
					<div style="width:auto;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> 
							<span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input  style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 1px;border:1px;" name="quant[1]" class="form-control input-number" value="0" min="0" max="10" type="text" autocomplete="off"> 
							<span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td colspan="2">
					<p class="tieude">TRẺ EM:</p> 
					<div style="width:auto;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 2px;border:1px;" name="quant[2]" class="form-control input-number" value="0" min="0" max="10" type="text" autocomplete="off"> <span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td colspan="2">
					<p class="tieude">EM BÉ:</p>
					<div style="width:auto;margin:0px;padding:0px;z-index:1;position:relative;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin:0px 3px;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:35px;height:30px;background-color:rgba(0,0,0,0);margin:3px 1px;border:1px;" name="quant[3]" class="form-control input-number" value="0" min="0" max="10" type="text" autocomplete="off"> <span class="input-group-btn">    
							<button style="width:30px;height:30px;padding:0px;border-radius:20px;margin-right:3px;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
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
</form>	
</body>
</html>
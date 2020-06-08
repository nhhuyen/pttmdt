<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
    <style type="text/css">
	<?php
	header("Content-type: text/html; charset=utf-8");
	$conn=mysql_connect('127.0.0.1','root','')
	or die(mysql_error());
	$db=mysql_select_db("pttmdt",$conn)
	or die(mysql_error());
	mysql_set_charset('UTF8',$conn);
	?>
		.a td{
			padding:5px;
			padding-left:48px;
		}
		.tieude{
			font-size:20px;
			color:red;
			margin: 0;
		}
		
		.lbrd{
			font-size:23px;
			margin:0px 30px 0px 0px;
			font-weight:normal;
		}
		
        .a{
			background-repeat:no-repeat;
            border:0.1px solid gray;
            font-size:25px;
            background-image:url("hinhanh/logo/backgroup3.jpg");
			width: 100%;
			height: 485px;
			background-size: 100%;
            
        }
		.a #tentimkiem{
			padding-top:5px;
		       color:#ffffff;
			   font-size: 25px;
			   text-align:center;
		}
		.table_1{
			margin: 80px auto;	
			background-color:#0b8bca;
			width: 1100px;
			
		}
		.box{
			width:180px;
			border: 2px solid #aaa;
			border-radius:10px;		
			padding: 8px;
			outline:none;
			font-size:15px;
		}
		input[type=text]{
			width:180px;
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
			margin-bottom:13px;
			margin-top:40px;
			width: 180px;
			height:42px;
			font-size: 20px;
			font-weight:bold;
			border-radius:10px;
			border: 2px solid #FF0004;
			background-color: greenyellow;
			color: blueviolet; 
		}

<!-- *********************************** CSS Number **************************************** -->		
		
		
<!-- *********************************** CSS Number **************************************** -->		
		
    </style>
	<link rel="stylesheet" href="giaodien/timkiem/tanggiam.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	
	<script src="giaodien/timkiem/DatePicker/searchtp.js"></script>
	<script src="giaodien/timkiem/DatePicker/date.js"></script>
	
	<script src="giaodien/timkiem/DatePicker/jquery.ui.datepicker-vi.js"></script>
	
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
		if(!minValue) minValue = 1;                
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
		if(!minValue) minValue = 1;        
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
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	

    <div class="a">
		<table border="0" class="table_1">
		<tr><td colspan="5">
		<p id="tentimkiem"><img src="hinhanh/logo/icon_search2.png" width="30px"/> Tìm kiếm chuyến bay giá rẻ?</p>
		</td>
		</tr>
			<tr>
				<td colspan="5">
					<div id="radio-group">
						<input type="radio" class="btnrd" id="1chieu" onclick="off_ngay_ve()" name="khuhoi" value="0" checked="checked"> <label class="lbrd">Một chiều</label>
						<input type="radio" class="btnrd" id="2chieu" onclick="on_ngay_ve()" name="khuhoi" value="1"> <label class="lbrd">Khứ hồi</label><br>
					</div>
				</td>
			</tr>
			<tr>
			  	<td>
					<p class="tieude">TỪ:</p>	
					<input class="box" name="san_bay_di" id="san_bay_di" placeholder="Thành phố đi">
				</td>
				<td>
					<p class="tieude">ĐẾN:</p>
					<input class="box" name="san_bay_den" id="san_bay_den" placeholder="Thành phố đến">
				</td>
				<td>
					<p class="tieude">KHỞI HÀNH:</p>
					<input type="text" name="ngay_di" class="datepicker" autocomplete="off">
				</td>
				<td>
					<p class="tieude">VỀ:</p>
						<input type="text"  name="ngay_ve" class="datepicker" autocomplete="off" disabled="disabled" id="ngay_ve">
				</td>
			</tr>
			<tr>
				<td>
					<p class="tieude">NGƯỜI LỚN:</p> 
					<div style="width:180px;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:40px;padding:8px;border-radius:10px 0 0 10px;"	 type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:102px;padding:18px 8px;margin:0px 1px; border-left:0px;border-right:0px;" name="quant[1]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    
							<button style="width:40px;padding:8px;border-radius:0 10px 10px 0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td>
					<p class="tieude">TRẺ EM:</p> 
					<div style="width:180px;margin:0px;padding:0px;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:40px;padding:8px;border-radius:10px 0 0 10px;"	 type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:102px;padding:18px 8px;margin:0px 1px; border-left:0px;border-right:0px;" name="quant[2]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    
							<button style="width:40px;padding:8px;border-radius:0 10px 10px 0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td>
					<p class="tieude">EM BÉ:</p>
					<div style="width:180px;margin:0px;padding:0px;z-index:1;position:relative;" class="container"> 
					 <div class="row"> 
					  <div class="col-md-3"> 
					   <div class="input-group"> <span class="input-group-btn">
							<button style="width:40px;padding:8px;border-radius:10px 0 0 10px;"	 type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]"> <span class="glyphicon glyphicon-minus"></span> </button> </span> 
							<input style="width:102px;padding:18px 8px;margin:0px 1px; border-left:0px;border-right:0px;" name="quant[3]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    
							<button style="width:40px;padding:8px;border-radius:0 10px 10px 0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
					   </div> 
					  </div> 
					 </div>
					</div>
				</td>
				<td>
					<input type="submit" name="them" value="Tìm chuyến bay" class="search">
				</td>
			</tr>
			
		</table>
	
	</div>
</form>	

</body>
</html>

<div class="block-header">
                <h2>TUYẾN BAY</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                THÊM TUYẾN BAY
                                <small>Mời bạn nhập thông tin tuyến bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=dichvu&ac=lietke"">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
					<form action="modules/quanlytuyenbay/xuly.php" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tần suất bay</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                      
									 <div class="demo-checkbox">
                <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink"  name="tb_tansuat[]"  value='Thứ 2' />
                                <label for="md_checkbox_22">Thứ 2</label>
              <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" name="tb_tansuat[]"  value='Thứ 3'>
			   <label for="md_checkbox_23">Thứ 3</label>
		<input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" name="tb_tansuat[]"  value='Thứ 4'>
		 <label for="md_checkbox_21">Thứ 4</label>
		<input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" name="tb_tansuat[]"  value='Thứ 5'>
		 <label for="md_checkbox_24">Thứ 5</label>
		<input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-indigo"  name="tb_tansuat[]"  value='Thứ 6'>
		<label for="md_checkbox_25">Thứ 6</label>
		<input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-green" name="tb_tansuat[]"  value='Thứ 7'>
		<label for="md_checkbox_30">Thứ 7</label>
		<input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" name="tb_tansuat[]"  value='Chủ nhật'>
		<label for="md_checkbox_33">Chủ nhật</label>
                            </div>
										<h2 class="card-inside-title">Hành trình</h2>
				 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="timepicker form-control" name="tb_hanhtrinh" placeholder="Please choose a time...">
                                        </div>
                                    </div>
                                </div> 
								<div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
								<h2 class="card-inside-title">Sân Bay đi</h2>
    <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select  name="sb_ma_di" required>
                                      <?php
	include ('../connect.php');
		$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
		while ($rowdv = mysql_fetch_array($resultdv)){
			echo "<option value='".$rowdv['sb_ma']."'>".$rowdv['sb_ten']."</option>";}
	?>
                                    </select>
                                </div>
                          
                            </div>
	</div></div></div>
	<h2 class="card-inside-title">Sân Bay đến</h2>
	 <div class="row clearfix">
                                <div class="col-sm-6">
	<select  name="sb_ma_den" required>
	<?php
		$resultdv = mysql_query("SELECT * FROM san_bay",$conn);
		while ($rowdv = mysql_fetch_array($resultdv)){
			echo "<option value='".$rowdv['sb_ma']."'>".$rowdv['sb_ten']."</option>";}
	?>
	</select>
	  </div>
                          
                            </div>
	
                                    </div>
									</div>

                            </div>

                          
                        </div>
 
                             <div align="center">
      <input type="submit" name="them" value="Thêm">
    </div>
                                
						</form>
                    </div>
                </div>
            </div>



     
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
   
                             
                               
             
            <!--#END# DateTime Picker -->
  

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>

<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
          
            

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>



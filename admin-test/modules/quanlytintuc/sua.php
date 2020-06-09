
<?php
	$sql = "select * from tin_tuc where tt_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="block-header">
                <h2>CẬP NHẬT TIN TỨC</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CẬP NHẬT TIN TỨC
                                <small>Mời bạn cập nhập thông tin tin tức</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=tintuc&ac=lietke">Danh sách tin tức</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
	<form action="modules/quanlytintuc/xuly.php?id=<?php echo $dong['tt_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tiêu đề</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tt_tieude" value="<?php echo $dong['tt_tieude'] ?>" />
                                        </div>
                                    </div>
									<h2 class="card-inside-title">Nội dung</h2>
										<!-- CKEditor -->
           
                      <div class="form-group">
                                        <div class="body">
                            <textarea id="ckeditor" name="tt_noidung">
                               <?php echo $dong['tt_noidung'] ?>
                            </textarea>
                           </div>
                                    </div>
             	<h2 class="card-inside-title">Mô tả</h2>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="tt_mota" value="<?php echo $dong['tt_mota'] ?>" />
                                        </div>
                                    </div>
			
            <!-- #END# CKEditor -->
									<h2 class="card-inside-title">Hình tin tức</h2>
									<div class="form-group">
                                        <div class="form-line">
										<img src="<?php echo $dong['tt_hinhanh'] ?>" width="80" height="80" />
                                            <input type="file" class="form-control" name="tt_hinhanh" placeholder="VJ" />
                                        </div>
                                    </div>
                             <div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div>
                                </div>
                            </div>

                          
                        </div>
						
						</form>
                    </div>
                </div>
            </div>



<script src="js/pages/forms/editors.js"></script>

 
 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Editors | Bootstrap Based Admin Template - Material Design</title>
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

    <!-- Ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>












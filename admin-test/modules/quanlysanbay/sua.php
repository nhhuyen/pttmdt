
<?php
	$sql = "select * from san_bay where sb_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>

<div class="block-header">
                <h2>SÂN BAY</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CẬP NHẬT SÂN BAY
                                <small>Mời bạn cập nhập thông tin sân bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=sanbay&ac=lietke">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<form action="modules/quanlysanbay/xuly.php?id=<?php echo $dong['sb_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên sân bay</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="sb_ten" value="<?php echo $dong['sb_ten'] ?>"/>
                                        </div>
										<h2 class="card-inside-title">Địa chỉ</h2>
										<div class="form-line">
                                            <input type="text" class="form-control" name="sb_diachi" value="<?php echo $dong['sb_diachi'] ?>"/>
                                        </div>
                                    </div>
                             <div align="center">
      <input type="submit" name="sua" value="Thêm">
    </div>
                                </div>
                            </div>

                          
                        </div>
						</form>
                    </div>
                </div>
            </div>

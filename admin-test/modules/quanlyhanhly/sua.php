
<?php
	$sql = "select * from hanh_ly where hl_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>

<div class="block-header">
                <h2>HÀNH LÝ</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CẬP NHẬT HÀNH LÝ
                                <small>Mời bạn nhập thông tin hành lý</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=hanhly&ac=lietke">Danh sách hành lý</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<form action="modules/quanlyhanhly/xuly.php?id=<?php echo $dong['hl_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Mô tả</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="hl_mota"  value="<?php echo $dong['hl_mota'] ?>" />
                                        </div>
                                    </div>
									   <div class="form-group">
									    <h2 class="card-inside-title">Giá</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="hl_gia"  value="<?php echo $dong['hl_gia'] ?>" />
                                        </div>
                                    </div>
							
                             <div align="center">
      <input type="submit" name="sua" value="Cập nhật">
    </div>
                                </div>
                            </div>

                          
                        </div>
						</form>
                    </div>
                </div>
            </div>


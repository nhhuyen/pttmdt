
<?php
	$sql = "select * from hang_ve where hv_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="block-header">
                <h2>CẬP NHẬT HÃNG VÉ</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CẬP NHẬT HÃNG VÉ
                                <small>Mời bạn cập nhập thông tin hãngvé</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=hangve&ac=lietke">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
	<form action="modules/quanlyhangve/xuly.php?id=<?php echo $dong['hv_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên hãng vé</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="hv_ten" value="<?php echo $dong['hv_ten'] ?>" />
                                        </div>
                                    </div>
									<h2 class="card-inside-title">Kí hiệu hãng vé</h2>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="hv_kihieu" value="<?php echo $dong['hv_kihieu'] ?>" />
                                        </div>
                                    </div>
									<h2 class="card-inside-title">Hình hãng vé</h2>
									<div class="form-group">
                                        <div class="form-line">
										<img src="<?php echo $dong['hv_hinh'] ?>" width="80" height="80" />
                                            <input type="file" class="form-control" name="hv_hinh" placeholder="VJ" />
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









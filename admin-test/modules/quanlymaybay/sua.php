<?php
	$sql = "select * from may_bay where mb_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>
<div class="block-header">
                <h2>MÁY BAY</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CẬP NHẬT MÁY BAY
                                <small>Mời bạn nhập thông tin máy bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=maybay&ac=lietke">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
				<form action="modules/quanlymaybay/xuly.php?id=<?php echo $dong['mb_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên máy bay</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="mb_ten" value="<?php echo $dong['mb_ten'] ?>" />
                                        </div>
										  <h2 class="card-inside-title">Số ghế</h2>
										    <div class="form-line">
                                            <input type="text" class="form-control" name="mb_soghe" value="<?php echo $dong['mb_soghe'] ?>"/>
                                        </div>
										  <h2 class="card-inside-title">Năm sản xuất</h2>
										    <div class="form-line">
                                            <input type="text" class="form-control" name="mb_namsanxuat" value="<?php echo $dong['mb_namsanxuat'] ?>" />
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


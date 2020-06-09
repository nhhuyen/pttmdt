
<?php
	$sql = "select * from khuyen_mai where km_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>


<div class="block-header">
                <h2>CẬP NHẬT KHUYẾN MÃI</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CẬP NHẬT KHUYẾN MÃI
                                <small>Mời bạn nhập thông tin khuyến mãi</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<form action="modules/quanlykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên khuyến mãi</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="km_ten" value="<?php echo $dong['km_ten'] ?>" />
                                        </div>
                                    </div>
									<div class="form-group">
									  <h2 class="card-inside-title">Mô tả</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="km_mota" value="<?php echo $dong['km_mota'] ?>" />
                                        </div>
                                    </div>
									<h2 class="card-inside-title">Thời gian bắt đầu</h2>
									<div class="form-group">
                                      
                                               <td width="87"><input type="datetime-local" name="km_tgbatdau" value="<?php echo $dong['km_tgbatdau'] ?>"></td>
                                      
                                    </div>
									<h2 class="card-inside-title">Thời gian kết thúc</h2>
									<div class="form-group">
                                        
                                               <td width="87"><input type="datetime-local" name="km_tgketthuc"></td>
                                       
                                    </div>
									<h2 class="card-inside-title">Giá trị</h2>
									<div class="form-group">
                                        <div class="form-line">
                                               <input type="text" class="form-control" name="km_giatri" value="<?php echo $dong['km_giatri'] ?>" /> 
                                        </div>
                                    </div>
									<h2 class="card-inside-title">Code</h2>
									<div class="form-group">
                                        <div class="form-line">
                                               <input type="text" class="form-control" name="km_code" value="<?php echo $dong['km_code'] ?>" /> 
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



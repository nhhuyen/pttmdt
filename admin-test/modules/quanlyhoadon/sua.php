<?php
	$sql = "select * from hoa_don inner join phieu_dat_ve on phieu_dat_ve.pdv_ma=hoa_don.pdv_ma inner join nguoi_dung
on nguoi_dung.nd_ma=phieu_dat_ve.nd_ma where hd_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>

<form action="modules/quanlyhoadon/xuly.php?id=<?php echo $dong['hd_ma']?>" method="post" enctype="multipart/form-data">
<div class="block-header">
                <h2>HOÁ ĐƠN</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CẬP NHẬT HOÁ ĐƠN
                                <small>Mời bạn cập nhập thông tin hoá đơn</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Danh sách hoá đơn</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                            <h2 class="card-inside-title">Tổng tiền</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" value="<?php echo $dong['hd_tongtien'] ?>"/>
                                        
										</div>
								<h2 class="card-inside-title">Ngày lập</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" value="<?php echo $dong['hd_ngaylap'] ?>"/>
                                        
										</div>
							<h2 class="card-inside-title">Số vé</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" value="<?php echo $dong['pdv_sove'] ?>"/>
                                        
										</div>
							<h2 class="card-inside-title">Người dùng</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" value="<?php echo $dong['nd_ten'] ?>"/>
                                        
										</div>					
	<h2 class="card-inside-title">Trạng thái</h2>
 
	<select name="tt_ten" required>
	<option value='1'>Đang xử lý</option>
	<option value='2'>Hoàn thành</option>
	<option value='3'>Huỷ đơn</option>
	</select>
                                    </div>
                             <div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div>
                                </div>
                            </div>

                          
                        </div>
						
                    </div>
                </div>
            </div>
</form>
</body>
</html>



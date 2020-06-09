
<div class="block-header">
                <h2>DỊCH VỤ</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                THÊM DỊCH VỤ
                                <small>Mời bạn nhập thông tin dịch vụ</small>
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
						<form action="modules/quanlydichvu/xuly.php" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên dịch vụ</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" placeholder="chổ ngồi VIP" />
                                        </div>
										<h2 class="card-inside-title">Loại vé</h2>
										  <?php
  $sql_loaive = "select lv_ma,lv_ten from loai_ve";
  $row_loaive=mysql_query($sql_loaive);
  ?>
  <select name="maloaive">
    <?php
	while($dong_loaive=mysql_fetch_array($row_loaive)){
	?>
    	<option value="<?php echo $dong_loaive['lv_ma'] ?>"><?php echo $dong_loaive['lv_ten'] ?></option>
        <?php
	}
		?>
    </select>
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

<?php
	$sql_lietketienich="select * from chuyen_bay inner join tuyen_bay on chuyen_bay.tb_ma = tuyen_bay.tb_ma 
						inner join may_bay on may_bay.mb_ma=chuyen_bay.mb_ma 
						inner join hang_ve on hang_ve.hv_ma=chuyen_bay.hv_ma order by cb_ma";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG CHUYẾN BAY
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               BẢNG CHUYẾN BAY
                                <small>Danh sách chuyến bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=chuyenbay&ac=them">Thêm</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>THỜI ĐIỂM</th>
										 <th>TÌNH TRẠNG</th>
										  <th>GIỜ CẤT CÁNH DỰ KIẾN</th>
										   <th>GIỜ HẠ CÁNH DỰ KIẾN</th>
										   <th>GIỜ CẤT CÁNH CHÍNH THỨC</th>
										   <th>GIỜ HẠ CÁNH CHÍNH THỨC</th>
										   <th>TUYẾN BAY</th>
										   <th>HÃNG VÉ</th>
										   <th>MÁY BAY</th>
                                        <th>SỬA</th>
                                        <th>XÓA</th>
                                    </tr>
                                </thead>
								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
    <tr>
    <td><?php echo $dong['cb_ma'] ?></td>
    <td><?php echo $dong['cb_thoidiem'] ?></td>
	<td><?php echo $dong['cb_tinhtrang'] ?></td>
	<td><?php echo $dong['cb_giocatcanh_dukien'] ?></td>
	<td><?php echo $dong['cb_giohacanh_dukien'] ?></td>
	<td><?php echo $dong['cb_giocatcanh_chinhthuc'] ?></td>
	<td><?php echo $dong['cb_giohacanh_chinhthuc'] ?></td>
	<td><?php echo $dong['tb_ten'] ?></td>
	<td><?php echo $dong['hv_ten'] ?></td>
	<td><?php echo $dong['mb_ten'] ?></td>
    <td><a href="index.php?quanly=chuyenbay&ac=sua&id=<?php echo $dong['cb_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlychuyenbay/xuly.php?id=<?php echo $dong['cb_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  </tbody>
    <?php
  $i++;
  }
  ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
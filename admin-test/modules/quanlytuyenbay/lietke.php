
<?php
	$sql_lietketienich="select * from tuyen_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG TUYẾN BAY
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               BẢNG TUYẾN BAY
                                <small>Danh sách tuyến bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=tuyenbay&ac=them">Thêm</a></li>
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
										<th>TUYẾN BAY</th>
                                        <th>TẦN XUẤT BAY</th>
										 <th>HÀNH TRÌNH</th>
										  <th>SÂN BAY ĐẾN</th>
										   <th>SÂN BAY ĐI</th>
                                        <th style="margin-left:500px">SỬA</th>
                                        <th>XÓA</th>
                                    </tr>
                                </thead>
								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
    <tr>
	<td><?php echo $dong['tb_ma'] ?></td>
	<td><?php echo $dong['tb_ten'] ?></td>
    <td><?php echo $dong['tb_tansuat'] ?></td>
	<td><?php echo $dong['tb_hanhtrinh'] ?></td>
	<td><?php echo $dong['sb_ma_di'] ?></td>
	<td><?php echo $dong['sb_ma_den'] ?></td>
    <td><a href="index.php?quanly=tuyenbay&ac=sua&id=<?php echo $dong['tb_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlytuyenbay/xuly.php?id=<?php echo $dong['tb_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
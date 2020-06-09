<?php
	$sql_lietketienich="select * from ti_gia ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG TỈ GIÁ
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TỈ GIÁ
                                <small>Danh sách tỉ giá</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=tigia&ac=them">Thêm</a></li>
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
                                        <th>MÃ</th>
                                        <th>Đơn vị</th>                                     
                                        <th>Kí hiệu</th>
										<th>Tỉ giá</th>
										<th>Cập nhật</th>
										<th>Xóa</th>
                                    </tr>
                                </thead>
								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
   <tr>
    <td><?php echo $dong['tg_ma'] ?></td>
    <td><?php echo $dong['tg_ten'] ?></td>
	<td><?php echo $dong['tg_donvi'] ?></td>
	<td><?php echo $dong['tg_tigia'] ?></td>
    <td><a href="index.php?quanly=tigia&ac=sua&id=<?php echo $dong['tg_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlytigia/xuly.php?id=<?php echo $dong['tg_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
			
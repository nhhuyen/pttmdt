
<?php
	$sql_lietketienich="select * from gia
								inner join chuyen_bay on chuyen_bay.cb_ma = gia.cb_ma
								inner join tuyen_bay on chuyen_bay.tb_ma = tuyen_bay.tb_ma
								inner join loai_ve on loai_ve.lv_ma = gia.lv_ma
						order by chuyen_bay.cb_ma, loai_ve.lv_ma";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG GIÁ
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BẢNG GIÁ
                                <small>Danh sách giá chuyến bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=gia&ac=them">Thêm</a></li>
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
                                        <th>CHUYẾN BAY</th>
										<th>LOẠI VÉ</th>
										<th>GIÁ</th>
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
   <td><?php echo $dong['tb_ten'].' - '.$dong['cb_thoidiem'];?></td>
    <td><?php echo $dong['lv_ten'] ?></td>
	<td><?php echo $dong['gia'] ?></td>
    <td><a href="index.php?quanly=gia&ac=sua&id=<?php echo $dong['cb_ma'] ?>&id1=<?php echo $dong['lv_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlygia/xuly.php?&id=<?php echo $dong['cb_ma'] ?>&id1=<?php echo $dong['lv_ma'] ?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
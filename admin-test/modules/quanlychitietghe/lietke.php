
<?php
	$sql_lietketienich="select * from chitiet_ghe
								inner join may_bay on may_bay.mb_ma = chitiet_ghe.mb_ma
								inner join loai_ve on loai_ve.lv_ma = chitiet_ghe.lv_ma
						order by may_bay.mb_ma, loai_ve.lv_ma";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG CHI TIẾT GHẾ
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CHI TIẾT GHẾ
                                <small>Danh sách chi tiết ghế</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=chitietghe&ac=them">Thêm</a></li>
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
                                        <th>TÊN MÁY BAY</th>
										<th>TÊN LOẠI VÉ</th>
										<th>SỐ CHỖ</th>
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
   <td><?php echo $dong['mb_ten'];?></td>
    <td><?php echo $dong['lv_ten'] ?></td>
	<td><?php echo $dong['so_luong'] ?></td>
    <td><a href="index.php?quanly=chitietghe&ac=sua&id=<?php echo $dong['mb_ma'] ?>&id1=<?php echo $dong['lv_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlychitietghe/xuly.php?&id=<?php echo $dong['mb_ma'] ?>&id1=<?php echo $dong['lv_ma'] ?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
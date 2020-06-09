<?php
	$sql_lietketienich="select * from khuyen_mai ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG KHUYẾN MÃI
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               BẢNG KHUYẾN MÃI
                                <small>Danh sách khuyễn mãi</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=khuyenmai&ac=them">Thêm</a></li>
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
                                        <th>TÊN KHUYẾN MÃI</th>
										 <th>MÔ TẢ</th>
										 <th>THỜI GIAN BẮT ĐẦU</th>
										  <th>THỜI GIAN KẾT THÚC</th>
										  <th>GIÁ TRỊ</th>
										   <th>CODE</th>
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
    <td><?php echo $dong['km_ma'] ?></td>
    <td><?php echo $dong['km_ten'] ?></td>
	 <td><?php echo $dong['km_mota'] ?></td>
	<td><?php echo $dong['km_tgbatdau'] ?></td>
	<td><?php echo $dong['km_tgketthuc'] ?></td>
	 <td><?php echo $dong['km_giatri'] ?></td>
	  <td><?php echo $dong['km_code'] ?></td>
    <td><a href="index.php?quanly=khuyenmai&ac=sua&id=<?php echo $dong['km_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
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
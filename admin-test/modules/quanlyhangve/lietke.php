<?php
	$sql_lietketienich="select * from hang_ve ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG HÃNG VÉ
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               HÃNG VÉ
                                <small>Danh sách hãng vé</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=hangve&ac=them">Thêm</a></li>
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
                                        <th>Hãng Vé</th>
										<th>Kí hiệu</th>
										<th>Hình ảnh</th>
                                        <th >Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
   <tr>
   <td><?php  echo $dong['hv_ma'];?></td>
   <td><?php echo $dong['hv_ten'] ?></td>
	<td><?php  echo $dong['hv_kihieu'];?></td>
    <td><img src="<?php echo $dong['hv_hinh'] ?>"  height="80" /></td>
    <td><a href="index.php?quanly=hangve&ac=sua&id=<?php echo $dong['hv_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyhangve/xuly.php?id=<?php echo $dong['hv_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
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
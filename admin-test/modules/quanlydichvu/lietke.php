
<?php
	$sql_lietketienich="select * from dich_vu inner join loai_ve on loai_ve.lv_ma=dich_vu.lv_ma ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG DỊCH VỤ
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              DỊCH VỤ
                                <small>Danh sách dịch vụ</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=dichvu&ac=them">Thêm</a></li>
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
                                        <th>Dịch vụ</th>
										<th>Loại vé</th>
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
   <td><?php  echo $dong['dv_ma'];?></td>
   <td><?php echo $dong['dv_ten']; ?></td>
	<td><?php  echo $dong['lv_ten'];?></td>
    <td><a href="index.php?quanly=dichvu&ac=sua&id=<?php echo $dong['dv_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlydichvu/xuly.php?id=<?php echo $dong['dv_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
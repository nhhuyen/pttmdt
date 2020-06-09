
<?php
	$sql_lietketienich="select * from san_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG SÂN BAY
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SÂN BAY
                                <small>Danh sách sân bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=sanbay&ac=them">Thêm</a></li>
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
                                        <th>TÊN SÂN BAY</th>
										<th>ĐỊA CHỈ</th>
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
   <td><?php echo $dong['sb_ma'];?></td>
    <td><?php echo $dong['sb_ten'] ?></td>
	<td><?php echo $dong['sb_diachi'] ?></td>
    <td><a href="index.php?quanly=sanbay&ac=sua&id=<?php echo $dong['sb_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlysanbay/xuly.php?id=<?php echo $dong['sb_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
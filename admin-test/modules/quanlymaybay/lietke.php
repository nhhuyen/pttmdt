<?php
	$sql_lietketienich="select * from may_bay ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG MÁY BAY
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MÁY BAY
                                <small>Danh sách máy bay</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=maybay&ac=them">Thêm</a></li>
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
                                        <th>TÊN MÁY BAY</th>
										 <th>SỐ GHẾ</th>
										  <th>NĂM SẢN XUẤT</th>
										
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
    <td><?php echo $dong['mb_ma'];?></td>
    <td><?php echo $dong['mb_ten'] ?></td>
	<td><?php echo $dong['mb_soghe'] ?></td>
	<td><?php echo $dong['mb_namsanxuat'] ?></td>
    <td><a href="index.php?quanly=maybay&ac=sua&id=<?php echo $dong['mb_ma'] ?>"><center><img src="hinhanh/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlymaybay/xuly.php?id=<?php echo $dong['mb_ma']?>" class="delete_link"><center><img src="hinhanh/delete.png" width="30" height="30" /></center></a></td>
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
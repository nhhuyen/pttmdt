<?php
	$sql_lietketienich="select * from tuyenbay_khuyenmai
	inner join khuyen_mai on khuyen_mai.km_ma=tuyenbay_khuyenmai.km_ma 
	inner join tuyen_bay on tuyen_bay.tb_ma = tuyenbay_khuyenmai.tb_ma ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                    BẢNG CHUYẾN BAY KHUYẾN MÃI
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               BẢNG CHUYẾN BAY KHUYẾN MÃI
                                <small>Danh sách chuyến bay khuyễn mãi</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=chuyenbaykhuyenmai&ac=them">Thêm</a></li>
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
                                        
                                        <th>TÊN KHUYẾN MÃI</th>
										 <th>CHUYẾN BAY</th>
								
										   
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
    <td><?php echo $dong['km_ten'] ?></td>
    <td><?php echo $dong['tb_ten'] ?></td>
	
    <td><a href="index.php?quanly=chuyenbaykhuyenmai&ac=sua&id=<?php echo $dong['km_ma'] ?>&macb=<?php echo $dong['tb_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
    <td><a href="modules/quanlychuyenbaykhuyenmai/xuly.php?id=<?php echo $dong['km_ma']?>&macb=<?php echo $dong['tb_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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
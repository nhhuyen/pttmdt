<?php
	$sql_lietketienich="select * from phieu_dat_ve inner join nguoi_dung on nguoi_dung.nd_ma=phieu_dat_ve.nd_ma
	inner join khuyen_mai on khuyen_mai.km_ma=phieu_dat_ve.km_ma";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                   DANH SÁCH PHIẾU ĐẶT VÉ
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               DANH SÁCH PHIẾU ĐẶT VÉ
                                <small>Danh sách phiếu đặt vé</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Thêm</a></li>
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
                                        <th>SỐ VÉ</th>
										 <th>KHỨ HỒI</th>
										 <th>GHI CHÚ</th>
										  <th>TỔNG VÉ</th>
										  <th>TỔNG HÀNH LÝ</th>
										  <th>NGƯỜI DÙNG</th>
										  <th>KHUYẾN MÃI</th>
                                     
                                    </tr>
                                </thead>

								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
  <tr>
    <td><?php echo $dong['pdv_ma'];?></td>
     <td><?php echo $dong['pdv_sove'];?></td>
	  <td><?php if($dong['pdv_khuhoi']==1){
	  echo "có";}else{
	  echo "Không";}?></td>
	   <td><?php echo $dong['pdv_ghichu'];?></td>
	<td><?php echo $dong['pdv_tongve'];?></td>
	<td><?php echo $dong['pdv_tonghl'];?></td>
	<td><?php echo $dong['nd_ten'];?></td>
	<td><?php echo $dong['km_ten'];?></td>

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

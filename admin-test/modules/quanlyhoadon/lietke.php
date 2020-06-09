<?php
	$sql_lietketienich="select * from hoa_don inner join phieu_dat_ve on phieu_dat_ve.pdv_ma=hoa_don.pdv_ma inner join nguoi_dung
on nguoi_dung.nd_ma=phieu_dat_ve.nd_ma	";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                  QUẢN LÝ DOANH THU
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               QUẢN LÝ DOANH THU
                                <small>Danh sách doanh thu</small>
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
                                        <th>GIÁ TIỀN</th>
										 <th>NGÀY LẬP</th>
										 <th>SỐ VÉ</th>
										  <th>NGƯỜI DÙNG</th>
										<th>TRẠNG THÁI</th>
										 <th>SỬA</th> 
                                    </tr>
                                </thead>

								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
  <tr>
    <td><?php echo $dong['hd_ma'];?></td>
    <td><?php echo $dong['hd_tongtien'] ?></td>
	<td><?php echo $dong['hd_ngaylap'] ?></td>
	<td><?php echo $dong['pdv_sove'] ?></td>
	<td><?php echo $dong['nd_ten'] ?></td>
	<td><?php if($dong['tt_ma']==1){
				echo 'Đang xử lý' ;}
			elseif($dong['tt_ma']==2){
			echo 'Hoàn thành' ;}
			else{
			echo 'Huỷ đơn' ;}
	?></td>
	<td><a href="index.php?quanly=hoadon&ac=sua&id=<?php echo $dong['hd_ma'] ?>"><img src="hinhanh/edit.png" width="30" height="30" /></a></td>
   
  </tr>

  </tbody>

    <?php
  $i++;
  }
  ?>
                          							  
                            </table>
							<h2>
                             TỔNG TIỀN:<?php



 
$sql = "select *from hoa_don";
$tongtien='';
	$row=mysql_query($sql);
	  while($dong=mysql_fetch_array($row)){
		  $tongtien=$tongtien+$dong['hd_tongtien']+',';
		  
	  }
	  echo $tongtien;
?>
                               
                            </h2>
                        </div>
						  
                    </div>
					
                </div>
				
            </div>

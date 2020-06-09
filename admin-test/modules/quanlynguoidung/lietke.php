<?php
	$sql_lietketienich="select * from nguoi_dung ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>

          <div class="block-header">
                <h2>
                   DANH SÁCH NGƯỜI DÙNG
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               DANH SÁCH NGƯỜI DÙNG
                                <small>Danh sách người dùng</small>
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
                                        <th>TÊN NGƯỜI DÙNG</th>
										 <th>SỐ ĐIỆN THOẠI</th>
										 <th>ĐỊA CHỈ</th>
										  <th>GIỚI TÍNH</th>
										  <th>MAIL</th>
										  <th>TÀI KHOẢN</th>
										  <th>MẬT KHẨU</th>
										
                                       
                                        <th>XÓA</th>
                                    </tr>
                                </thead>

								  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietketienich)){

  ?>
     <tbody>
  <tr>
    <td><?php echo $dong['nd_ma'];?></td>
    <td><?php echo $dong['nd_ten'] ?></td>
	<td><?php echo $dong['nd_sdt'] ?></td>
	<td><?php echo $dong['nd_diachi'] ?></td>
	<td><?php echo $dong['nd_gioitinh'] ?></td>
	<td><?php echo $dong['nd_mail'] ?></td>
	<td><?php echo $dong['nd_taikhoan'] ?></td>
	<td> ******</td>

    <td><a href="modules/quanlynguoidung/xuly.php?id=<?php echo $dong['nd_ma']?>" class="delete_link"><img src="hinhanh/delete.png" width="30" height="30" /></a></td>
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

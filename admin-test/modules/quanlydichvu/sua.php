
<?php
	$sql = "select * from dich_vu where dv_ma = '$_GET[id]'";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
?>

<form action="modules/quanlydichvu/xuly.php?id=<?php echo $dong['dv_ma']?>" method="post" enctype="multipart/form-data">
<div class="block-header">
                <h2>DỊCH VỤ</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CẬP NHẬT DỊCH VỤ
                                <small>Mời bạn cập nhập thông tin dịch vụ</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Danh sách loại vé</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<form action="modules/quanlyloaive/xuly.php" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Dịch vụ</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tendichvu" value="<?php echo $dong['dv_ten'] ?>"/>
                                        </div>
										<h2 class="card-inside-title">Loại vé</h2>
 <?php
  $sql_loaisp = "select * from loai_ve";
  $row_loaisp=mysql_query($sql_loaisp);
  ?>
  <select name="maloaive">
     <?php
	while($dong_loaisp=mysql_fetch_array($row_loaisp)){
		if($dong['lv_ma']==$dong_loaisp['lv_ma']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['lv_ma'] ?>"><?php echo $dong_loaisp['lv_ten'] ?></option>
        <?php
	}else{
		?>
       <option value="<?php echo $dong_loaisp['lv_ma'] ?>"><?php echo $dong_loaisp['lv_ten'] ?></option>
        <?php
	}
	}
		?>
    </select>
                                    </div>
                             <div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div>
                                </div>
                            </div>

                          
                        </div>
						</form>
                    </div>
                </div>
            </div>
</form>
</body>
</html>



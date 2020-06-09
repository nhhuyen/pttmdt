<div class="block-header">
                <h2>TỈ GIÁ</h2>
            </div>
			<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                THÊM TỈ GIÁ
                                <small>Mời bạn nhập thông tin tỉ giá</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Danh sách tỉ giá</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<form action="modules/quanlytigia/xuly.php" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <h2 class="card-inside-title">Tên tỉ giá</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tg_ten" placeholder="Tên tỉ giá" />
                                        </div>
                                    </div>
									   <div class="form-group">
									    <h2 class="card-inside-title">Đơn vị</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tg_donvi" placeholder="VD: $" />
                                        </div>
                                    </div>
									<div class="form-group">
									    <h2 class="card-inside-title">Tỉ giá</h2>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tg_tigia" placeholder="VD: 0.007" />
                                        </div>
                                    </div>
                             <div align="center">
      <input type="submit" name="them" value="Thêm">
    </div>
                                </div>
                            </div>

                          
                        </div>
						</form>
                    </div>
                </div>
            </div>
 <?php
	$sql_lietketienich="select * from banner ";
	$row_lietketienich=mysql_query($sql_lietketienich);

?>
 <div class="block-header">
                <h2>
                    DANH SÁCH BANNER
                    <small>Thêm banner <a href="link" target="_blank">sky small</a></small>
                </h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Example -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BANNER</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="?quanly=banner&ac=them">Thêm</a></li>
                                        <li><a href="?quanly=banner&ac=danhsach">Danh Sách banner</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                
									
								 <div class="carousel-inner" role="listbox">
                                   <?php  
								   $i=0;
									while($dong=mysql_fetch_array($row_lietketienich)){	
									if($i==0){?>
										<div class="item active">										
											<img src="<?php echo $dong['bn_hinh'] ?>" />
										</div>
										<?php
										  }else{?>
											  <div class="item">
											  <img src="<?php echo $dong['bn_hinh'] ?>" />
											  </div>
										<?php
										}
										$i++;
										}
									  ?> 
									</div>	
									
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Example -->
                <!-- With Captions -->
                
                <!-- #END# With Captions -->
            </div>
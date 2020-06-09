  <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">PHIẾU ĐẶT VÉ</div>
													<?php
							 $sql = "select * from phieu_dat_ve ";
	$row=mysql_query($sql,$conn);
	$phieudatve=mysql_num_rows($row);
	?>
                            <div class="number count-to" data-from="0" data-to=<?php echo $phieudatve;?> data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
							<a href="?quanly=hoadon&ac=lietke">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
						
                            <div class="text">DOANH THU</div>


                            <div class="number count-to" data-from="0" data-to="
							
														<?php



 
$sql = "select *from hoa_don";
$tongtien='';
	$row=mysql_query($sql);
	  while($dong=mysql_fetch_array($row)){
		  $tongtien=$tongtien+$dong['hd_tongtien']+',';
		  
	  }
	  echo $tongtien;
?>
							
							" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="?quanly=nguoidung&ac=lietke">
                    <div class="info-box bg-orange hover-expand-effect">
					
                        <div class="icon">
						
                            <i class="material-icons">person_add</i></a>
                        </div>
                        <div class="content">
                            <div class="text">NGƯỜI DÙNG</div>
							<?php
							 $sql = "select * from nguoi_dung ";
	$row=mysql_query($sql,$conn);
	$soluonguser=mysql_num_rows($row);
	?>
	
	
                            <div class="number count-to" data-from="0" data-to=<?php echo $soluonguser;?> data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
					<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                   <div class="card">
                        <div class="header">
                            <h2>THỐNG KÊ DOANH THU</h2>
                          
                        </div>
                        <div class="body">
                            <canvas id="line_chart" height="150">
	
							</canvas>
							
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>THỐNG KÊ TRÌNH DUYỆT TRUY CẬP</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
				
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                90,10,9,6,5,6,10,5,7,5,12,13,7,12,11
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                  HÔM NAY
                                    <span class="pull-right"><b>1 200</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    HÔM QUA
                                    <span class="pull-right"><b>3 872</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    TUẦN TRƯỚC
                                    <span class="pull-right"><b>26 582</b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">LATEST SOCIAL TRENDS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    #socialtrends
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    #materialdesign
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>#adminbsb</li>
                                <li>#freeadmintemplate</li>
                                <li>#bootstraptemplate</li>
                                <li>
                                    #freehtmltemplate
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    HÔM NAY
                                    <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                   HÔM QUA
                                    <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            
			
			
   <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Chart Plugins Js -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
      <script >
	  
$(function () {
    new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
});

function getChartJs(type) {
    var config = null;

    if (type === 'line') {
        config = {
            type: 'line',
            data: {
                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                datasets: [{
                    label: "My First dataset",
                    data: [
					<?php
											
											 
											 
					for($i=1;$i<=12;$i++){
						$sql="SELECT * FROM `hoa_don` WHERE MONTH(hd_ngaylap) = $i";
						$tongtien='';
							$row=mysql_query($sql);
							  while($dong=mysql_fetch_array($row)){

						 
						  $tongtien=$tongtien+$dong['hd_tongtien']+',';
							  }
						if($i==12){
							echo $tongtien;
						}
						else{
							  echo $tongtien.',';
						}
					}		  
					?>
					],
					borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }, {
                        label: "My Second dataset",
                        data: [500000, 2000000, 1500000, 1900000, 860000, 270000, 900000,200000,300000,400000,900000,800000],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }, {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        backgroundColor: 'rgba(233, 30, 99, 0.8)'
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'radar') {
        config = {
            type: 'radar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 25, 90, 81, 56, 55, 40],
                    borderColor: 'rgba(0, 188, 212, 0.8)',
                    backgroundColor: 'rgba(0, 188, 212, 0.5)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.8)',
                    pointBorderWidth: 1
                }, {
                        label: "My Second dataset",
                        data: [72, 48, 40, 19, 96, 27, 100],
                        borderColor: 'rgba(233, 30, 99, 0.8)',
                        backgroundColor: 'rgba(233, 30, 99, 0.5)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.8)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'pie') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [225, 50, 100, 40],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Pink",
                    "Amber",
                    "Cyan",
                    "Light Green"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    return config;
}
	  </script>   

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	
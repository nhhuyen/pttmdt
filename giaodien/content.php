
 <?php

				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$tam= $_GET['quanly'];
				}else{
					$tam ='';
				}if($tam == 'formlienhe'){
					include('giaodien/formlienhe.php');
				}elseif($tam == 'dangnhap'){
					include('giaodien/login/dangnhap.php');
					 session_start();
				}elseif($tam == 'dangky'){
					include('giaodien/login/dangky.php');
				}elseif($tam == 'dangkymoi'){
					include('modules/right/dangkymoi.php');
				}elseif($tam == 'dangnhap'){
					include('modules/right/dangnhap.php');
				}elseif($tam == 'xulygiohang'){
					include('modules/right/xulygiohang.php');
				}elseif($tam == 'camon'){
					include('modules/right/camon.php');
				
				
				}else{
					include('giaodien/trangchu.php');
				}
			?>
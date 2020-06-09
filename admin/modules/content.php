 <div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='';
						//loaive
					}if(($tam == 'loaive')&&($tam1 == 'them')){
						include('modules/quanlyloaive/them.php');
					}elseif(($tam == 'loaive')&&($tam1 == 'lietke')){
						
						include('modules/quanlyloaive/lietke.php');
					}elseif(($tam == 'loaive')&&($tam1 == 'sua')){
						
						include('modules/quanlyloaive/sua.php');
						//dichvu
					}elseif(($tam == 'dichvu')&&($tam1 == 'them')){
						
						include('modules/quanlydichvu/them.php');
					}elseif(($tam == 'dichvu')&&($tam1 == 'lietke')){
						
						include('modules/quanlydichvu/lietke.php');
					}elseif(($tam == 'dichvu')&&($tam1 == 'sua')){
						
						include('modules/quanlydichvu/sua.php');
					//HANGVE
					}elseif(($tam == 'hangve')&&($tam1 == 'them')){
						
						include('modules/quanlyhangve/them.php');
					}elseif(($tam == 'hangve')&&($tam1 == 'lietke')){
						
						include('modules/quanlyhangve/lietke.php');
					}elseif(($tam == 'hangve')&&($tam1 == 'sua')){
						
						include('modules/quanlyhangve/sua.php');
						//maybay
					}elseif(($tam == 'maybay')&&($tam1 == 'them')){
						
						include('modules/quanlymaybay/them.php');
					}elseif(($tam == 'maybay')&&($tam1 == 'lietke')){
						
						include('modules/quanlymaybay/lietke.php');
					}elseif(($tam == 'maybay')&&($tam1 == 'sua')){
						
						include('modules/quanlymaybay/sua.php');
						//khuyen mail
						}elseif(($tam == 'khuyenmai')&&($tam1 == 'them')){
						
						include('modules/quanlykhuyenmai/them.php');
					}elseif(($tam == 'khuyenmai')&&($tam1 == 'lietke')){
						
						include('modules/quanlykhuyenmai/lietke.php');
					}elseif(($tam == 'khuyenmai')&&($tam1 == 'sua')){
						
						include('modules/quanlykhuyenmai/sua.php');
						//sanbay
						}elseif(($tam == 'sanbay')&&($tam1 == 'them')){
						
						include('modules/quanlysanbay/them.php');
					}elseif(($tam == 'sanbay')&&($tam1 == 'lietke')){
						
						include('modules/quanlysanbay/lietke.php');
					}elseif(($tam == 'sanbay')&&($tam1 == 'sua')){
						
						include('modules/quanlysanbay/sua.php');
						//nguoidung
						
						}elseif(($tam == 'nguoidung')&&($tam1 == 'them')){
						
						include('modules/quanlynguoidung/them.php');
					}elseif(($tam == 'nguoidung')&&($tam1 == 'lietke')){
						
						include('modules/quanlynguoidung/lietke.php');
					}elseif(($tam == 'nguoidung')&&($tam1 == 'sua')){
						
						include('modules/quanlynguoidung/sua.php');
						//quanlytuyenbay
							}elseif(($tam == 'tuyenbay')&&($tam1 == 'them')){
						
						include('modules/quanlytuyenbay/them.php');
					}elseif(($tam == 'tuyenbay')&&($tam1 == 'lietke')){
						
						include('modules/quanlytuyenbay/lietke.php');
					}elseif(($tam == 'tuyenbay')&&($tam1 == 'sua')){
						
						include('modules/quanlytuyenbay/sua.php');
						//quanlychuyenbay
							}elseif(($tam == 'chuyenbay')&&($tam1 == 'them')){
						
						include('modules/quanlychuyenbay/them.php');
					}elseif(($tam == 'chuyenbay')&&($tam1 == 'lietke')){
						
						include('modules/quanlychuyenbay/lietke.php');
					}elseif(($tam == 'chuyenbay')&&($tam1 == 'sua')){
						
						include('modules/quanlychuyenbay/sua.php');
						//quanlytintuc
							}elseif(($tam == 'tintuc')&&($tam1 == 'them')){
						
						include('modules/quanlytintuc/them.php');
					}elseif(($tam == 'tintuc')&&($tam1 == 'lietke')){
						
						include('modules/quanlytintuc/lietke.php');
					}elseif(($tam == 'tintuc')&&($tam1 == 'sua')){
						
						include('modules/quanlytintuc/sua.php');
						//quanlybanner
					}elseif(($tam == 'banner')&&($tam1 == 'them')){
						
						include('modules/quanlybanner/them.php');
					}elseif(($tam == 'banner')&&($tam1 == 'lietke')){
						
						include('modules/quanlybanner/lietke.php');
					}elseif(($tam == 'banner')&&($tam1 == 'sua')){
						
						include('modules/quanlybanner/sua.php');
						//end
					}elseif(($tam == 'timkiem')&&($tam1 == 'sp')){
						
						include('modules/timkiem/timkiem.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'them')){
						include('modules/gallery/them.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'lietke')){
						include('modules/gallery/lietke.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'sua')){
						include('modules/gallery/sua.php');

					}else{
						include('modules/quanlychuyenbay/lietke.php');
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>
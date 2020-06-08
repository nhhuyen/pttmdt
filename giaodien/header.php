
<div class="header">
     <table ><tr><td>
                  <div class="logo">
                                          <a href="https://vietnamairslines.com/" title="Trang chủ">
                      <img title="Trang chủ" alt="Trang chủ" src="https://vietnamairslines.com/image/data/logo/logo vnairslines.png" /></a>
                      
                  </div>  </td> 
				<td><img src="http://www.phongvecantho.vn/userupload/website_info/headphones.png" width="50px;" style="margin-top:20px; margin-left:400px;"/></td>  
                <td > <div class="hotline">
				
                     <div class="hotline-text">TỔNG ĐÀI ĐẶT VÉ</div>
                        <div class="hotline-top">0343000909 </div>    
                                   </div></td>
							<td>
		<?php
		session_start();

       if (isset($_SESSION['nd_taikhoan'])){
		   
           echo 'Xin chào: '.$_SESSION['nd_taikhoan']."<br/>";
           echo '<a class="btdangnhap" href="giaodien/login/dx.php">Đăng Xuất</a>';
       }
       else{
           echo '<a class="btdangnhap" href="?quanly=dangnhap">Đăng Nhập</a>';
       }
       ?>
								</td>
								   
								   </tr>
								
                   
</table>
</div>
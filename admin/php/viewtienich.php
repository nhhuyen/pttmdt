<?php

  include "../php/Connect.php";	
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}  
$sql ="select * from tienich order by idtienich ASC limit $trang1,5 ";
$result = mysql_query($sql,$conn)
or die(mysql_error());
echo"<form method='post' action=''>";
echo "<table border=1>";
echo"<tr>
      <th>STT</th> <th>TÊN TIỆN ÍCH</th><th>HÌNH ẢNH</th><th>XÓA</th> <th>CẬP NHẬT</th>
      </tr>";
while ($row = mysql_fetch_array($result)){
	
	echo "<tr>";
	echo "<td>".$row["idtienich"]."</td>";
	echo "<td>".$row["tentienich"]."</td>";
	echo "<td> <img src=".$row["hinhanh"]." style='height:50px'></td>";
	echo "<td><input type='checkbox' name='checkbox[]' value='".$row["idtienich"]."'></td>";
	$idtienich=$row["idtienich"];
	echo"<td><a href='admin_capnhat.php?&idtienich=".$idtienich."'><img src='../hinhanh/edit.png' width='50px'></a></td>";
echo "</tr>";
}
echo "<tr>";
echo "<td colspan='9' align='center' bgcolor='#FFFFFF'>
<input name='delete' type='submit' id='delete'value='Delete'></td>";
echo "</tr>";
echo "</table>";
mysql_free_result($result);
	mysql_close($conn);
?>
 <?php
//connect to mysql
$conn=mysql_connect("localhost","root","")
			or die("Could not connect:".mysql_error());
$db=mysql_select_db("nienluan",$conn)
			or die("Could not select database");

			if(!empty($_POST['checkbox'])){
			$checkbox=$_POST['checkbox'];
			if(is_array($checkbox)){
			foreach($checkbox as $key=>$value){
			$sql="DELETE FROM sach WHERE masach='$value'";
			$result = mysql_query($sql,$conn)
			or die(mysql_error());
			//echo"manv:$value is deleted<br>";
			 echo" <br> Xoa tác giả thành công thành công... <br>";
  echo"<meta http-equiv='refresh' content ='1;giaodienadmin.php'>";
			}
			}
			}
?>
<div class="trang">
	Trang :
    <?php
	  include "../php/Connect.php";	
	$sql_trang=mysql_query("select * from tienich");
	$count_trang=mysql_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="viewtienich.php?trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="viewtienich.php?trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
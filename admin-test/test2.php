<?php


//connect to mysql
$conn=mysql_connect("localhost","root","")
			or die("Could not connect:".mysql_error());
$db=mysql_select_db("pttmdt",$conn)
			or die("Could not select database");
 mysql_query("SET NAMES 'utf8'",$conn);
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
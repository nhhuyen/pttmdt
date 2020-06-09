<?php


//connect to mysql
$conn=mysql_connect("localhost","root","")
			or die("Could not connect:".mysql_error());
$db=mysql_select_db("pttmdt",$conn)
			or die("Could not select database");
 mysql_query("SET NAMES 'utf8'",$conn);
 
  $sever="http://localhost/pttmdt-baocao/admin-test/images/";
 

?>

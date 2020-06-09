<?php session_start(); 
 
if (isset($_SESSION['nd_ma'])){
    unset($_SESSION['nd_ma']); // xóa session login
	session_destroy();
}
    echo "<meta http-equiv='refresh' content ='1;../../index.php'>";
?>

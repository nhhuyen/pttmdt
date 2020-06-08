
<?php
include "connect.php";

$tentienich =filter_input(INPUT_POST,"tentienich");
$url="http://192.168.1.10/ungdungtimnha/hinhanh/";
$hinhanhtienich=filter_input(INPUT_POST,"hinhanhtienich");
$hinhanh=$url.$hinhanhtienich;

    $query = "INSERT INTO tienich  VALUES(null,'".$tentienich."','".$hinhanh."')";
    if ( mysql_query($query, $conn)) {
       //thanhcong
	   echo "success";

    } else {
		echo "error";
        
    
}

?>
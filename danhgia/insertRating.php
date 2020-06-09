<?php
session_start();

require_once ('db.php');
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id

			$nd_ma=$_SESSION['nd_ma'];
	
$userId = $nd_ma;

if (isset($_POST["index"], $_POST["restaurant_id"])) {
    
    $restaurantId = $_POST["restaurant_id"];
    $rating = $_POST["index"];
    
    $checkIfExistQuery = "select * from tbl_rating where nd_ma = '" . $userId . "' and hv_ma = '" . $restaurantId . "'";
    if ($result = mysqli_query($conn, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }
    
    if ($rowcount == 0) {
        $insertQuery = "INSERT INTO tbl_rating(nd_ma,hv_ma, rating) VALUES ('" . $userId . "','" . $restaurantId . "','" . $rating . "') ";
        $result = mysqli_query($conn, $insertQuery);
        echo "success";
    } else {
        echo "Already Voted!";
    }
}

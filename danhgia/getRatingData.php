<?php

	session_start();
require_once "db.php";
require_once "functions.php";
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
 
			$nd_ma=$_SESSION['nd_ma'];
		
$userId = $nd_ma;

$query = "SELECT * FROM hang_ve ORDER BY hv_ma DESC";
$result = mysqli_query($conn, $query);

$outputString = '';

foreach ($result as $row) {
    $userRating = userRating($userId, $row['hv_ma'], $conn);
    $totalRating = totalRating($row['hv_ma'], $conn);
     $average=userRating($nd_ma,$row['hv_ma'], $conn);
    $outputString .= '
        <div class="row-item">
		
		<img src="' . $row['hv_hinh'] . '" width="400px">
 <div class="row-title">' . $row['hv_ten'] . '</div> <div class="response" id="response-' . $row['hv_ma'] . '"></div>
 <ul class="list-inline"  onMouseLeave="mouseOutRating(' . $row['hv_ma'] . ',' . $userRating . ');"> ';
    
    for ($count = 1; $count <= 5; $count ++) {
        $starRatingId = $row['hv_ma'] . '_' . $count;
        
        if ($count <= $userRating) {
            
            $outputString .= '<li value="' . $count . '" hv_ma="' . $starRatingId . '" class="star selected">&#9733;</li>';
        } else {
            $outputString .= '<li value="' . $count . '"  hv_ma="' . $starRatingId . '" class="star" onclick="addRating(' . $row['hv_ma'] . ',' . $count . ');" onMouseOver="mouseOverRating(' . $row['hv_ma'] . ',' . $count . ');">&#9733;</li>';
        }
    } // endFor
    
    $outputString .= '
 </ul>
 
 <p class="review-note">Tổng lượt đánh giá: ' . $totalRating . '</p>
<p style=" font-size: 20px;color:#00A698;font-weight: bold;margin-right:5px;">Số sao: ' . $average . '<img src="https://stockdep.net/files/images/53113076.jpg" width="20px" style="margin-left:5px"></p>

</div>
 ';
}
echo $outputString;
?>
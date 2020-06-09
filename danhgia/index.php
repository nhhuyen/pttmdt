<html>
<head>
<meta charset='utf-8'>
<!DOCTYPE html>
<?php
	include('../modules/connect.php');
	include('../giaodien/head/head.php');
	include('../giaodien/head/menu.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Star Rating System using PHP and Javascript</title>
<style>
.chu{
	text-align:center;
	 font-size: 20px;
	 color:#00A698;
	 font-weight: bold;
}
body {
	margin:auto;
   
	
    font-family: arial;
}
#menu li {
font-size:20px;
  color: #f1f1f1;
  display: inline-block;
  height: 50px;
  line-height: 50px;
  
}
#menu ul {
	height:50px;
   background: #0b8bca;
  list-style-type: none;
  text-align: center;
}
#menu a {
	padding : 0 30px;
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
}
ul {
    margin: 0px;
    padding: 10px 0px 0px 0px;
}

li.star {
    list-style: none;
    display: inline-block;
    margin-right: 5px;
    cursor: pointer;
    color: #9E9E9E;
}

li.star.selected {
    color: #ff6e00;
}

.row-title {
    font-size: 20px;
    color: #00BCD4;
}

.review-note {
    font-size: 12px;
    color: #999;
    font-style: italic;
}
.row-item {
	text-align:center;
    margin-bottom: 20px;
    border-bottom: #F0F0F0 1px solid;
}
p.text-address {
    font-size: 12px;
}
</style>
</head>

<body onload="showRestaurantData('getRatingData.php')">

<div class="container">
        <p class="chu">ĐÁNH GIÁ HÃNG VÉ</p>
        <span id="restaurant_list"></span>
    </div>

</body>
</html>

<script type="text/javascript">

    function showRestaurantData(url)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("restaurant_list").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();

    } 

    function mouseOverRating(restaurantId, rating) {

        resetRatingStars(restaurantId)

        for (var i = 1; i <= rating; i++)
        {
            var ratingId = restaurantId + "_" + i;
            document.getElementById(ratingId).style.color = "#ff6e00";

        }
    }

    function resetRatingStars(restaurantId)
    {
        for (var i = 1; i <= 5; i++)
        {
            var ratingId = restaurantId + "_" + i;
            document.getElementById(ratingId).style.color = "#9E9E9E";
        }
    }

   function mouseOutRating(restaurantId, userRating) {
	   var ratingId;
       if(userRating !=0) {
    	       for (var i = 1; i <= userRating; i++) {
    	    	      ratingId = restaurantId + "_" + i;
    	          document.getElementById(ratingId).style.color = "#ff6e00";
    	       }
       }
       if(userRating <= 5) {
    	       for (var i = (userRating+1); i <= 5; i++) {
	    	      ratingId = restaurantId + "_" + i;
	          document.getElementById(ratingId).style.color = "#9E9E9E";
	       }
       }
    }

    function addRating (restaurantId, ratingValue) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function ()
            {
                if (this.readyState == 4 && this.status == 200) {

                    showRestaurantData('getRatingData.php');
                    
                    if(this.responseText != "success") {
                    	   alert(this.responseText);
                    }
                }
            };

            xhttp.open("POST", "insertRating.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var parameters = "index=" + ratingValue + "&restaurant_id=" + restaurantId;
            xhttp.send(parameters);
    }
</script>
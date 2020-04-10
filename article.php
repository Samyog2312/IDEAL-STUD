<?php include 'header.php' ?>
<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="discount.css"></head>
<body>


<div class="row info">
<div class="discount-container col-md-6">
<?php

$name =mysqli_real_escape_string($conn, $_GET['name']);
$sql = "select * FROM discounts WHERE name='$name'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0 ){

    while ($row = mysqli_fetch_assoc($result)){

        echo "<div class='article-box'> 
        <h3> ".$row['name']." </h3>
        <p> Description : ".$row['discount_description']." </p>
        <p> Normal Price : ".$row['normal_price']." </p>
        <p> Student Price : ".$row['student_price']." </p>
        <p> Discount Percent : ".$row['discount_percent']." </p>
        <p> Days : ".$row['days_of_week']." </p>
        <p> Address : ".$row['address']." </p>
        <p> Tel : ".$row['phone']." </p>
        <p> Email : ".$row['email']." </p>
        </div>";
        $lat = $row['lat'];
        $lng = $row['lng'];
    }
    
}

?>
</div>
<div id="googleMap" class="col-md-6" style="width:400px;height:400px;">
<h2>Location</h2>
<script>
var lat_ = "<?php echo"$lat"?>";
var lng_ = "<?php echo"$lng"?>"; 

function myMap() {

var mapProp= {
  center:new google.maps.LatLng(lat_, lng_),
  zoom:15,
};
var myLatLng=new google.maps.LatLng(lat_, lng_);

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({ 
          position: myLatLng, 
          map: map 
        }); 
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu5zPrNVOUi0uwz-iv8UIY9aUiOj7Oik&callback=myMap"></script>
</div>
</div>
</body>
</html>

<?php include 'footer.php'?>
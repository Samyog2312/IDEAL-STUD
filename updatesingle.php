<?php include 'header.php'?>
<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM discounts WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Discount Info</title>
</head>
<body>
<form class="data" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Name: <br>
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
Discount Description :<br>
<input type="text" name="discount_description" value="<?php echo $row['discount_description']; ?>">
<br>
Normal Price:<br>
<input type="text" name="normal_price" value="<?php echo $row['normal_price']; ?>">
<br>
Student Price:<br>
<input type="text" name="student_price" value="<?php echo $row['student_price']; ?>">
<br>
Discount percent:<br>
<input type="text" name="discount_percent" value="<?php echo $row['discount_percent']; ?>">
<br>
Days of week:<br>
<input type="text" name="days_of_week" value="<?php echo $row['days_of_week']; ?>">
<br>
Address:<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>">
<br>
Phone:<br>
<input type="tel" name="phone" value="<?php echo $row['phone']; ?>">
<br>
Email:<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>">
<br>
Latitude:<br>
<input type="text" name="lat" value="<?php echo $row['lat']; ?>">
<br>
Longitude:<br>
<input type="text" name="lng" value="<?php echo $row['lng']; ?>">
<br>
<br>

<input type="submit" name="submit" value="Submit" >
<?php 
if(isset($_POST['submit'])){
    if($_POST['submit']){
        
        $name = $_POST['name'];
        $discount_description = $_POST['discount_description'];
        $normal_price = $_POST['normal_price'];
        $student_price = $_POST['student_price'];
        $discount_percent = $_POST['discount_percent'];
        $days_of_week = $_POST['days_of_week'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $query = mysqli_query($conn,"UPDATE discounts set name='$name' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set discount_description='$discount_description' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set normal_price='$normal_price' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set student_price='$student_price' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set discount_percent='$discount_percent' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set days_of_week='$days_of_week' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set address='$address' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set phone='$phone' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set email='$email' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set lat='$lat' where id='$a'");
        $query = mysqli_query($conn,"UPDATE discounts set lng='$lng' where id='$a'");

        if($query){
            echo "Record Modified Successfully <br>";
            echo "<a href='update.php'> Check your updated List </a>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not modified";}
        }
    $conn->close();
}
?>
</form>

</body>
</html>
<?php include 'footer.php'?>
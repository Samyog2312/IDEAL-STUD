<?php include 'header.php'?>
<?php include 'db.php' ;
$name= $_POST['name'];
$discount_description= $_POST['discount_description'];
$normal_price= $_POST['normal_price'];
$student_price= $_POST['student_price'];
$discount_percent= $_POST['discount_percent'];
$days_of_week= $_POST['days_of_week'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$email= $_POST['email'];

$sql="insert into discounts (name, discount_description, normal_price, student_price, discount_percent, days_of_week, address, phone, email)
values('$name', '$discount_description', '$normal_price', '$student_price', '$discount_percent', '$days_of_week', '$address', '$phone', '$email')";

if($conn->query($sql) === TRUE) {
    echo "Discount has been added successfully";
    echo "<a href='update.php' class='top'>Update </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
<?php include 'footer.php'?>
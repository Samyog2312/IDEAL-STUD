<?php include 'header.php' ?>
<?php include 'db.php' ;
$business_name= $_POST['business_name'];
$user_normal_price= $_POST['user_normal_price'];
$user_student_price= $_POST['user_student_price'];
$user_city= $_POST['user_city'];

$sql="insert into verification (business_name, user_normal_price, user_student_price, user_city)
values('$business_name', '$user_normal_price', '$user_student_price', '$user_city')";

if($conn->query($sql) === TRUE) {
    echo "Student discount has been sent for verification";
    echo "<a href='discount.php' class='top'>Home </a>";
    
    /*// Send an email notification of new discount submission
    $message = "$business_name\r\n$user_normal_price\r\n$user_student_price\r\n$user_city";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Send ('receiver email', 'subject', user input values)
    mail('caffeinated@example.com', 'My Subject', $message);*/
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>

<?php include 'footer.php' ?>
<?php include 'header.php' ?>
<?php include 'db.php' ;
$name= $_POST['name'];
$email= $_POST['email'];

$sql="insert into newsletter (name, email)
values('$name', '$email')";

if($conn->query($sql) === TRUE) {
    echo "You have been added to our mailing list";
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
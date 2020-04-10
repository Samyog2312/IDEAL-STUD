<?php include 'header.php'?>
<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Discount Data</title>
</head>
<body>
<form class="data" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Business Name: <br>
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
Discount Description:<br>
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
Days of Week:<br>
<input type="text" name="days_of_week" value="<?php echo $row['days_of_week']; ?>">
<br>
Address:<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>">
<br>
Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
<br>
Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
<br>
<?php 

if(isset($_POST['submit'])){
    if($_POST['submit']){
        
        $name = $_POST['name'];
        $query = mysqli_query($conn,"DELETE FROM discounts where id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            echo "<a href='update.php'><br> Check your updated List </a>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }
    $conn->close();
}
?>
</form >
<?php 

if(isset($_POST['submit'])){
    if($_POST['submit']){
        
        $name = $_POST['name'];
        $query = mysqli_query($conn,"DELETE FROM discounts where id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            echo "<a href='update.php'> Check your updated List </a>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }
    $conn->close();
}
?>
</body>
</html>
<? include 'footer.php'?>
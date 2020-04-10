<?php include 'header.php' ?>

<div class="col-md-9 data">
<?php
include 'db.php'; 
$sql = "select * from discounts";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table border=\"1\"><tr><th>ID</th><th>Name</th><th>Discount Description</th>
<th>Normal Price</th><th>Student Price</th><th>Discount percent</th><th>Days of Week</th>
<th>Address</th><th>Phone</th><th>Email</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>". $row["name"]."</td> <td>". $row["discount_description"] 
        
        ."</td><td>". $row["normal_price"]. "</td><td>". $row["student_price"]. "</td><td>". $row["discount_percent"]
        ."</td><td>". $row["days_of_week"]. "</td><td>". $row["address"]. "</td><td>". $row["phone"]. "</td>
        <td>". $row["email"]. "</td></tr>";
    }
    echo "</table>";
    echo "<a href='update.php'> Back to main </a>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}


$conn->close();
?>
</div>

<?php include 'footer.php'?>
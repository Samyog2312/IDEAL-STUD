<?php include 'header.php' ?>

<div class="col-md-9 update">
<?php
require 'db.php'; 
$sql = "select * from discounts";
$result = $conn->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            font-size:20px;
            color:black;
        }
        </style>
<title> Update Data</title>
</head>
<body>
    <a href="discount_input_form.php" class="top">Add Discount</a>
    <a href="update.php" class="top">Update/Delete Discount </a>
    <a href="read.php" class="top">Retrieve Discount </a>
<hr>
<table class="table" border="2" cellpadding="5">
<tr>
<th>ID</th><th>Name</th><th>Discount Description</th>
<th>Normal Price</th><th>Student Price</th><th>Discount Percent</th><th>Days Of Week</th><th>Address</th>
<th>Phone</th><th>Email</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["discount_description"]; ?></td>
<td><?php echo $row["normal_price"]; ?></td>
<td><?php echo $row["student_price"]; ?></td>
<td><?php echo $row["discount_percent"]; ?></td>
<td><?php echo $row["days_of_week"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a class="update-link" href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a class="delete-link" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
</body>
</html>
</div>
<?php include 'footer.php'?>
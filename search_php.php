<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="discount.css">

<div class="article-container">
<?php
if (isset($_POST['submit-search'])){

    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM discounts WHERE name LIKE '%$search%'   OR days_of_week LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

echo $queryResult." DISCOUNTS FOUND!";

if($queryResult > 0)
{
while($row = mysqli_fetch_assoc($result)){
    echo "<a href='article.php?name=".$row['name']."&address=".$row['address']."'><div class='article-box'> 
    <h3> ".$row['name']." </h3>
    <p> ".$row['discount_description']." </p>
    </div></a>";
}

} else {
    echo "There are no results matching your search !";
}

}
?>
</div>
<?php include 'footer.php'; ?>
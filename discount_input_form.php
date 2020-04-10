<?php include 'header.php' ?>

<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Nome do Documento</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
    
<body>

<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

</body>
</html>


<div class='col-md-9 data'>
<form name= "discount_input_form" onsubmit="return validateform()" method="post" action="create_discount.php">
    Business Name: <input type="text" name="name"required><br>
    Discount Description: <input type="text" name="discount_description"required><br>
    Normal Price: <input type="text" name="normal_price"required><br>
    Student Price: <input type="text" name="student_price"required><br>
    Discount percent: <input type="text" name="discount_percent"required><br>
    Days of week: <input type="text" name="days_of_week"required><br>
    Address: <input type="text" name="address"required><br>
    Phone: <input type="number" name="phone"required><br>
    Email: <input type="email" name="email"required><br>
    Latitude: <input type="number" name="lat"required><br>
    Longitude: <input type="number" name="lng"required><br>
<br>
<input type="submit" value="Save Discount">

</form>
</div>

<?php include 'footer.php' ?>


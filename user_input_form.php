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
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
    
</body>
</html>

<div class='col-md-9 data'>
    <h2>Add a discount</h2>
<form name= "user_input_form" onsubmit="return validateform()" method="post" action="create_verification_request.php">
    Business Name: <input class="text-box" type="text" name="business_name"required><br>
    Normal Price: <input class="text-box" type="text" name="user_normal_price"required><br>
    Student Price: <input class="text-box" type="text" name="user_student_price"required><br>
    City/Town: <input class="text-box" type="text" name="user_city"><br>
<input class="btn" type="submit" value="Submit" style="float: right">
</form>
</div>
<?php include 'footer.php' ?>


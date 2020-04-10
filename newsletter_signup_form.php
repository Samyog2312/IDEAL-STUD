<?php include 'header.php' ?>
<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
<div class='col-md-9 data'>
    <h2>Signup to our <br> newsletter</h2>
<form name= "newsletter_signup_form" onsubmit="return validateform()" method="post" action="newsletter_signup.php">
    Name: <input class="text-box" type="text" name="name"required><br>
    Email: <input class="text-box" type="email" name="email"required><br>
<input class="btn" type="submit" value="Submit" style="float: right">
</form>
</div>
<?php include 'footer.php' ?>


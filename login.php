
<?php include 'header.php'?>
<?php include 'server.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="discount.css">
	<script>
		function validateForm() {
		var x = document.forms["myForm"]["name"].value;
		if (x == "") {
			alert("Name must be filled out");
			return false;
		}
		}
	</script>
</head>
<body>



<div id="google_translate_element">


<div class="header data">
  	<h2>Login</h2>
	  <?php include 'errors.php' ?>
  <form onsubmit="return validateform()" method="post" action="server.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input class="text-box" type="text" name="username"required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="text-box" type="password" name="password"required>
  	</div>
  	<div class="input-group" style="float: right">
  		<input type="submit" value="Login"class="btn" name="login_user"></button>
  	</div>
  	<p>
  		
  	</p>
  </form>
</div>

</div>
</body>
<html>

<?php include 'footer.php' ?>
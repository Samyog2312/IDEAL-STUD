<?php include 'header.php' ?>

<?php include('server.php') ?>

<!DOCTYPE HTML>
<html>
<head>
    
    <title>registered user</title>
<link rel="stylesheet" type="text/css" href="discount.css">
</head>
<body>
<div class="data">
<div class="header">
<h2>Register</h2>
</div>
<form method="post" action="server.php" >

<!-- Validation Error -->
<?php include 'errors.php' ?>
<div class="input-group">
<label>Username</label>
<input class="text-box" type="text" name="username" value="<?php echo $username; ?>"> </div>

<div class="input-group">
<label>Email</label>
<input class="text-box" type="text" name="email" value=" <?php echo $email; ?>">
</div>

<div class="input-group">
<label>Password</label>
<input class="text-box" type="password" name="password_1">
</div>

<div class="input-group">
<label>Confirm Password</label>
<input class="text-box" type="password" name="password_2">
</div>

<div class="input-group">
<input type="submit" name="reg_user" class="btn"><a href="login.php">Register</a></button>
</div>
<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
</form>
</div>
</body>
</html>

<?php include 'footer.php'?>

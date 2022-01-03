<?php if (isset($_POST['reg'])) {
	?>
   <div class="atat">
	<h2>Register</h2>
 <form action="" method="POST">
 	<input class="my_input" type="text" name="frist_name" placeholder="Frist Name">
 	<input class="my_input" type="text" name="last_name" placeholder="last Name">
 	<input class="my_input" type="email" name="Email" placeholder="Email">
 	<input class="my_input" type="password" name="password" placeholder="Password">
 	<input class="boton" type="submit" name="register" value="Register">
 	
 </form>

 You have an account,pleace <a href="login.php">Login Now</a>
</div>



<?php die();

} ?>




<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
	<div class="atat">
	<h2>Register</h2>
 <form action="" method="POST">
 	<input class="my_input" type="text" name="frist_name" placeholder="Frist Name">
 	<input class="my_input" type="text" name="last_name" placeholder="last Name">
 	<input class="my_input" type="email" name="Email" placeholder="Email">
 	<input class="my_input" type="password" name="password" placeholder="Password">
 	<input class="boton" type="submit" name="register" value="Register">
 	
 </form>

 You have an account,pleace <a href="login.php">Login Now</a>
</div>
</body>
</html>
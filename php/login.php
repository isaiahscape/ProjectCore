<!DOCTYPE html>
<html>
<head>
	<title>ProjectCore - Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="getlogin.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="admin"><br>

     	<label>Passsword</label>
     	<input type="password" name="password" placeholder="********"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
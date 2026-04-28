<?php
session_start();
//function clean($input){preg_replace('/[a-zA-Z]/','',$input);}
$error="";
if ($_SERVER['REQUEST_METHOD']==='POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username === 'name' && $password === 'pass'){
	$_SESSION['LOGGEDIN']=true;
	$_SESSION['name']=$username;
	}
	else {$error = "invalid";}
	}
	
$loggedin = isset($_SESSION['LOGGEDIN']) && $_SESSION['LOGGEDIN'] ===true;
	
	?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>taxes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<!--<link rel="stylesheet" src="styles.css" />-->
	<title>grades</title>
	</head>
	<body>
	<?php if ($loggedin): ?>
	<?php echo "hello" . ($_SESSION['name']);?>
	<a href="logout2.php">logout</a>
	<?php else: ?>
	<?php if (!empty($error)): ?>
        <?php echo $error; ?>
        <?php endif; ?>
	
	<form method="POST" action="">
	<label>Username:</label><br\>
	<input type = "text" name = "username" required>
	<label>Password:</label><br\>
	<input type = "Password" name = "password" required>
	<button type="submit">login</button>
	</form>
	<?php endif;?>
	
	</body>
	</html>

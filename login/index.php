<?php
session_start();
function clean($data){return preg_replace("/[^a-zA-Z0-9]/","",$data);}
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = clean($_POST["username"]);
	$password = clean($_POST["password"]);
	if ($username==="admin" && $password === "password"){
	$_SESSION["LOGGEDIN"]=true;
	$_SESSION["username"]=$username;
	
	}
	else {$error = "invalid login";}
} 

$loggedin=isset($_SESSION["LOGGEDIN"]) && $_SESSION["LOGGEDIN"]===true;

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
	<?php
	if ($loggedin):
	?>
	<h2><?php echo "hello " . htmlspecialchars($_SESSION["username"]); ?>
	</h2>
	<a href="logout.php">Logout</a>
	
	<?php else: ?>
	<?php if (!empty($error)): ?>
	<p style="color:red;"><?php echo $error;?></p>
	<?php endif;?>
	
	<form method="POST" action="">
	<label>Username:</label><br?>
	<input type="text" name="username" required><br/><br/>
	<label>Password:</label><br/>
	<input type="Password" name="password" required><br/><br/>
	<button type="submit">login</button>
	</form>
	<?php endif;?>
	</body>
	</html>

<?php
$fname = preg_replace('/[^a-zA-Z]/','', $_POST['fname']);
print_r($_POST,0);
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
	<form method="POST" action="index.php">
		<input type="text" name="fname" />
		<br/>
		<select name="year">
		<?php 
		for($x=1900;$x<date('Y');$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		?>
		</select>
		<input type="submit" name="submit" value="click" />
		
	</form>

	</body>
	</html>

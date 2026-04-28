<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
$dice = preg_replace('','',$_POST['dice']);
$eyes = preg_replace('','',$_POST['eyes']);
}

if(isset($_POST['submit'])){
$dice = (int)$_POST['dice'];
$eyes = (int)$_POST['eyes'];
$diceeyes = $dice+$eyes;
echo $diceeyes;
echo "<a href='?game=1&dice=$dice&eyes=$eyes'>different</a>";
}

if(isset($_GET['game'])){
$dice = (int)$_GET['dice'];
$eyes = (int)$_GET['eyes'];
$diceminus=$dice-$eyes;
echo $diceminus;
}



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
	<?php if (!isset($_GET['game'])){?>
	<form method ="POST">
	<table border="1">
	<tr>
	<td>
	<select name="dice">
	<?php
	for($x=1;$x<=6;$x++){
	echo "<option value =" . $x . ">" . $x .  "</option\n>";
	}
	?>
	</select>
	</td>
	<td>
	<select name ="eyes">
	<?php
	for($x=1;$x<=4;$x++){
	echo "<option value =" . $x . ">" . $x .  "</option\n>";
	}
	?>
	</select>
	</td>
	</tr>
	</table>
	<br\>
	<input type="submit" name="submit" value="click">
	</form>
	<?php } ?>
	</body>
	</html>

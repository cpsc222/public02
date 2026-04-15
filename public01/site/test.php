<?php
session_start();
$_SESSION['LOGGEDIN']=1;
$_SESSION['USER']='bob';
//header('Location: /candy.php');

print_r($_SESSION,0);

$hosts=fopen("/etc/hosts","r") or die("can't open");

while($line = fgets($hosts)){
echo "loop";
	if(!feof($hosts)){
	$linearr+=preg_split("/\s/", $line);
	}
fclose($hosts);
print_r($linearr,0);
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
	
	<a href="logout.php">Logout</a>
	<?php
	
	?>
	<br/>
	</body>
	</html>

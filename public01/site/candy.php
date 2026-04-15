<?php
	require_once ('extra.php');
	$food = array();
	$food[] = new food("sweet","red","sphere");
	$food[] = new food("sour","blue","cube");

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
	for($x=0;$x<count($food);$x++){
	echo "<table border=" . "1" . ">";
	echo "<tr>";
	echo "<td>";
	echo $food[$x]->getflavor();
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo $food[$x]->getcolor();
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo $food[$x]->getshape();
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	}
	?>
	<br/>
	</body>
	</html>

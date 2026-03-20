<?php
$name = "Bob man";
$hoursworked = 40.0;
$payrate = 54.50;
$federalrate = 24.5;
$staterate = 3.07 ; //PA income tax in 2025 for reference
$gross = $hoursworked * $payrate;
$fedwithold = $gross * ($federalrate / 100);
$statewithold = $gross * ($staterate / 100);
$totaldeduct = $fedwithold + $statewithold;
$net = $gross - $totaldeduct;
$annual = $gross * 52;

if ($annual <= 11925) {
 $fedbrack = "10%";
}
elseif ($annual <= 48475){
 $fedbrack = "12%";
}
elseif ($annual <= 103350){
 $fedbrack = "22%";
}
elseif ($annual <= 197300){
 $fedbrack = "24%";
}
elseif ($annual <= 250525){
 $fedbrack = "32%";
}
elseif ($annual <= 626350){
 $fedbrack = "35%";
}
else {$fedbrack = "37%";}

$Payrolltable = array(
"Employee name" => $name,
"hours worked" => number_format($hoursworked, 1),
"pay rate" => "$" . number_format($payrate, 2),
"gross pay" => "$" . number_format($gross, 2),
"federal witholding (" . $federalrate . "%)" => "$" . number_format($fedwithold, 2),
"PA witholding (" . $staterate . "%)" => "$" . number_format($statewithold, 2),
"total deductions" => "$" . number_format($totaldeduct, 2),
"net pay" => "$" . number_format($net, 2),
"annual gross pay" => "$" . number_format($annual, 2),
"2025 federal tax bracket" => $fedbrack
);
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>taxes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<!--<link rel="stylesheet" src="styles.css" />-->
	<title>tax calculator</title>
	</head>
	<body>
	<h1>tax calc</h1>
	<?php
		echo "<table border=1>";
		echo "<tr><th>Item</th><th>value</th></tr>";
		foreach ($Payrolltable as $label => $value) {
			echo "<tr>";
			echo "<td>" . $label . "</td>";
			echo "<td>" . $value . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
	</body>
	</html>

<?php
$year = preg_replace('/[^a-zA-Z]/','', $_POST['year']);
$month = preg_replace('/[^a-zA-Z]/','', $_POST['month']);
$day = preg_replace('/[^a-zA-Z]/','', $_POST['day']);
$hour = preg_replace('/[^a-zA-Z]/','', $_POST['hour']);
$minute = preg_replace('/[^a-zA-Z]/','', $_POST['minute']);
$ampm = preg_replace('/[^a-zA-Z]/','', $_POST['ampm']);		
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
	<h1>birthday formatter</h1>
	<p>
	<?php
if (isset($_POST['submit'])) {
    $year   = (int)$_POST['year'];
    $month  = (int)$_POST['month'];
    $day    = (int)$_POST['day'];
    $hour   = (int)$_POST['hour'];
    $minute = (int)$_POST['minute'];
    $ampm   = $_POST['ampm'];
    if ($ampm == 'pm' && $hour != 12) $hour += 12;
    if ($ampm == 'am' && $hour == 12) $hour = 0;
    $timestamp = mktime($hour, $minute, 0, $month, $day, $year);
    echo date("l, F jS, Y - g:i a", $timestamp);
    echo "</br>";
    echo "<a href='? year=$year&month=$month&day=$day&hour=$hour&minute=$minute'>show date in iso format</a>";
    
}

if (isset($_GET['year'])) {
    $year   = (int)$_GET['year'];
    $month  = (int)$_GET['month'];
    $day    = (int)$_GET['day'];
    $hour   = (int)$_GET['hour'];
    $minute = (int)$_GET['minute'];
    $timestamp = mktime($hour, $minute, 0, $month, $day, $year);
    echo date("Y-m-d H:i:s", $timestamp);
}
?>
	</p>
	<form method="POST" action="birthday.php">
		<br/>
		<table>
		<?php 
		echo "<table border=1>";
		echo "<tr><th>Year</th><th>Month</th><th>Day</th><th>hour</th><th>minute</th><th>am/pm</th></tr>";
		echo "<tr>";
		echo "<td>";
		echo "<select name=" . "year" . ">";
		for($x=1900;$x<date('Y');$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		echo "</td>";
		echo "</select>";
		echo "<td>";
		echo "<select name=" . "month" . ">";
		for($x=1;$x<=12;$x++){
		echo "<option value=\"$x\">" . date('F', mktime(0,0,0,$x)) . "</option>";
		}
		echo "</select>";
		echo "<td>";
		echo "<select name=" . "day" . ">";
		for($x=1;$x<=31;$x++){
		$day = date('l', mktime(0,0,0,0,$x));
		echo "<option value=\"$x\">$x</option>";
		}
		echo "</select>";
		echo "<td>";
		echo "<select name=" . "hour" . ">";
		for($x=1;$x<=12;$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		echo "</select>";
		echo "<td>";
		echo "<select name=" . "minute" . ">";
		for($x=0;$x<=59;$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		
		echo "</select>";
		echo "<td>";
		echo "<select name=" . "ampm" . ">";
		echo "<option value =" . "am" . ">am</option>\n";
		echo "<option value =" . "pm" . ">pm</option>\n";
		echo "</select>";
		echo "</td>"; 
		//echo "</table>";	
		?>
		<tr>
		<tr>
   		<tr>
   	 <td colspan="6" align="center">
        <input type="submit" name="submit" value="format data" />
		
		</tr>
		</td>
		</table>
		
		</br>
		</br>
		
	</form>

	</body>
	</html>

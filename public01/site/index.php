<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = preg_replace('/[^0-9]/','', $_POST['year']);
    $month = preg_replace('/[^0-9]/','', $_POST['month']);
    $day = preg_replace('/[^0-9]/','', $_POST['day']);
    $hour = preg_replace('/[^0-9]/','', $_POST['hour']);
    $minute = preg_replace('/[^0-9]/','', $_POST['minute']);
    $ampm = preg_replace('/[^a-zA-Z]/','', $_POST['ampm']);

    print_r($_POST);
}

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
    echo "<a href='?iso=1&year=$year&month=$month&day=$day&hour=$hour&minute=$minute'>show date in iso format</a>";
    
}

if (isset($_GET['iso'])) {
    $year   = (int)$_GET['year'];
    $month  = (int)$_GET['month'];
    $day    = (int)$_GET['day'];
    $hour   = (int)$_GET['hour'];
    $minute = (int)$_GET['minute'];
    $timestamp = mktime($hour, $minute, 0, $month, $day, $year);
    echo date("Y-m-d H:i:s", $timestamp);
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
	<h1>birthday formatter</h1>
	<?php if (!isset($_GET['iso'])) { ?>
	<form method="POST" action="index.php">
		<br/>
	<table border="1">
	<tr><th>Year</th><th>Month</th><th>Day</th><th>hour</th><th>minute</th><th>am/pm</th></tr>
		<tr>
		<td>
		<select name="year">
		<?php
		for($x=1900;$x<date('Y');$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		?>
		</select>
		</td>
		<td>
		<select name="month">
		<?php
		for($x=1;$x<=12;$x++){
		echo "<option value=\"$x\">" . date('F', mktime(0,0,0,$x)) . "</option>";
		}
		?>
		</select>
		</td>
		<td>
		<select name="day">
		<?php
		for($x=1;$x<=31;$x++){
		$day = date('l', mktime(0,0,0,0,$x));
		echo "<option value=\"$x\">$x</option>";
		}
		?>
		</select>
		</td>
		<td>
		<select name="hour">
		<?php
		for($x=1;$x<=12;$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		?>
		</select>
		</td>
		<td>
		<select name="minute">
		
		<?php
		for($x=0;$x<=59;$x++){
		echo "<option value=\"" . $x . "\">" . $x . "</option>\n";
		}
		?>
		</select>
		</td>
		<td>
		<select name="ampm">
		<option value ="am">am</option>\n
		<option value ="pm">pm</option>\n
		</select>
		</td>	
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
<?php } ?>
	</body>
	</html>

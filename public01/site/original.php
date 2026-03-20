<?php
	$num = 5;
	$stir = "name";
	$arr = array(array(1,2,3), array(4,5,6), array(7,8,9));
function foo($n)
{
	return $n+10;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>test page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<!--<link rel="stylesheet" src="styles.css" />-->
	</head>
	<body>
<?php
	echo "<pre>" . print_r($_SERVER,1) . "</pre>";
	echo htmlentities("uwrfhreudhewuifhuri*&^<b>bold</b>");
?>
	<h1>test page </h1>
	<p>
		<?php echo $num / 2 . "<br />";
		      echo $stir . "<br />"; 
		      echo "<pre>" . print_r($arr, 1) . "</pre>"; ?>
	</p>
	<h2>rainbow</h2>
	bleck
	<b><u>boldunderline</u></b>
	<p>
	
<?php
	if($num < 4.5)
                echo "less";
	elseif($num == 4.5)
                echo "equal";
        else
                echo "greater";

		for($x=0; $x<10; $x++)
                        echo "X";
	echo "<br /><br />";
	echo "<table border=1>";
	for($x=0; $x<count($arr); $x++)
	{
	echo "<tr>";
	echo "<td>" . $arr[$x][0] . "</td>";
	echo "<td>" . $arr[$x][1] . "</td>";
	echo "<td>" . $arr[$x][2] . "</td>";

	echo "</tr>";
	}
echo "</table>";

echo "<br /><br />";
echo "<table border=1>";
foreach($arr as $row)
	{
	echo "<tr>";
	echo "<td>" . $row[0] . "</td>";
	echo "<td>" . $row[1] . "</td>";
	echo "<td>" . $row[2] . "</td>";

	echo "</tr>";
	}
echo "</table>";
echo "<br /><br />";
$newnum = foo($num);
echo $newnum;
?>

	</p>
	<h3>table</h3>
	
	<table>
		<tr>
			<th>colum1</th>
			<th>colum2</th>
			<th>colum3</th>
	
		</tr>
		<tr>
			<td>colum1</td>
			<td>colum2</td>
			<td>colum3</td>
	
		</tr>
	</table>
	<img src="https://wp.technologyreview.com/wp-content/uploads/2019/08/ball-black-bubble-35016-10.jpg" />
	</body>
</html>

<?php

?>

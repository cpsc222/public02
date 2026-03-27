<?php
	require_once "student.php";
	require_once "grades.php";
	$students = array();
	$students[] = new Student(
	"Man",
	"bob",
	"123",
	array(
	"cpsc222" => 93,
	"cpsc428" => 89,
	"math101" => 90
	)
);

	$students[] = new Student(
	"Rosh",
	"Max",
	"456",
	array(
	"cpsc222" => "80",
	"cpsc428" => "98",
	"math101" => "90"
	)
);

       $students[] = new Student( 
        "Wasd",
        "mac",
        "789",
        array( 
        "cpsc222" => "95",
        "cpsc428" => "75",
        "math101" => "80"
        )
);



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
	<h1>grade tables</h1>
	<?php
	 for ($x=0; $x < count($students); $x++){
		$student = $students[$x];
		echo "<table border='1'>";
		echo "<tr><th colspan='2'>Student " . ($x + 1) . "</th></tr>";
		echo "<tr>";
		echo "<td>name</td>";
		echo "<td>" . $student->getlname() . ", " . $student->getfname() . "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>student id</td>";
		echo "<td>" . $student->getid() . "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>courses</td>";
		echo "<td>";
		foreach ($student->getCourses() as $courses => $grade) {
			echo $courses . " : " . $grade . "% " . getgrade($grade) . "<br>";
		}
		echo "</td>";
		echo "</tr>";

		echo "</table>";
	}
	?>
	</body>
	</html>

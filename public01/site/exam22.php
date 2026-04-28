<?php
if($_SERVER['REQUEST_METHOD']='POST'){
$bgcolor = $_POST['bgcolor'];
$textc = $_POST['textc'];
$greet = $_POST['greet'];
}

if(isset($_POST['submit'])){
$bgcolor = $_POST['bgcolor'];
$textc = $_POST['textc'];
$greet = $_POST['greet'];
echo "</a href='?pref=1&bgcolor=$bgcolor&textc=$textc&greet=$greet'>submit</a>";
}

if(isset($_GET['pref'])){
$bgcolor = $_GET['bgcolor'];
$textc = $_GET['textc'];
$greet = $_GET['greet'];
$array = array($_GET['bgcolor'], $_GET['textc'], $_GET['greet']);
echo $array;
}
?>

<!DOCTYPE html>
<html>
<body>
<?php if (!isset($_GET['pref'])){?>
<form method = 'POST' action = ''>
<table border = "1">
<tr>
<td>
<select name ='bgcolor'>
<option value ='red'>red</option>
<option value ='blue'>blue</option>
<option value ='green'>green</option>
</select>
</td>
<td>
<select name ='textc'>
<option value ='yellow'>yellow</option>
<option value ='black'>black</option>
<option value ='purple'>purple</option>
</select>
</td>
<td>
<select name ='greet'>
<option value ='hello'>hello</option>
<option value ='howdy'>howdy</option>
<option value ='ahoyhoy'>ahoyhoy</option>
</select>
</td>
</tr>
</table>
<br>
<input type='submit' value='pref' name='submit'>
</form>
<?php } ?>
</body>
</html>


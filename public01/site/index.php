<?php
session_start();
$error = "";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$username = $_POST['username'];
$password = $_POST['password'];
if($username === 'bob' && $password === 'ross'){
$_SESSION['username']=$username;
$_SESSION['LOGGEDIN']=true;
} else{$error="invalid";}
}
$loggedin = isset($_SESSION['LOGGEDIN']) && $_SESSION['LOGGEDIN'] === true;

$page = $_GET['page'];

function headertwo(){
echo "<!DOCYTPE html>
<html lang='en'>
<head>
<title>cpsc222 final exam</title>
<meta charset='utf-8'>
</head>
<body>
<h1>cpsc222 final exam</h1>";
}

function footer(){
echo "<hr>";
echo date('Y-m-d h:i:s A');
echo "</body></html>";
}
?>

<?php if ($loggedin): ?>
<?php headertwo();?>
<p>hello, <?php echo $_SESSION['username'];?><br><?php echo "<a href='final_logout.php'>logout</a>";?>
</p>
<?php if ($page == 0): ?>
<p>dashboard</p>
<ul>
<li><a href='?page=1'>user list</a></li>
<li><a href='?page=2'>group list</a></li>
<li><a href='?page=3'>syslog</a></li>
</ul>

<?php elseif($page == 1): ?>
<p><a href='index.php'>back to dashboard</a></p>
<h3>user list</h3>
<?php
if(file_exists('/etc/passwd')){
echo "<table border='1'><tr>
<th>username</th>
<th>password</th>
<th>uid</th>
<th>gid</th>
<th>display name</th>
<th>home directory</th>
<th>default shell</th>
</tr>";

foreach (file('/etc/passwd')as $line){
$p = preg_split('/:/', $line);
echo "<tr>
<td>{$p[0]}</td>
<td>{$p[1]}</td>
<td>{$p[2]}</td>
<td>{$p[3]}</td>
<td>{$p[4]}</td>
<td>{$p[5]}</td>
<td>{$p[6]}</td>
</tr>";
}
echo "</table>";
}

?>

<?php elseif ($page == 2): ?>
<p><a href='index.php'>back to dashboard</a></p>
<h3>group list</h3>
<?php if (file_exists('/etc/group')){
echo "<table border ='1'><tr>
<th>Group name</th>
<th>password</th>
<th>gid</th>
<th>members</th>
</tr>";

foreach(file('/etc/group')as $line){
$p = preg_split('/:/', $line);
echo "<tr>
<td>{$p[0]}</td>
<td>{$p[1]}</td>
<td>{$p[2]}</td>
<td>{$p[3]}</td>
<td>{$p[4]}</td>
<td>{$p[5]}</td>
<td>{$p[6]}</td>
</tr>";
}
echo "</table>";
}
?>
<?php elseif ($page == 3):?>
<p><a href='index.php'>back to dashboard</a></p>
<h3>syslog</h3>
<?php
if(file_exists('/var/log/syslog')){
echo "<table border='1'><tr>
<th>date</th>
<th>hostname</th>
<th>application</th>
<th>message</th>
</tr>";

foreach (file('/home/user/syslog.txt') as $line) {
    $line = trim($line);
    $parts = preg_split('/\s+/', $line, 3);
    if (count($parts) < 3) continue;
    $date = $parts[0];
    $host = $parts[1];
    $rest = $parts[2];
    $app_msg = preg_split('/:/', $rest, 2);
    
    if (count($app_msg) < 2) continue;
    $app = $app_msg[0];             
    $msg = trim($app_msg[1]);       
    echo "<tr>
    <td>$date</td>
    <td>$host</td>
    <td>$app</td>
    <td>$msg</td>
    </tr>";
}
echo "</table>";
}
?>
<?php else: ?>
<p><a hreaf='index.php'>back to dashboard</a></p>
<p>invalid page</p>
<?php endif;?>
<?php footer();?>
<?php else: ?>
<?php headertwo()?>
<form method ='POST'>
<label>username: </label>
<input type ='text' name='username'><br>
<label>password: </label>
<input type ='password' name='password'><br>
<input type ='submit' value='login'>
</form>
<?php if (!empty($error)):?>
<?php echo $error;?>
<?php endif;?>
<?php footer();?>
<?php endif;?>


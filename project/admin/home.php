<!doctype html>
<head>
</head>
<body>
<h1 align="center">ADMIN HOME PAGE</h1>
<div align="right">
<?php
session_start();
$name = $_SESSION['name'];
$uid = $_SESSION['uid'];
echo "admin id ".$uid;
echo "<br>";
echo "name of admin is ".$name;
?>
</div>

<div align="right"><a href="logout.php">logout</a></div>
<br>
<a href="home.php"> admin home page </a>
<br>
<a href="voter.php">voter's details</a>
<br>
<a href="candidate.php">candidate's details</a>
<br>
<form action="home.php" method="post">
<input type="submit" value="declare election result to public">
</form>
</body>
</html>
<?php
include "../connect/dbconnect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{

header("location:declare.php");
}
?>

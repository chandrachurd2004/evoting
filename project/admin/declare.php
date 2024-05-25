<!doctype html>
<head>
</head>
<body>
<form action="declare.php" method="post">
are you sure to declare result
<input type="submit" value="declare">
</form>
<a href="home.php">go back</a>
</body>
</html>
<?php
include "../connect/dbconnect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
session_start();
$u = $_SESSION['uid'];
echo $u;
$command = "update `admin` set `declare`=1 where `admin_id`=$u";
$ex=mysqli_query($con,$command);
if($ex)
{
header("location:success.php");
}
else
{
echo "<script>unsuccessfull</script>";
}
}
?>

<!doctype html>
<body>
<form action="success.php" method="post">
voted successfull press any number to logout
<input type="number" name="an">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
include "../../connect/dbconnect.php";
$cid;
if($_SERVER['REQUEST_METHOD']  == 'GET')
{
	$cid = $_GET['cid'];
	session_start();
	$_SESSION['cid'] = $cid;
}



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['an']))
	{
		session_start();
		$cid = $_SESSION['cid'];
		$vid = $_SESSION['vid'];

		$c1 = "update `voter` set `status` = 1 where `vid`=$vid";
		$ex1 = mysqli_query($con,$c1);
		if($ex1)
		{
			$c2 = "select * from `candidate` where `cid`=$cid";
			$ex2=mysqli_query($con,$c2);
			$data=mysqli_fetch_assoc($ex2);
			$v = $data['votes'];
			$v=$v+1;
			$c3 = "update `candidate` set `votes` = $v where `cid`=$cid";
			$ex3 = mysqli_query($con,$c3);
header("location:../../home.html");
		}

	}
}



?>

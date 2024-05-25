<!doctype html>
<head>
<title>
admin login
</title>
</head>
<body>
<h1>admin login</h1>
<form action="login.php" method="post">
admin_id: <input type="number" name="un">
password: <input type="text" name="ps">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
include "../connect/dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['un']) && isset($_POST['ps']))
	{
		$us= $_POST['un'];
		$ps= $_POST['ps'];
		$command = "select * from `admin` where `admin_id`=$us";
		$ex = mysqli_query($con,$command);
		$nrow = mysqli_num_rows($ex);
		if($nrow == 1)
		{
			$data = mysqli_fetch_assoc($ex);
			session_start();
			$_SESSION['name'] = $data['name'];
			$_SESSION['uid'] = $data['admin_id'];
			header("location:home.php");
		}
		else
		{
			echo "password error";
		}
	}
}
?>

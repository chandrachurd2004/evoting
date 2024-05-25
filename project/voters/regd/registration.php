<html>
<head>
<title>
registration
</title>
</head>
<body>
<h1>voter registration</h1>
<form action="registration.php" method="post">
name:<input type="text" name="nm" >
password: <input type="text" name="ps">
age: <input type="number" name="age">
area: <input type="text" name="area">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
include "../../connect/dbconnect.php";
if($_SERVER['REQUESTED_METHOD'] = 'POST')
{
	if(isset($_POST['nm']) &&
			isset($_POST['ps'])&&
			isset($_POST['age'])&&
			isset($_POST['area'])
	  )
	{
		$status = 0;
		$name = $_POST['nm'] ;
		$pass = $_POST['ps'];
		$hash = password_hash($pass , PASSWORD_DEFAULT);
		$age = $_POST['age'];
		$area = $_POST['area'];

		if($age >= 18)
		{
			$query = "insert into `voter` (`name`,`password`,`status`,`age`,`area`) values ('$name','$hash',$status,$age,'$area')";
			$ex = mysqli_query($con , $query);
			if($ex)
			{
				header("location:success.php");
			}
			else
			{
				echo "<script>alert('failed')</script>";
			}
		}
		else
		{
				echo "<script>alert('you are minor')</script>";
		}
	}
}
?>

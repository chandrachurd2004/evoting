<html>
<head>
<title>
registration
</title>
</head>
<body>
<h1>candidate registration</h1>
<form action="registration.php" method="post">
name:<input type="text" name="nm" >
party_name: <input type="text" name="ppn">
age: <input type="number" name="age">
post: <input type="text" name="post">
area: <input type="text" name="area">
<input type="submit" value="submit">
</form>
<a href="../../home.html">go to home page</a>
</body>
</html>
<?php
include "../../connect/dbconnect.php";
if($_SERVER['REQUESTED_METHOD'] = 'POST')
{
	if(isset($_POST['nm']) &&
			isset($_POST['age'])&&
			isset($_POST['ppn'])&&
			isset($_POST['area'])&&
			isset($_POST['post'])
	  )
	{
		$votes = 0;
		$party = $_POST['ppn'] ;
		$name = $_POST['nm'] ;
		$age = $_POST['age'];
		$post = $_POST['post'];
		$area = $_POST['area'];

		if($age >= 18)
		{
			$query = "insert into `candidate` (`name`,`party_name`,`post`,`votes`,`age`,`area`) values ('$name','$party','$post',$votes,$age,'$area')";
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

<html>
<head>
<title>
login
</title>
</head>
<body>
<h1>voter login</h1>
<form action="login.php" method="post">
vid:<input type="number" name="vid" >
password: <input type="text" name="ps">
<input type="submit" value="submit">
</form>
<a href="../../home.html">go to home page</a>
</body>
</html>
<?php
include "../../connect/dbconnect.php";
if($_SERVER['REQUESTED_METHOD'] = 'POST')
{
	if(isset($_POST['vid']) &&
			isset($_POST['ps'])
	  )
	{
		$vid= $_POST['vid'] ;
		$pass = $_POST['ps'];
		$command = "select * from `voter` where vid=$vid";
		$ex = mysqli_query($con , $command);
		$row = mysqli_num_rows($ex);
		if($row)
		{
			$data = mysqli_fetch_assoc($ex);
			$vid = $data['vid'];
			$hash = $data['password'];
			$status = $data['status'];
			if(password_verify($pass, $hash))
			{
				if($status == 0)
				{
					session_start();
					$_SESSION['vid'] = $vid;
					header("location:vote.php");
				}
				else
				{
					echo "<script>alert('already voted')</script>";
				}
			}
			else
			{
				echo "<script>alert('pass error')</script>";
			}
		}
		else
		{
			echo "<script>alert('data not found')</script>";
		}
	}
}
?>

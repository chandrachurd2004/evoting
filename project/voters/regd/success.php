<html>
<head>
<title>
success
</title>
</head>
<body>
<h1>voter registration success</h1>
<form action="success.php" method="post">
enter any number to continue
<input type="number" name="an">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
include "../../connect/dbconnect.php";
if($_SERVER['REQUESTED_METHOD'] = 'POST')
{
	if(isset($_POST['an']))
	{
				header("location:../../home.html");
	}
}
?>

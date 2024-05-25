<?php
include "../connect/dbconnect.php";

$query = "select * from `candidate`";
$ex = mysqli_query($con,$query);
if($ex)
{

	echo "<table border='1px'>";
	echo "<tr>";
	echo "<th>cid</th>";
	echo "<th>name</th>";
	echo "<th>party_name</th>";
	echo "<th>post</th>";
	echo "<th>votes</th>";
	echo "<th>age</th>";
	echo "<th>area</th>";
	echo "</tr>";
	while($data = mysqli_fetch_assoc($ex))
	{
		echo "<tr>";
		echo "<td>".$data['cid']."</td>";
		echo "<td>".$data['name']."</td>";
		echo "<td>".$data['party_name']."</td>";
		echo "<td>".$data['post']."</td>";
		echo "<td>".$data['votes']."</td>";
		echo "<td>".$data['age']."</td>";
		echo "<td>".$data['area']."</td>";
		echo "</tr>";
	}
	echo "</table>";
echo "<br>";
echo "<a href='home.php'>go to admin home page</a>";
}
else
{
	echo "<script>alert('no one registered for candidate')</script>";
}
?>

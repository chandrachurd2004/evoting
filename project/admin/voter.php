<?php
include "../connect/dbconnect.php";

$query = "select * from `voter`";
$ex = mysqli_query($con,$query);
if($ex)
{

	echo "<table border='1px'>";
	echo "<tr>";
	echo "<th>vid</th>";
	echo "<th>name</th>";
	echo "<th>status</th>";
	echo "<th>age</th>";
	echo "<th>area</th>";
	echo "</tr>";
	while($data = mysqli_fetch_assoc($ex))
	{
		echo "<tr>";
		echo "<td>".$data['vid']."</td>";
		echo "<td>".$data['name']."</td>";
		echo "<td>".$data['status']."</td>";
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
	echo "<script>alert('no one registered for votting')</script>";
}
?>

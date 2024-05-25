<?php
include "../../connect/dbconnect.php";

$query = "select * from `candidate`";
$ex = mysqli_query($con,$query);
if($ex)
{

	session_start();
	$vid = $_SESSION['vid'];
	echo "<table border='1px'>";
	echo "<tr>";
	echo "<th>cid</th>";
	echo "<th>name</th>";
	echo "<th>post</th>";
	echo "<th>area</th>";
	echo "<th>ops</th>";
	echo "</tr>";
	while($data = mysqli_fetch_assoc($ex))
	{
		echo "<tr>";
		echo "<td>".$data['cid']."</td>";
		echo "<td>".$data['name']."</td>";
		echo "<td>".$data['post']."</td>";
		echo "<td>".$data['area']."</td>";
		$cid = $data['cid'];
		echo '<td><button><a href="success.php?cid='.$cid.'">vote</a></button</td>';
		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "<script>alert('no one to vote')</script>";
}
?>

<?php
include "../connect/dbconnect.php";
$command = "select * from `admin` where `declare`=1";
$ex = mysqli_query($con,$command);
$nrow = mysqli_num_rows($ex);
if($nrow)
{
	$command1 = "select max(votes) from `candidate`";
	$ex1 = mysqli_query($con , $command1);
	$hvotes = mysqli_fetch_array($ex1);
$hvote=$hvotes[0];
	if($hvote)
	{
		$command2 = "select * from `candidate` where `votes`=$hvote";
		$ex2 = mysqli_query($con, $command2);
		echo "winner  <br>";
		while($data = mysqli_fetch_assoc($ex2))
		{
			$cid =$data['cid']; 
			$name =$data['name']; 
			$area =$data['area']; 
			echo "$cid is candidate identification number and name of the candidate $name from area $area <br> ";
		}
	}
	else
	{
		echo "no votes given to any candidate pls contact the admin";
	}
}
else
{
	echo "reslut not declared";
}
?>

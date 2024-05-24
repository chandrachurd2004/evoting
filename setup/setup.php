<?php
$server_name = "localhost";
$username = "root";
$password = "";


//use to connect the server
$con = mysqli_connect($server_name, $username, $password);

//command used to create database
$command1 = "create database project_voter";
$ex1 = mysqli_query($con,$command1);
if($ex1)
{
	echo "database created";
}
else
{
	echo "database not created";
}

echo "<br>";

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "project_voter";
//use to connect the server
$con = mysqli_connect($server_name, $username, $password,$db_name);

$command2 = "CREATE TABLE `candidate` (
		`cid` int(255) NOT NULL ,
		`name` varchar(100) NOT NULL,
		`party_name` varchar(100) NOT NULL,
		`post` varchar(50) NOT NULL,
		`votes` int(255) NOT NULL,
		`age` int(100) NOT NULL,
		`area` varchar(100) NOT NULL)";
$ex2 = mysqli_query($con,$command2);

$command3 = "ALTER TABLE `candidate` CHANGE `cid` `cid` INT(255) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`cid`) ";


$ex3 = mysqli_query($con,$command3);

if($ex3)
{
	echo "candidate table created";
}
else
{
	echo "fail to create candidate table";
}

echo "<br>";
$command4 = "CREATE TABLE `voter` (
		`vid` int(255) NOT NULL ,
		`name` varchar(100) NOT NULL,
		`password` varchar(255) NOT NULL,
		`status` int(255) NOT NULL,
		`age` int(100) NOT NULL)";

$ex4 = mysqli_query($con,$command4);


$command5 = "ALTER TABLE `voter` CHANGE `vid` `vid` INT(255) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`vid`) ";


$ex5 = mysqli_query($con,$command5);

if($ex5)
{
	echo "voter table created";
}
else
{
	echo "fail to create voter table";
}
echo "<br>";
$command6 = "CREATE TABLE `admin` (
		`admin_id` int(255) NOT NULL ,
		`name` varchar(100) NOT NULL,
		`password` varchar(255) NOT NULL,
		`declare` int(10) NOT NULL)";

$ex6 = mysqli_query($con,$command6);

if($ex6)
{
	echo "admin table created";
}
else
{
	echo "fail to create admin table";
}

echo "<br>";

$command7 = "insert into `admin` values (12 , 'rahul','rahul@12',0)";

$ex7 = mysqli_query($con,$command7);

$command8 = "insert into `admin` values (15 , 'raju','raju@15',0)";
$ex8 = mysqli_query($con,$command8);
if($ex7 && $ex8)
{
	echo "admin info added";
}
else
{
	echo "admin info not added";
}
echo "<br>";
if($ex1 && $ex2 && $ex3 && $ex4 && $ex5 && $ex6 && $ex7 && $ex8 )
{
echo "setup done successfull";
}
else
{
echo "setup not done successfull";
}

echo "<br>";
?>

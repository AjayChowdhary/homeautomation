<?php
$user="root";
$host="localhost";
$password="";
$db="lightdata";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con)
{
	die("error in connection",mysqli_connect_error);
}
else
{
	echo "<h3>success</h3>";
}



?>
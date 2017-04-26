<?php

require "init.php";

$name=$_POST[name];
$status=$_POST[status];
$location=$_POST[location];
$number=$_POST[number];

$sql="insert into values('$number','$location','$status','$name');";
if(mysqli_query($con,$sql))
{
	echo "<br><br> inserted";
}
else
{
	echo "Error".mysql_error($con);
}

?>
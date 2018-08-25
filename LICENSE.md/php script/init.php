<?php

$host = "localhost";
$user = "id3444340_giangtruong";
$password = "giangtruong@123";
$db = "id3444340_user_info";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con)
{
		die("error in connection ".mysqli_connect_error());
}	

else
{
	echo "<br><h3>Connection success ...</h3>";
}	


?>
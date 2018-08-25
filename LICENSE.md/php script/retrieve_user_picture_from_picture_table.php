<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "select user_picture from user_picture where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{
		$picture = $row["user_picture"];
		echo $picture.",";
	}
}
else
{
 echo "no picture is found....";
}



?>
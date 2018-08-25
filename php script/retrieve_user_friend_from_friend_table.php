<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "select user_friend from user_friend where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{
		$friend= $row["user_friend"];
		echo $friend.",";
	}
}
else
{
 echo "no friend is found....";
}



?>
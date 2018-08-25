<?php
require "init.php";

$sql_query = "select user_id from user_info;";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["user_id"];
		echo $id;
	}
}
else
{
 echo "no user is found....";
}



?>
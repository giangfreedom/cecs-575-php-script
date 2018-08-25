<?php
require "init.php";

$user_id = $_POST["user_id"];

$user_friendlist = $_POST["user_friendlist"];

$sql = "insert into user_friend values('$user_id','$user_friendlist');";

if(mysqli_query($con,$sql))
{
		echo "<br><h3>one friend inserted ...</h3>";
}	

else
{
	echo "error friend insertion ..." .mysqli_error($con);
}	


?>
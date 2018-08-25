<?php
require "init.php";

$user_id = $_POST["user_id"];

$user_picture = $_POST["user_picture"];

$sql = "insert into user_picture values('$user_id','$user_picture');";

if(mysqli_query($con,$sql))
{
		echo "<br><h3>one picture inserted ...</h3>";
}	

else
{
	echo "error picture insertion ..." .mysqli_error($con);
}	


?>
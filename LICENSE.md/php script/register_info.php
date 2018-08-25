<?php
require "init.php";

$user_id = $_POST["user_id"];
$user_pass = $_POST["user_pass"];
$user_contact = $_POST["user_contact"];
$user_friendlist = $_POST["user_friendlist"];
$user_picture = $_POST["user_picture"];

$sql = "insert into user_info values('$user_id','$user_pass','$user_contact','$user_friendlist','$user_picture');";

if(mysqli_query($con,$sql))
{
		echo "<br><h3>one row inserted ...</h3>";
}	

else
{
	echo "error insertion ..." .mysqli_error($con);
}	


?>
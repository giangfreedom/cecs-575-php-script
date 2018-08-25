<?php
require "init.php";

$user_id = $_POST["user_id"];
$user_pass = $_POST["user_pass"];


$sql_query = "update user_info set user_pass = '$user_pass' where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_affected_rows($con) <=0 )
{
 echo "<h3> password update failed </h3>";
}
else
{
 echo "password update success....";
}



?>
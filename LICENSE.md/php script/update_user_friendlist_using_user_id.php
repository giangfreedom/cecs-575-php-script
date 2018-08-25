<?php
require "init.php";

$user_id = $_POST["user_id"];

$user_friendlist = $_POST["user_friendlist"];


$sql_query = "update user_info set user_friendlist = '$user_friendlist' where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_affected_rows($con) <=0 )
{
 echo "<h3> friendlist update failed </h3>";
}
else
{
 echo "friendlist update success....";
}



?>
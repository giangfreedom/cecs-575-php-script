<?php
require "init.php";

$user_id = $_POST["user_id"];

$user_picture = $_POST["user_picture"];

$sql_query = "update user_info set user_picture = '$user_picture' where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_affected_rows($con) <=0 )
{
 echo "<h3> picture update failed </h3>";
}
else
{
 echo "picture update success....";
}



?>
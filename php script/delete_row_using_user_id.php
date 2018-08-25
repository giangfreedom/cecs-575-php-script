<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "delete from user_info where user_id = '$user_id';";
mysqli_query($con,$sql_query);

if(mysqli_affected_rows($con) <=0 )
{
 echo "<h3> delete nothing</h3>";
}
else
{
 echo "deleted something";
}



?>
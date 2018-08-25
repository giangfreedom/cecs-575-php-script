<?php
require "init.php";

$user_id = $_POST["user_id"];

$user_contact = $_POST["user_contact"];


$sql_query = "update user_info set user_contact = '$user_contact' where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_affected_rows($con) <=0 )
{
 echo "<h3> contact update failed </h3>";
}
else
{
 echo "contact update success....";
}



?>
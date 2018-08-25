<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "select user_pass from user_info where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
 $row = mysqli_fetch_assoc($result);
 $password = $row["user_pass"];
 echo $password;
}
else
{
 echo "no password is found....";
}



?>
<?php
require "init.php";

$user_id = $_POST["user_id"];
$user_pass = $_POST["user_pass"];

$sql_query = "select user_picture from user_info where user_id like '$user_id' and user_pass like '$user_pass';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
 $row = mysqli_fetch_assoc($result);
 $picture = $row["user_picture"];
 echo $picture;
}
else
{
 echo "no picture is available....";
}



?>
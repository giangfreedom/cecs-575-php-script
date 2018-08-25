<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "select user_friendlist from user_info where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
 $row = mysqli_fetch_assoc($result);
 $friendlist = $row["user_friendlist"];
 echo $friendlist;
}
else
{
 echo "no friendlist is found....";
}



?>
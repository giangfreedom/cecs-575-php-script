<?php
require "init.php";

$user_id = $_POST["user_id"];

$sql_query = "select user_contact from user_info where user_id like '$user_id';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result) >0 )
{
 $row = mysqli_fetch_assoc($result);
 $contact = $row["user_contact"];
 echo $contact;
}
else
{
 echo "no contact is found....";
}



?>
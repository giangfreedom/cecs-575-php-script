<?php

	require "init.php";

	if($con)
	{
	
		$title = $_POST['title'];
		$image = $_POST['image'];
	
		$upload_path = "uploads/$title.jpg";
		
		$sql = "insert into imageinfo(title,path) values('$title','$upload_path');";
		
		if(mysqli_query($con,$sql))
		{
			file_put_contents($upload_path,base64_decode($image));
			echo json_encode(array('response'=>"image uploaded successfully...."));
		
		}
		else
		{
			echo json_encode(array('response'=>"image uploaded fail...."));
		}
		
		mysqli_close($con);
	}






?>
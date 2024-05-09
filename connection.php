<?php

	$host='Localhost';
	$username="root";
	$pass="";
	$dbname="marc_2021";
	
	$con=mysqli_connect($host,$username,$pass,$dbname);
	if($con!=null)
	{
	}
	else
	{
		echo "Connection Fail";
	}

?>
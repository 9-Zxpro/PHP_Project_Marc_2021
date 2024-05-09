<?php

	session_start();
	include 'connection.php';
	
	$role=$_POST['role'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	if($role==1)
	{
		
		$query="select * from tbl_admin where email='$email' and password='$password'";
		$res=mysqli_query($con,$query);
		//print_r($res);
		$row=mysqli_fetch_array($res);
		
		if($row!=null)
		{
			//echo "login done";
			$_SESSION['adid']=$row['adm_id'];
			header("location:Admin/index.php");
		}
		else
		{
			//echo "Admin Email OR password is wrong";
			header("location:index.php?msg=Admin Email OR Password is wrong");
		}
		
	}
	else if($role==2)
	{
		
		$query="select * from tbl_employee where email='$email' and password='$password'";
		$res=mysqli_query($con,$query);
		$row=mysqli_fetch_array($res);
		
		if($row!=null)
		{
			$_SESSION['emp']=$row['emp_id'];
			//echo "login done";
			header("location:Employee/index.php");
		}
		else
		{
			header('location:index.php?msg=Login Credential Wrong');
		}
	}
?>
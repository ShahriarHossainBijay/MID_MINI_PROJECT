<?php
	include 'DB.php';
	
	$err_uid="";
	$uid="";
	$err_name="";
	$name="";
	$err_password="";
	$password="";
	$err_utype="";
	$utype="";
	$has_err=false;
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['uid']))
		{
			$err_uid="*user id required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z 0-9]*$/', $_POST['uid']))
		{
			$err_uid="Invalid input";
			$has_err=true;
		}
		else
		{
			$uid=htmlspecialchars($_POST['uid']);
		}
		if(empty($_POST['name']))
		{
			$err_name="*user name required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z ]*$/', $_POST['name']))
		{
			$err_name="Invalid input";
			$has_err=true;
		}
		else
		{
			$name=htmlspecialchars($_POST['name']);
		}
		if(empty($_POST['password']))
		{
			$err_password="*password required";
			$has_err=true;
		}
		elseif(strlen($_POST['password'])<4)
		{
			$err_paswords="password minimum 4 digit";
			$has_err=true;
		}
		else
		{
			$password=htmlspecialchars($_POST['password']);
			
		}
		if(empty($_POST['utype']))
		{
			$err_utype="*select utype";
			$has_err=true;
		}
		else
		{
			$utype=htmlspecialchars($_POST['utype']);
		}
		if (!$has_err) 
		{

				inserttempregistration();
				
		}
	}
	
function inserttempregistration()
{
	global $uid;
	global $name;
	global $password;
	global $utype;
	
	
	$dquery="INSERT INTO `registration`(`id`, `uid`, `name`, `password`, `utype`) VALUES (`NULL`, `$uid`, `$name`, `$password`, `$utype`)";
	
	

	execute($dquery); 
	
}
?>
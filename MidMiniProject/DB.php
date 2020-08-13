<?php
	$servername="localhost";
	$username="root";
	$password="EN6mu3sykpZbhqfw";
	$databasename="miniproject";

	
	function execute ($query)
	{
			global $servername;
			global $username;
			global $password;
			global $databasename;
			$conn=mysqli_connect($servername,$username,$password,$databasename);
			$result=mysqli_query($conn,$query);
			return $result;
	}
	
	function getdata ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$data=array(); 
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($rows=mysqli_fetch_assoc($result)) {
				$entity=array();
				foreach ($rows as $key => $value) {
					$entity[$key]=$rows[$key];
				}
				$data[]=$entity;
			}
		}
		mysqli_close($conn);
		return $data;
	}
	
?>
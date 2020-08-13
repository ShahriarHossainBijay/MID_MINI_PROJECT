<?php 
	include 'DB.php';
	
	$name="";
	$password="";
	if (isset($_POST['login'])) {
		$name = $_POST['name'];
		$password = $_POST['password'];
		
		if (empty($name) || empty($password)) {
		  $mess = "Fill the blanks";

		}else{
			$sql ="SELECT * FROM registration WHERE name = '$name'";
			$dbdata = getdata($sql);

			if (count($dbdata)) {
				foreach ($dbdata as $key => $value){
					$dbpass = $value['password'];
					$name = $value['name'];
					if ($password == $dbpassword) {
						
						header("location:Home.php");

					}else{
						$mess = "Password Incorrect";
					}
				}
			}
			else{
				$mess = "User doesn't exists";
			}
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
	
    <legend><b>LOGIN</b></legend>
	<form method="post">
		<br/>
   
      </table>
		<table width="" cellpadding="" cellspacing="">
				
			
			<tr>
				<td>User Name:</td>
				
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			
			<tr>
				<td>Password:</td>
				
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		

			
		</table>
		 <tr>
          <td align="right"><a href="Registration.php">Register</a></td>
    	</tr>
		<input type="submit" name="login" value="Login">
		
	</form>

</body>
</html>
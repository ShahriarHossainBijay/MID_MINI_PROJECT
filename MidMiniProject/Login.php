<?php 
	include 'DB.php';
	session_start();
	$uname="";
	$pass="";
	if (isset($_POST['login'])) {
		$uname = $_POST['name'];
		$pass = $_POST['pass'];
		
		if (empty($name) || empty($password)) {
		  $mess = "Fill the blanks";

		}else{
			$sql ="SELECT * FROM registration WHERE uname = '$name'";
			$dbdata = getdata($sql);

			if (count($dbdata)) {
				foreach ($dbdata as $key => $value){
					$dbpass = $value['password'];
					$name = $value['name'];
					if ($pass == $dbpass) {
						$_SESSION['name'] = $name;
						$_SESSION['name'] = $name;
						$_SESSION['last_time']=time();
						header("location:Registration.php");

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
	<fieldset>
    <legend><b>LOGIN</b></legend>
	<form method="post">
		<br/>
		      <table width="50%" border="1"cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" align="Left">
            <h1></h1>
          </td>
         
          <td align="right"><a href="DoctorRegistration.php">Registration</a></td>
        </tr>
      </table>
		<table width="50%" cellpadding="5" cellspacing="5">
			<h2 style="color:red"><?php if (isset($mess)) {
				 echo $mess;
			} ?></h2>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		

			
		</table>
		<hr/>
		<input type="submit" name="login" value="Login">
		
	</form>
</fieldset>
</body>
</html>
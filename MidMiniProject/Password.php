<?php 
	include 'Home.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change Password</title>
</head>
<body>
		<h2>Change Password</h2>
		<table width="" cellpadding="" cellspacing="">
				
			
			<tr>
				<td>Current Password:</td>
				
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			
			<tr>
				<td>New Password:</td>
				
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		

			<tr>
				<td>Confirm Password:</td>
				
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>
		</table>
		 <tr>
          <td align="right"><a href="Home.php">Home</a></td>
    	</tr>
		<input type="submit" name="change" value="Change">
		
	</form>

</body>
</html>
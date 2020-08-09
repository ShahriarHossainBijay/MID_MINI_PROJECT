<?php

?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>SIGNUP</legend>
        
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="Id"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Password Confirm</td>
                <td><input type="confirmpass" name="confirmpass"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="register" name="register" value="register"></td>
            </tr>
        </table>
        <button name="home"class="button"onclick="window.location='Login.php'">Login</button>
        <button name="submit"class="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
<?php 
    include 'Control.php';
 
?>
<html>
    <head>
        <title>Registration Form</title>
        
        
    </head>
    <body>
    
            <h4>Registration</h4><hr><br>
            <form method="post" action=""id="dregister">
                <table>
                    <tr>
                        <td>
                            <label>User Id</label><br><br>
                        </td>
                        <td>
                            <input type="text" name="uid"id="field">
                            <label class="errmgs"><?php echo $err_uid ?></label>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>User Name</label><br><br>
                        </td>
                        <td>
                            <input type="text" name="name"id="field">
                            <label class="errmgs"><?php echo $err_name?></label>
                            <br><br>
                        </td>
                    </tr>       
                    <tr>
                        <td>
                            <label>Password</label><br><br>
                        </td>
                        <td>
                            <input type="password" name="password"id="field">
                            <label class="errmgs"><?php echo $err_password?></label>
                            <br><br>
                        </td>
                    </tr>       
                    <tr>
                        <td>
                            <label>User Type</label><br><br>
                        </td>
                        <td>
                           <select name="utype"id="field">
                                <option value="">Select</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                            <label class="errmgs"><?php echo $err_utype?></label>
                            <br><br>
                        </td>
                    </tr>       
                   
                </table>
                <tr>
                    <td align="right"><a href="Login.php">Login</a></td>
                 </tr>
                <button name="submit"class="submit">Register</button>
                
            </form> 
        </div>
       
    </body>
</html>
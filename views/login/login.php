<html>
    <head><title><h1>Login Page<h1></title></head>
                    <body>
                        <div class="first">
                            <h1 class="title">Login Page<h1>
                                    <form method="" action="">
                                        <fieldset>
                                            <table>
                                                <tr>
                                                    <td>Username:</td><br />
                                                <td><input type ="text" name="username" placeholder="John" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Password:</td><br />
                                                <td><input type="password" name="pwd" value="password" required></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Type:
                                                    </td> 
                                                    <td>
                                                        <select>
                                                            <option>Admin</option>
                                                            <option>User</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type ="submit" name="login" value="Log-in" required> 
                                                        <a href="<?php echo URL; ?>user/newUser">Create Account</a>    
                                                        
                                                    </td>
                                                    </tr>
                                            </table>                                        
                                    </fieldset>
                                    </form>
                                    </body>
                                    </html>
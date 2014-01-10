<?php ?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" media="screen" href="/training2/views/css/style.css" />
    <head>
        <title>Register Page</title>
    </head>
    <body>
        
       
        <form method="POST" action="" >
            <fieldset>
                <table >
                    <tr>
                        <td>
                            Username:
                        </td> 
                        <td>
                            <input type="text" name="username"  required>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                           Password:
                        </td> 
                        <td>
                            <input type="password" value="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            First Name:
                        </td> 
                        <td>
                            <input type="text" name="fname"  required>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Last Name:
                        </td> 
                        <td>
                            <input type="text" name="lname"  required>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            Phone:
                        </td> 
                        <td>
                            <input type="text" name="phone"  required>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Address:
                        </td> 
                        <td>
                            <input type="text" name="address"  required>
                        </td>
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
                            <input type="submit" name="add" value="SAVE">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>

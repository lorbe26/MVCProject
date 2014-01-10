<html>
    <head><title></title></head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Type</th>                
                </tr>
                <?php
                   foreach ($userList->resultarray() as $user){
                      echo ("<tr>\n<td>".$user['id']."</td>\n");
                      echo ("<tr>\n<td>".$user['username']."</td>\n");
                      echo ("<tr>\n<td>".$user['first_name']."</td>\n");
                      echo ("<tr>\n<td>".$user['last_name']."</td>\n");
                      echo ("<tr>\n<td>".$user['phone_number']."</td>\n");
                      echo ("<tr>\n<td>".$user['address']."</td>\n");
                      echo ("<tr>\n<td>".$user['type']."</td>\n");
                   }
                ?>
            </table> 
        </body>
    </html>
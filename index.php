<?php

    //including the database connection file
    include_once("dbConnection/mysqlconfig_connection.php");
    // including the fetch file
    include_once("function/fetch.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sample CRUD</title>
    </head>
    <body>

        <h1> My Subjects</h1>
        <a href="forms/adforms.php">Add Subject</a><br/><br/>
        
        <table width ='1000%' border=1>
            <tr> bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>
            </tr>
            <?php
                while($res =mysqli_fetch_array($result)){

                    echo "<tr>";
                    echo "<td>".$res['Subject_id']. "</td>";
                    echo "<td>".$res['Subject_code']. "</td>";
                    echo "<td>".$res['Subject_name']. "</td>";
                    echo "<td><a href=\"forms\editform.php?id=$res[subject_id]\">Edit></a> 
                            <a href=\"functions/delete.php?id=$res[subject_id]\"
                            onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

                }
            
            ?>
        </table>
    </body>
</html>

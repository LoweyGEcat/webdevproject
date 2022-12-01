<?php
    include_once("dbconnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php">Add Subject</a><br/><br/>
        <table width='100%' border=1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Syllabus ID</td>
                <td>Syllabus Code</td>
                <td>Syllabus Author</td>
                <td>Action</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['Subject_id']."</td>";
                    echo "<td>".$res['Subject_code']."</td>";
                    echo "<td>".$res['Subject_name']."</td>";
                    echo "<td>".$res['Syllabus_id']."</td>";
                    echo "<td>".$res['Syllabus_code']."</td>";
                    echo "<td>".$res['Syllabus_author']."</td>";
                    echo "<td><a href=\"forms/editform.php?id=$res[Subject_id]\">Edit</a> |
                            <a href=\"functions/delete.php?id=$res[Subject_id]\" 
                            onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
            ?>
        </table>
        </form>
    </body>
</html>
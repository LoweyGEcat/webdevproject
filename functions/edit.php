<?php

    // including the database connection file
    include_once("../dbconnection/mysqlconfig_connection.php");
    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];

        //checking empty fields
        if(empty($code) || empty($name)) {

            if(empty($code)){
                echo"<font color='red'>Subject Code field is empty.</font><br/>";

            }

            if(empty($name)){
                echo"<font color='red'>Subject Name field is empty.</font><br/>";
                
            }
        }
        else{

            // updating the table
            mysqli_query($dbc, "UPDATE tblsubjects SET Subject_code='$code', Subject_name='$name' WHERE Subject_id='$id'");
            // redirecting to the display page. In our, it is index.php

            header("location: ../index.php");
        }

    }
?>
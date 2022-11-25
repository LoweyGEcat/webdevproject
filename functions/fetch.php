<?php

    // fetching data
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.Subject_id=tblsubjects.Subject_id";
    $result = mysqli_query($dbc, $query); // using mysqli_query

?>
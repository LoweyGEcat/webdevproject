<?php
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.Subject_id = tblsubjects.Subject_id";
    $result = mysqli_query($dbc, $query);
?>
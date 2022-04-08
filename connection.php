<?php
    $con = new mysqli("localhost", "mysql", "", "maze", 3306);
    if ($con->connect_errno)
    {
        die ($con->connect_error);
    }
?>
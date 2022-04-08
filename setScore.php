<?php
    require("connection.php");
    $name = $_POST["name"];
    $time = $_POST["time"];

    $sql = "SELECT * FROM users WHERE name = " . "'" . $name . "'";
    $res = $con->query($sql);
    if ($res->num_rows)
    {
        // Already created
        $sql = "UPDATE users SET time = " . $time . " WHERE name = '" . $name . "'";
        $res = $con->query($sql);
        if ($res)
        {
            echo "Updated";
        }
    }
    else
    {
        // Create new
        $sql = "INSERT INTO users (name, time) VALUES (" . "'" . $name . "', " . $time . ")";
        $res = $con->query($sql);
        if ($res)
        {
            echo "Created new";
        }
    }
?>
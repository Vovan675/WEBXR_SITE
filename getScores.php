<?php
    require("connection.php");

    $sql = "SELECT * FROM users ORDER BY time ASC LIMIT 10";
    $res = $con->query($sql);
    if ($res->num_rows)
    {
        echo '
        <table class="table">
        <thead>
        <tr>
            <th>Место</th>
            <th>Имя игрока</th>
            <th>Время</th>
        </tr>
        </thead>
        <tbody>
        ';

        $place = 1;
        while ($row = $res->fetch_assoc())
        {
            echo '
            <tr>
            <td>' . $place . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['time'] . '</td>
            </tr>
            ';

            $place++;
        }

        echo '
        </tbody>
        </table>
        ';
    }
?>
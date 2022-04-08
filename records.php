<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="records.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet">
    <title>X-Cola</title>
</head>
<body>
    <div class="header">
        <div class="header-logo">
            <img src="/img/Лого.png" alt="Logo">
        </div>
        <div class="header-text">
            Таблица рекордов по питью баночки X-Cola!
        </div>
    </div>
        <?php
            require("getScores.php");
        ?>
    </div>
    <form action="/index.html">
        <button type="submit">
            <img class="back" src="img/Назад.png" height ="80" width="80"/>
        </button>
    </form>


    
    <div class="animation-area">
        <ul class="circle-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>
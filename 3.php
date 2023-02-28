<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="3.php" method="GET">
        <input type="date" name="date">
        <input type="submit" name="send">
    </form>
    <?php

        $date = $_GET["date"];
        $days = [
            'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
            'Четверг', 'Пятница', 'Суббота'
        ];
        print_r($days[ date("w", strtotime($date))]);

    ?>
</body>
</html>
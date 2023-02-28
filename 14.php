<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="GET" action="14.php">
        <label>
            <select name="selDay" required>
                <?php
                $option = 1;
                while ($option <= 31) {
                    echo "<option value=" . $option . ">" . $option . "</option>";
                    $option++;
                }
                ?>
            </select>
            <select name="selMonth" required>
                <?php
                $months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
                foreach ($months as $key => $value) {
                    echo "<option value=" . $key + 1 . ">" . $value . "</option>";
                }
                ?>
            </select>
            <select name="selYear" required>
                <?php
                $option = 1990;
                while ($option <= 2025) {
                    echo "<option value=" . $option . ">" . $option . "</option>";
                    $option++;
                }
                ?>
            </select>
        </label>
        <input type="submit">
    </form>
    <?php

    $date = $_GET["selDay"] . "-" . $_GET["selMonth"] . "-" . $_GET["selYear"];
    $days = [
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    ];
    print_r($days[ date("w", strtotime($date))]);

    ?>
</body>
</html>
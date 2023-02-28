<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="6.php" method="GET">
        <input type="date" name="date">
        <input type="submit" name="send">
    </form>
    <?php

        $month = (int) date("n", strtotime($_GET["date"]));
        $day = (int) date("j", strtotime($_GET["date"]));
        
        if (($month == 3 && ($day >= 21 && $day <= 31)) || ($month == 4 && ($day > 0 && $day <= 20)))
        {
            if ($month == 3)
            {
                echo "Овен";
            }
            else if ($month == 4)
            {
                echo "Овен";
            }
        }
        else if (($month == 4 && ($day >= 21 && $day <= 30)) || ($month == 5 && ($day > 0 && $day <= 20)))
        {
            if ($month == 4)
            {
                echo "Телец";
            }
            else if ($month == 5)
            {
                echo "Телец";
            }
        }
        else if (($month == 5 && ($day >= 21 && $day <= 31)) || ($month == 6 && ($day > 0 && $day <= 20)))
        {
            if ($month == 5)
            {
                echo "Близнецы";
            }
            else if ($month == 6)
            {
                echo "Близнецы";
            }
        }
        else if (($month == 6 && ($day >= 21 && $day <= 30)) || ($month == 7 && ($day > 0 && $day <= 22)))
        {
            if ($month == 6)
            {
                echo "Рак";
            }
            else if ($month == 7)
            {
                echo "Рак";
            }
        }
        else if (($month == 7 && ($day >= 23 && $day <= 31)) || ($month == 8 && ($day > 0 && $day <= 22)))
        {
            if ($month == 7)
            {
                echo "Лев";
            }
            else if ($month == 8)
            {
                echo "Лев";
            }
        }
        else if (($month == 8 && ($day >= 23 && $day <= 31)) || ($month == 9 && ($day > 0 && $day <= 22)))
        {
            if ($month == 8)
            {
                echo "Дева";
            }
            else if ($month == 9)
            {
                echo "Дева";
            }
        }
        else if (($month == 9 && ($day >= 23 && $day <= 30)) || ($month == 10 && ($day > 0 && $day <= 22)))
        {
            if ($month == 9)
            {
                echo "Весы";
            }
            else if ($month == 10)
            {
                echo "Весы";
            }
        }
        else if (($month == 10 && ($day >= 23 && $day <= 31)) || ($month == 11 && ($day > 0 && $day <= 21)))
        {
            if ($month == 10)
            {
                echo "Скорпион";
            }
            else if ($month == 11)
            {
                echo "Скорпион";
            }
        }
        else if (($month == 11 && ($day >= 22 && $day <= 30)) || ($month == 12 && ($day > 0 && $day <= 21)))
        {
            if ($month == 11)
            {
                echo "Стрелец";
            }
            else if ($month == 12)
            {
                echo "Стрелец";
            }
        }
        else if (($month == 12 && ($day >= 22 && $day <= 28)) || ($month == 1 && ($day > 0 && $day <= 19)))
        {
            if ($month == 12)
            {
                echo "Козерог";
            }
            else if ($month == 1)
            {
                echo "Козерог";
            }
        }
        else if (($month == 1 && ($day >= 20 && $day <= 31)) || ($month == 2 && ($day > 0 && $day <= 18)))
        {
            if ($month == 1)
            {
                echo "Водолей";
            }
            else if ($month == 2)
            {
                echo "Водолей";
            }
        }
        else if (($month == 2 && ($day >= 19 && $day <= 28)) || ($month == 3 && ($day > 0 && $day <= 20)))
        {
            if ($month == 2)
            {
                echo "Рыбы";
            }
            else if ($month == 3)
            {
                echo "Рыбы";
            }
        }

    ?>
</body>
</html>
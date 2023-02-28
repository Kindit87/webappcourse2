<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
             $currentYear = date('Y');

             $newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);
             $seconds = $newYear - time();
             
             $days = 0;
             $oneMinute = 60;
             $oneHour = 60 * $oneMinute;
             $oneDay = $oneHour * 24;
             
             if ($seconds / $oneDay > 0) {
                $days = (int)($seconds / (60 * 60 * 24));
             }
             
             echo ("До Нового года осталось: " . $days . " дней.");  
        ?>
    </p>
</body>
</html>
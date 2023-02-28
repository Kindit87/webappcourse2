<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="2.php" method="GET">
        <input type="number" name="year">
        <input type="submit" name="send" value="Определить">
    </form>
    <p>
        <?php
            $year = $_GET["year"];
            if ($year % 4 == 0) { 
                if ($year % 100 != 0) {
                    echo "Висакосный";
                } 
                else {
                    if ($year % 400 == 0) {
                        echo "Висакосный";
                    }
                    else {
                        echo "Не висакосный";
                    }
                }
            }
            else { echo "Не висакосный"; }
        ?>
    </p>
</body>
</html>
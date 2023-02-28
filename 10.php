<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="10.php" method="GET">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="send">
    </form>
    <?php

        $text = $_GET["text"];
        
        foreach (count_chars($text, 1) as $i => $val) {
            echo "<p>Процентное содеражание символа: \"" . chr($i) . "\" = " . 100 * $val / mb_strlen($text, 'utf-8') . "%</p>";
        }

    ?>
</body>
</html>
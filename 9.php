<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="9.php" method="GET">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="send">
    </form>
    <?php

        $text = $_GET["text"];
        echo "<p>Количество слов в тексте: " . count(explode(' ', $text)) . "</p>";
        echo "<p>Количество символов в тексте: " . mb_strlen($text, 'utf-8');
        echo "<p>Количество символов за вычетом пробелов: " . mb_strlen(str_replace(array(" "), '', $text), 'utf-8') . "</p>";

    ?>
</body>
</html>
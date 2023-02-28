<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="13_form.php" method="GET">
        <?php
            $questions = [
                "Вопрос_1" => ["Вариант ответа 1" => true, "Вариант ответа 2" => false],
                "Вопрос_2" => ["Вариант ответа 1" => false, "Вариант ответа 2" => true],
                "Вопрос_3" => ["Вариант ответа 1" => true, "Вариант ответа 2" => false, "Вариант ответа 3" => false],
                "Вопрос_4" => ["Вариант ответа 1" => false, "Вариант ответа 2" => true, "Вариант ответа 3" => false],
                "Вопрос_5" => ["Вариант ответа 1" => false, "Вариант ответа 2" => false, "Вариант ответа 3" => false, "Вариант ответа 4" => true]
            ];
            foreach ($questions as $key => $value) {
                echo "<h2>" . $key . "</h2>";
                foreach ($value as $k => $val) {
                    echo "<input type=\"radio\" name=" . $key . " value=" . $val . ">" . $k . "<br>";
                }
            }
        ?>
        <input type="submit">
    </form>
</body>
</html>
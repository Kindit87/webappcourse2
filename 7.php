<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form name="back" action="7.php" method="GET">
        <input type="date" name="date">
        <input type="submit" name="send">
    </form> -->
    <?php
    $date = date("m.j");
    // $date = $_GET["date"];
    $holidays = [
        "31.12" => "С Новым Годом!", 
        "7.01" => "С рождеством!",
        "25.01" => "С днем Татьяны",
        "14.02" => "С днем святого Валентина!",
        "23.02" => "С днем защитника отечества!",
        "28.02" => "С Масленницей!",
        "8.03" => "С 8-ым марта!", 
        "16.04" => "С пасхой!",
        "1.05" => "С днем весны и труда!",
        "9.05" => "С днем победы!",
        date("j.m") => "Сегодня нет праздников"
    ];
    // echo $holidays[date("j.m", strtotime($date))];
    echo $holidays[date("j.m")];
    ?>
</body>
</html>
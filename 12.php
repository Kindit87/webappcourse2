<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="back" action="12.php" method="GET">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="radio" name="translite" value="not_translite">Из транслита
        <input type="radio" name="translite" value="translite">В транслит
        <input type="submit">
    </form>
    <?php

        $text = $_GET["text"];
        $value = $_GET["translite"];
        function translite($text) {
            return strtr(trim($text), array(
                "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
                "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
                "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
                "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
                "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
                "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"''","Ы"=>"YI","Ь"=>"",
                "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
                "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
                "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
                "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
                "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
                "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
                "ы"=>"yi","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya", 
                
                "A"=>"А","B"=>"Б","V"=>"В","G"=>"Г",
                "D"=>"Д","E"=>"E","J"=>"Ж","Z"=>"З","I"=>"И",
                "Y"=>"Й","K"=>"К","L"=>"Л","M"=>"М","N"=>"Н",
                "O"=>"О","P"=>"П","R"=>"Р","S"=>"С","T"=>"Т",
                "U"=>"У","F"=>"Ф","H"=>"Х","TS"=>"Ц","CH"=>"Ч",
                "SH"=>"Ш","SCH"=>"Щ","YI"=>"Ы",
                "E"=>"Э","YU"=>"Ю","YA"=>"Я","a"=>"а","b"=>"б",
                "v"=>"в","g"=>"г","d"=>"д","e"=>"е","j"=>"ж",
                "z"=>"з","i"=>"и","y"=>"й","k"=>"к","l"=>"л",
                "m"=>"м","n"=>"н","o"=>"о","p"=>"п","r"=>"к",
                "s"=>"с","t"=>"т","u"=>"у","f"=>"ф","h"=>"х",
                "ts"=>"ц","ch"=>"ч","sh"=>"ш","sch"=>"щ","y"=>"ъ",
                "yi"=>"ю","'"=>"'","e"=>"э","yu"=>"ю","ya"=>"я"
                ));
        }
        if ($value == "not_translite") {
            $text = translite($text);
        }
        else if($value == "translite") {
            $text = translite($text);
        }
        echo $text;
    ?>
</body>
</html>
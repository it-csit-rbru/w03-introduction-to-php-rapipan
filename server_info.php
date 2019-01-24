<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SERVER["HTTP_USE_AGENT"]."<br>";
        echo $_SERVER["HTTP_HOST"]."<br>";
        echo $_SERVER["SERVER_ADDR"]."<br>";
        echo $_SERVER["SCRIPT_FILENAME"]."<br>";
        echo $_SERVER["SERVER_PROTOCOL"]."<br>";
        echo $_SERVER["REQUEST_METHOD"]."<br>";
        echo $_SERVER["QUERY_STRING"]."<br>";
        echo $_SERVER["HTTP_REFERER"]."<br>";

    ?>
</body>
</html>

localhost/php-6015261016-w03/server_info.php
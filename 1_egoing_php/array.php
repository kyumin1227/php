<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array("egoing", "leezche", "duru", "taeho");
    echo $coworkers[1]."<br>";
    var_dump(count($coworkers));
    array_push($coworkers, "graphittie");
    var_dump($coworkers);
    ?>
</body>
</html>

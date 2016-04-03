<?php
    $array = require_once '../list.php';
    $element = $array[array_rand($array)];
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zmotywuj się!</title>

        <link href='https://fonts.googleapis.com/css?family=Roboto:600,500,400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,500,400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <div id="bg"></div>
        <div id="main">
            <div class="line"></div>
            <h1><?php echo $element[0]; ?></h1>
            <div class="line"></div>
            <div id="author"><?php echo $element[1]; ?></div>
        </div>
        <footer>
            Autorem zdjęcia jest <a href="https://www.flickr.com/photos/75487768@N04/21479293212">barnyz</a>.
            | W bazie jest <?php echo count($array); ?> cytatów. <a href="mailto:szym1991@gmail.com">Kontakt</a>
        </footer>
    </body>
</html>
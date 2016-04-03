<?php
    $array = require_once '../list.php';
    $element = $array[array_rand($array)];
//    $element = end($array);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zmotywuj się!</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,500,400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/style.css">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-75874290-1', 'auto');
            ga('send', 'pageview');
        </script>
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
            Autorem zdjęcia jest <a href="https://www.flickr.com/photos/q120/9692831755">Marie Sahlén</a>.
            | Mamy <?php echo count($array); ?> cytatów. <a href="mailto:szym1991@gmail.com">Kontakt</a>
        </footer>
    </body>
</html>
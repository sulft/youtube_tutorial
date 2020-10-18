<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>GLOBALS</title>
    </head>

    <body>
        <h1>GLOBALS</h1>
        <?php
            $x = 100;
            $y = 200;

            function add() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                $GLOBALS['x'] = 500;
            }

            add();
            echo $z;
            echo "<br>";
            echo $x;

        ?> 
    </body>
<html>
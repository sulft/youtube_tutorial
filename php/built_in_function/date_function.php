<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>date function</title>
    </head>

    <body>
        <h1>Date function</h1>
        <?php
            date_default_timezone_set("America/Regina"); /* attribut le fuseau horraire des Etats unis */
            echo date('d/m/y');
            echo "<br>";
            echo date('l d F Y');
            echo "<br>";
            echo date('g:iA');
        ?> 
    </body>
<html>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>$_SESSION</title>
    </head>

    <body>
        <h1>$_SESSION</h1>
            

        <?php
            session_start();

            //stockage des infos
            $_session['name'] = "Terry";
            $_session['age'] = "22";

            echo "Hello " . $_session['name'];

            session_destroy(); //La session sera détruit lorsque je fermerai ma page internet

            echo "Hello " . $_session['name'];

        ?> 

    </body>
<html>
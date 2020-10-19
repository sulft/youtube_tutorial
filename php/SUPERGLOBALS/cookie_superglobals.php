<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>$_COOKIE</title>
    </head>

    <body>
        <h1>$_COOKIE</h1>
            

        <?php
            /*name (nom du cookie)
            value (valeur du cookie)
            expire,(durée de vie, pendant laquelle le cookie est actif) 
            path,(endroit ou le cookie est disponible) 
            domain (spécifie le domain ou le cookie est disponible) 
            security (le cookie doit être envoyé dans un https connection) */
            $time = time() + 86400*300;
            setcookie('name','terry',$time);

            print_r($_COOKIE);

            echo $_COOKIE['name'];
            
        ?> 

    </body>
<html>
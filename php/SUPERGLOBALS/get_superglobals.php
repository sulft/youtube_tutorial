<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>$_GET</title>
    </head>

    <body>
        <h1>$_GET</h1>

        <form action = "get_superglobals.php" method = "get">
            <label for = "name">Prénom :
                <input type = "text" name = "name" id = "name" required>
            </label>

            <br><br>

            <label for = "password"> password :
                <input type = "password" name = "password" id = "password" required>
            </label>

            <br><br>


            <button type = "submit"> Valider </button>

            <?php
            //$_GET
            //récupère les données du html form qui vont être visible sur le url de la page internet.


        ?> 
        </form>
    </body>
<html>



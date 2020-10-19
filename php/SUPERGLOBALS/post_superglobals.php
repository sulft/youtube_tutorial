<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>$_POST</title>
    </head>

    <body>
        <h1>$_POST</h1>

        <form action = "post_superglobals.php" method = "post">
            <label for = "name">Prénom :
                <input type = "text" name = "name" id = "name" required>
            </label>

            <br><br>

            <label for = "age1"> Age :
                <input type = "text" name = "age1" id = "age1" required>
            </label>

            <br><br>


            <button type = "submit"> Valider </button>

            <?php

            error_reporting(E_ERROR | E_PARSE);

            //$_POST
            //récupère les données du html form qui vont rester invisible sur le url de la page internet.

            echo "<br><br>";
                
            if(isset($_POST)) {
                echo "Bonjour " . $_POST['name'] . " !"; //récupère en argument l'attribut de valeur name dans le form ayant pour method: "post"
                echo " Vous avez " . $_POST['age1'] . " ans !"; //récupère en argument l'attribut de valeur age1 dans le form ayant pour method: "post"
                echo "<br>";
                print_r($_POST); //C'est en faite un tableau ! 

            }

        ?> 
        </form>
    </body>
<html>
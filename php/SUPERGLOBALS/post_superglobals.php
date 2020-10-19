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
                <input type = "text" name = "name" required>
            </label>

            <br><br>

            <label for = "age"> Age :
                <input type = "text" name = "age" required>
            </label>

            <br><br>


            <button type = "submit"> Valider </button>

            <?php
            //$_POST
            //récupère les données du html form qui vont rester invisible sur le url de la page internet.

            echo "<br><br>";
                
            if(isset($_POST)) {
                echo "Bonjour " . $_POST['name'] . " !";
                echo " Vous avez " . $_POST['age'] . " ans !";
                echo "<br>";
                print_r($_POST); //C'est en faite un tableau ! 

            }

        ?> 
        </form>
    </body>
<html>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>

    <body>

        <?php
            $cars = array ( "Audi" => 50400, "Peugeot" => 32000, "BMW" => 25000);

            foreach ( $cars as $attribut => $valeur) {
                echo "la voiture de marque $attribut possède $valeur kilomètres à son compteur. <br>";
            }
        ?>
    </body>
</html>
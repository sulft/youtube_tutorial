<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>

    <body>

        <?php
            //multidimensional array
            $cars = array(
                "expensive" => array("Audi","Mercedes","BMW"), 
                "inexpensive" => array("Volvo","Ford","Toyota")
            );
            //expensive car
            foreach($cars["expensive"] as $attribut => $valeur) {
                echo "Expensive car : $valeur <br>";
            }
            //inexpensive car 
            foreach($cars["inexpensive"] as $attribut => $valeur) {
                echo "Inexpensive car : $valeur <br>";
            }
        ?>
    </body>
</html>
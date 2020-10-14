<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>

    <body>

        <?php
            $nom = "Vilver";
            $prenom = "Terry";

            function ma_fonction ($nom, $prenom) {
                echo "Hello $prenom $nom are you all right ?<br><br>";
            }

            ma_fonction($nom, $prenom);
            
            function ma_fonction2 ($nom, $prenom) {
                return $nom;
            }; 
            
            $person = ma_fonction2 ($nom, $prenom);
            echo $person;
        ?>
    </body>
</html>
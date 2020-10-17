<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice function</title>
    </head>

    <body>
        <h1>Exercice</h1>
        <?php
            echo "Exercice 1 : Sorting array. <br><br>";

            $NUMBERS = array(rand(0,20),rand(0,20),rand(0,20),rand(0,20));
            
            arsort($NUMBERS,SORT_REGULAR);

            foreach($NUMBERS as $value) {
                echo $value . " ";
            }

            echo "<br><br>";

            echo "Exercice 2 : Birthday countdown. <br><br>";
            date_default_timezone_set("Europe/Paris");

            $todayDate = time();
            $birthday = mktime(0,0,0,7,10,2021); //mon anniversaire le 10 juillet 2021
            $days = ($birthday - $todayDate)/86400; //86400 permettant de convertir les secondes en jours

            echo (int)$days; 

            echo "<br><br>";

            
        ?> 
    </body>
<html>
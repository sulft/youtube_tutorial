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

            echo "Exercice 3 : Generating random float numbers. <br><br>";

            $num1 = mt_rand(0, 1000 - 1) / 100;
            echo $num1;

            echo "<br><br>";

            echo "Exercice 4 : Lowercase check. <br><br>";

            $str = "Je suis un étudiant qui s'appelle Terry VILVER et qui adore jouer du piano. <br>
                    Je suis inscrit à l'université de Cergy Pontoise en M2 EEA 
                    ( Electronique, énergie Electrique et Automatique ).
            ";

            echo "SANS MODIFICATION : " . $str;
            echo "<br><br>";
            echo "EN MINUSCULE : " . strtolower($str);

            echo "<br><br>";
            
            echo "Exercice 5 : Search inside of a text <br><br>";

            $str1 = "Je suis un étudiant qui s'appelle Terry VILVER et qui adore jouer du piano. <br>
            Je suis inscrit à l'université de Cergy Pontoise en M2 EEA 
            ( Electronique, énergie Electrique et Automatique ).
            ";

            $punctuation = 0;

            function searchText($str1, &$punctuation) {
                $punctuation = mb_substr_count ($str1, ",");
                $punctuation = $punctuation + mb_substr_count ($str1, ".");
            }

            searchText($str1, $punctuation);

            echo "The text has " . $punctuation . " punctuations. ";

            echo "<br><br>";
            
            echo "Exercice 6 : Lowest and highest value <br><br>";
            
            $onlyNumbers = array(15,10,152,26,2,16,20,14,13);

            sort($onlyNumbers);

            echo "The lowest value is ";
            echo $onlyNumbers[0];
            echo " and the highest value is ";
            echo $onlyNumbers[count($onlyNumbers)-1];

            echo "<br><br>";
            
            echo "Exercice 8 : String repeat <br><br>";

            $str2 = "Je suis un étudiant qui s'appelle Terry VILVER <br>";

            function repeat($str2) {
                return str_repeat($str2,8);
            }

            $str2 = repeat($str2);

            echo $str2;
        ?> 
    </body>
<html>
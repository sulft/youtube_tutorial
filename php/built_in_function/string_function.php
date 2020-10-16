<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>string function</title>
    </head>

    <body>
        <h1>String function</h1>
        <?php
            $str = "Ceci est une phrase."; 
            echo strlen($str) . "<br>"; //Détermine le nombre de caractère d'une chaîne de caractère.
            echo str_word_count($str) . "<br>"; //Détermine le nombre de mot d'une chaîne de caractère.

            $email = "terryvilver@gmail.com";
            $caractère = "@";
            if(strpos($email,$caractère)) { //Détermine si un caractère se situe dans un string
                echo "$caractère est présent dans $email. <br>";
            }
            else {
                echo "$caractère n'est pas présent dans $email. <br>";
            }

            echo ucwords($str) . "<br>"; //Ajoute une majuscule à chaque mot de mon string
            echo strtoupper($str) . "<br>"; //Tout le string est écrit en majuscule
            echo strtolower($str) . "<br>"; //Tout le string est écrit en minuscule
        ?> 
    </body>
<html>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>array function</title>
    </head>

    <body>
        <h1>Array function</h1>
        <?php
            $prenoms = array("Terry" => "vilver ","John" => "desp");
            $plusDePrenom = array("Elie" => "ponio","Harry" => "delafe");
            $prenoms = array_merge($prenoms,$plusDePrenom); //fusionne les éléments d'un taleau dans un autre tableau

            foreach($prenoms as $prenom => $nom) {
                echo "il s'appelle $prenom et $nom. <br>";   
            }
            print_r(array_keys($prenoms)); //affiche uniquement les prénoms
            print_r(array_values($prenoms)); //affiche uniquement les noms

            $voitures = array("audi","peugeot","bmw");
            array_push($voitures, "clio"); //ajoute un élement au tableau

            echo "<br>";

            foreach($voitures as $voiture) {
                echo $voiture . ", ";
            }

            echo "<br>";
            
            echo array_search("clio",$voitures) ; //indique l'indice où est situé l'élément d'un tableau
            
            echo "<br>";
            
            echo count($voitures); // indique le nombre d'élément dans le tableau.
        ?> 
    </body>
<html>
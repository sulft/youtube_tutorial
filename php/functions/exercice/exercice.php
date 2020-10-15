<?php 
    require 'functions.php'
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice</title>
    </head>

    <body>
        <?php 
            echo "Exercice 1 : Vat calculator <br><br>";

            $price = 12;
            const VAT = 0.1;

            echo "Price is : $price$ <br>";
            echo "Vat is : " . VAT ."<br>";
            echo "Total price is : " . calculate_vat($price, VAT) ."$<br>";
        ?>

        <?php 
            echo "<br><br>Exercice 2 : Leap year <br><br>";

            $year = 2001;
            if(isLeapYear($year)) {
                echo $year . " is a leap year.<br>";
            }
            else {
                echo $year . " is not a leap year.<br>";
            }
        ?>

        <?php 
            echo "<br><br>Exercice 3 : Calculator <br><br>";

            $num1 = 15;
            $num2 = 20;

        ?>
    </body>
</html>


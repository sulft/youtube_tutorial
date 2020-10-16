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

            echo "Addition of $num1 and $num2 is " . addNumbers($num1 , $num2) . "<br>";
            echo "Sustraction of $num1 and $num2 is " . substractNumbers($num1 , $num2) . "<br>";
            echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1 , $num2) . "<br>";
            echo "Division of $num1 and $num2 is " . divideNumbers($num1 , $num2) . "<br>";
        ?>

        <?php 
            echo "<br><br>Exercice 4 : Swapping numbers <br><br>";

            $num1 = 2;
            $num2 = 8;

            echo "Before swapping num1= $num1, num2= $num2.<br>";
            swapNumbers($num1, $num2);
            echo "After swapping num1= $num1, num2= $num2.<br>"
        ?>

        <?php 
            echo "<br><br>Exercice 5 : Even or odd <br><br>";

            $num1 = 3;

            evenOrNot($num1);
        ?>
    </body>
</html>


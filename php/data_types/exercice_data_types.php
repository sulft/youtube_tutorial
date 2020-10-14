<!doctype html>

<html>
    <head>
        <meta charset = "UTF-8">
        <title>Exercice</title>
    </head>

    <body>
        <?php 

        //Exercice 1 : Personal information
        $x = 2;
        $y = 3;
        $z = ($x + $y) * 5;
        echo "Exercice 1 : Personal information <br>";
        echo "Le total est $z.";
        
        echo "<br><br>";

        //Exercice 2 : Value added tax
        $price = 15;
        $vat = $price * (0.05);
        $totalPrice = $price + $vat;

        echo "Exercice 2 : Value added tax <br>";
        echo "Price : $price <br>";
        echo "Vat : $vat <br>";
        echo "Total price : $totalPrice";

        echo "<br><br>";

        //Exercice 3 : Average
        $x = 12.7;
        $y = 12.2;
        $z = 12.3;
        $average = ($x + $y + $z)/3;
        $average = number_format($average, 2 , "," , " " );

        echo "Exercice 3 : Average <br>";
        echo "The average is $average";

        echo "<br><br>";

        //Exercice 4 : Countries and capitals
        //pays avec leur capital
        $pc = array(
            "Algérie" => "Alger", 
            "Allemangne" => "Berlin", 
            "Australie" => "Camberra", 
            "Belgique" => "Bruxelle", 
            "Brésil" => "Brasilia", 
            "Chine" => "Pékin"
        );

        echo "Exercice 4 : Countries and capitals<br>";
        foreach($pc as $pays => $capitale) {
            echo "The capital of $pays is $capitale. <br>";
        }

        echo "<br><br>";

        //Exercice 5 : Centimeters to inches
        $cm = 25;
        $cmToInch = $cm /2.54;
        $cmToInch = number_format($cmToInch, 2, ",", " ");
        echo "Exercice 5 : Centimeters to inches<br>";
        echo "$cm centimeters is " . $cmToInch . " inches";
        echo "<br><br>";

        //Exercice 6 : Expenses
        $expenses = array(40,30,72,150,900);
        $totalAmount = 0;
        $amountOfExpenses = 0;
        foreach($expenses as $expense) {
            $totalAmount = $expense + $totalAmount;
            $amountOfExpenses++;
        }  
        
        echo "Exercice 6 : Expenses<br>";
        echo "my biggest " . $amountOfExpenses . 
        " expenses were " . $totalAmount . "$.";

        echo "<br><br>";

        //Exercice 7 : weather
        $weather = array(
            "rain",
            "sunshine",
            "clouds",
            "hail",
            "sleet",
            "snow",
            "wind"
        );

        echo "we've seen all kind of weather this month.
        At the beginning of the month, we had " . $weather[5] . " and " .
        $weather[6] . ".<br> Then came " . $weather[1] . " with a few "
        . $weather[2] . " and some " . $weather[0] . ". At least we 
        didn't get any " . $weather[3] . " or " . $weather[4] ."."
        ?>
        
    </body>
</html>
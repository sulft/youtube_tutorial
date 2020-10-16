<?php 
    //Functions for EXERCICE 1
    function calculate_vat($price, $vat) {
        $calculated_price = ( $price * $vat ) + $price;
        return $calculated_price;
    }

    //Functions for EXERCICE 2
    function isLeapYear($year) {
        if(($year%4)==0) {
            if(($year/100)) {
                if(($year/400)) {
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    //Functions for EXERCICE 3
    function addNumbers($num1 , $num2) {
        return $num1 + $num2;
    }

    function substractNumbers($num1 , $num2) {
        return $num1 - $num2;
    }

    function multiplyNumbers($num1 , $num2) {
        return $num1 * $num2;
    }

    function divideNumbers($num1 , $num2) {
        return $num1 / $num2;
    }

    //Functions for EXERCICE 4
    function swapNumbers(&$num1, &$num2) {
        $temporary = $num1;
        $num1 = $num2;
        $num2 = $temporary;
    }

    //Functions for EXERCICE 5 
    function evenOrNot($num1) {
        if( ($num1 % 2) == 0) {
            echo $num1 . " is even.<br>";
        }
        else {
            echo $num1 . " is odd.<br>";
        }
    }
?>
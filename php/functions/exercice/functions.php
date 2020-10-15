<?php 
    //for EXERCICE 1
    function calculate_vat($price, $vat) {
        $calculated_price = ( $price * $vat ) + $price;
        return $calculated_price;
    }

    //for EXERCICE 2
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

        //for EXERCICE 3
        
    }
?>
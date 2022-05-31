<?php
class Reverse
{
    static function findReverce()
    {
        $number = readline("Enter the number: ");
        $sum = 0;
        if (is_numeric($number)) {
            while ($number > 1) {
                $lastDigit = $number % 10;
                $sum = ($sum * 10) + $lastDigit;
                $number = $number / 10;
            }
            echo $sum;
        }
        else {
            echo "\nInvalid input";
        }
    }
}
Reverse ::findReverce();
?>
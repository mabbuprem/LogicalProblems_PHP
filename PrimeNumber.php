<?php
class prime
{
    static function PrimeNumber()
    {
        $num = readline(" Enter a number to check prime or not");
        $count = 0; 
        if (is_numeric($num)) {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $count++;
                    break;
                }
            }
            if ($count = 2) {
                echo " the number is a prime number";
            }else {
                echo "Not a prime number";
            }
        }else {
            echo "Invalid input";
        }
    }
}
prime ::PrimeNumber()
?>
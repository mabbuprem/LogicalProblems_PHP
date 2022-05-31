<?php
class perfectNo
{
    static function perfectNumber()
    {
        $number = readline("Enter a number to checked perfect: ");
        $sum = 0;
        if (is_numeric($number)) {
            for ($i = 1; $i < $number; $i++) {
                if ($number % $i == 0) {
                    $sum = $sum + $i;
                }
            }
            if ($sum ==$number) {
                echo " the number is a perfect number";
            } else{
                echo "Not a perfect number";
            }
        } else{
            echo "Invalid input";
        }

    }
}
perfectNo ::perfectNumber();
?>
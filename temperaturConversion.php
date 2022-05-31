<?php
class TemperaturConversion
{
    static function temperaturConversion()
    {
        $choice = readline("Enter your choice:" . "\n" . "1. celcius to farenheiht" . "\n" . "2.Farenheiht to celcius");
        switch ($choice) {
            case 1:
            $c = readline("Enter Celcius value:");
            if (is_numeric($c)) {
                $f = ($c * (9/5)) + 32;
                echo "Fehrenheiht value;" . $f;
            }else {
                echo " Not a valid input";
            }
            break;
        case 2:
            $f = readline("Enter the Fahrenheiht value:");
            if (is_numeric($f)) {
                $c = ($f -32) * 5 / 9;
                echo "Celcius value:" . $c;
                break;

            }else {
                echo "Not a valid input";
            }
            default:
            echo " Choose valid operation";

        }
    }

}
TemperaturConversion ::temperaturConversion();
?>
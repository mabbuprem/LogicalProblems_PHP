<?php
/* creating function to calculate monthly payment*/
class MonthlyPayment{
    static function tocalculate( $principle, $year,$rate){
        $r = $rate/(12*100);
        $n = 12* $year;
        //$pay = 0;
        $pay = ($principle*$r)/(1-(1+$r)**(-$n));
        echo round($pay,3);
    }
}
//taking principle, year,rate input from command line
$principle=$argv[1];
$year=$argv[2];
$rate=$argv[3];
if(is_numeric($argv[1])&&is_numeric($argv[2])&&is_numeric($argv[3]))
{
    MonthlyPayment::tocalculate($principle,$year,$rate);
}
else{
    echo "Enter valid input";
}

?>
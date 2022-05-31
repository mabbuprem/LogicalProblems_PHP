<?php
class stopwatch
{
    static function findtime()
    {
        $st = readline("Enter 1 to start the stopwatch: ");
        if ($st == 1) {
            $startTime = time();
            $et = readline("Enter 2 to end the stopwatch: ");
            if ($et == 2) {
                $endTime = time();
            }
            $timeElapsed = ($endTime - $startTime);
            echo "Time elapsed is $timeElapsed";
        }
    }
}
stopwatch ::findTime();

?>
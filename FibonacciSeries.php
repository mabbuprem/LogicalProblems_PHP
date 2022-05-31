<?php
$n = readline("Enter a limit: ");
if(is_numeric($n)) {
    $f = 1;
    $s = 1;
    echo "$f $s";
    for($i = 3; $i <= $n; $i++) {
        $t = $f + $s;
        echo " $t";
        $f = $s;
        $s = $t;
    }
}
else {
    echo " Not a valid input";
}
?>
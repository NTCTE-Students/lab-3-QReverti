<?php

function average(array $numbers): float {
    $count = count($numbers);
    if ($count == 0) return 0;
    $sum = array_sum($numbers);
    return $sum / $count;
}

?>


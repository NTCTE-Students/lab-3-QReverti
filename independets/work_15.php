<?php

function findSecondLargest(array $numbers): ?int {
    if (count($numbers) < 2) return null;
    rsort($numbers);
    if ($numbers[0] == $numbers[1] && count(array_unique($numbers)) ==1) return null;

    return $numbers[1];
}

?>

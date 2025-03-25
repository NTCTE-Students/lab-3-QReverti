<?php

function findMax(array $numbers): ?int {
    if (empty($numbers)) return null;
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) $max = $number;
    }
    return $max;
}



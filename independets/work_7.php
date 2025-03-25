<?php

function stringLength(string $str): int {
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }
    return $i;
}

?>


<?php

function countWords(string $str): int {
    $str = trim($str);
    return empty($str) ? 0 : count(explode(" ", $str));
}

?>


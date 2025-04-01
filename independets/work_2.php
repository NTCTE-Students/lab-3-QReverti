<?php


function isPalindrome(string $str): bool {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    return $str === strrev($str);
}

?>


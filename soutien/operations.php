<?php

function add(int $nb1, int $nb2) : int {
    $result = intval($nb1) + intval($nb2);
    return $result;
}

function substract(int $nb1, int $nb2) : int {
    $result = $nb1 - $nb2;
    return $result;
}

function multiply(int $nb1, int $nb2) : int {
    $result = $nb1 * $nb2;
    return $result;
}

function divide(int $nb1, int $nb2) : ? int {
    if ($nb2 !== 0) {
        $result = $nb1 / $nb2;
        return $result;
    }
    else {
        echo("On divise pas par 0 ! ");
    }
}

function modulo(int $nb1, int $nb2) : ? int {
    if ($nb2 !== 0) {
        $result = $nb1 % $nb2;
        return $result;
    }
    else {
        echo("On divise pas par 0 ! ");
    }
}

function power(int $nb1, int $nb2) : int {
    $result = 0;
    for ($i = 1; $i < $nb2; $i++) {
        $result*=$nb1;
    }
    return $result;
}

?>
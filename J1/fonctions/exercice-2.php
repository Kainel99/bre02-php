<?php

function average (array $tab) : float {
    $sum = array_sum($tab);
    $count = count($tab);
    return $sum / $count;
}

echo average([12, 15, 18, 9]). "<br>";
echo average([12, 15, 18, 11, 14]). "<br>";
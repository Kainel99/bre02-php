<?php

function isOdd (int $nb) : bool {
    if ($nb % 2 === 0) {
        return false;
    };
    
    return true;
}

echo isOdd(12) . "<br>";
echo isOdd(29) . "<br>";
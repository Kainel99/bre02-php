<?php

function concat (string $mot1, string $mot2) : string
{
    return $mot1 . $mot2;    
}

echo concat("Hello ", "World !<br>");
echo concat("À la ", "claire fontaine<br>");
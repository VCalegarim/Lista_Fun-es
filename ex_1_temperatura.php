<?php

function graus ($f)
{
    $c = ($f-32)*(5/9);

return $c;  

}

print "Temperatura: ";
$f = (float) fgets (STDIN);

$c = graus ($f);

print "\n $c \n ";


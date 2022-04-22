<?php

require "./terminal-colors.php";

// CRÉÉ UNE VARIABLE
$maVariable01 = 10;

// CRÉÉ UNE VARIABLE
$maVariable02 = 10.5;

// CRÉÉ UNE VARIABLE
$maVariable03 = true;

// CRÉÉ UNE VARIABLE
$maVariable04 = "mon texte";

//gettype est l'équivalent de typeof en JavaScript
echo redBG(gettype($maVariable01)).EOL;
echo gettype($maVariable02).EOL;
echo gettype($maVariable03).EOL;
echo gettype($maVariable04).EOL;

$a = 10;
$b = 5;

echo $a+$b.EOL;
echo $a-$b.EOL;
echo $a*$b.EOL;
echo $a/$b.EOL;
echo $a%$b.EOL;
echo $a**$b.EOL;

//GÉNÉRATEUR DE NOMBRES ALÉATOIRES
echo 'voici un nb aléatoire entre 1 et 10 :';
echo rand(1, 10);

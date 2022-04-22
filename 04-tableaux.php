<?php

require_once './terminal-colors.php';

//TABLEAU (NORMAL)
$week = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

//TABLEAU (RACCOURCI)
$week = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

// TABLEAU (RACCOURCI PROPRE)
$week = [
    'lundi', 
    'mardi', 
    'mercredi', 
    'jeudi', 
    'vendredi', 
    'samedi', 
    'dimanche'];

//var_dump($week);

echo 'Taille du tableau : ' .count($week) . EOL;

$dernierJour = array_pop($week);


echo 'Dernier jour : ' . $dernierJour . EOL;

echo 'Taille du tableau : ' .count($week) . EOL;
print_r($week);
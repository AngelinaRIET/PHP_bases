<?php

require './terminal-colors.php';

// AGE DU CLIENT
$age = 19;

// CONDITION POUR RENTRER EN BOITE
if ($age >= 18) {
    echo 'Vous pouvez entrer'.EOL;
} else {
    echo 'Toi tu restes dehors'.EOL;
}

// LE JOUR ACTUEL
$jour = 'jeudi';

if($jour == 'lundi' || $jour == 'mardi' || $jour == 'mercredi')
{
    echo redBG('pfff ! Ça n\'est pas encore le weekend');
} 
else if ($jour == 'jeudi' || $jour == 'vendredi' )
{
    echo yellowBG('Ahh ! C\'est presque le weekend');
}
else 
{
    echo greenBG('yeaaaaaahhhh c\'est le weekend !');
}

// AVEC SWITCH

switch($jour){
    case 'lundi'    :
    case 'mardi'    :
    case 'mercredi' :
        echo redBG('pfff ! Ça n\'est pas encore le weekend').EOL;
        break;
    case 'jeudi'    :
    case 'vendredi' :
        echo yellowBG('Ahh ! C\'est presque le weekend').EOL;
        break;
    default:
        echo  greenBG('yeaaaaaahhhh c\'est le weekend !').EOL;
    break;

} // <= break;


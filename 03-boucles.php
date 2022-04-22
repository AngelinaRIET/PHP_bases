<?php

require './terminal-colors.php';
// readline est l'équivalent du Prompt

// // POSE UNE QUESTION A L'UTILISATEUR
$nbMax = (int) readline('Jusqu\'à combien dois-je compter ?');
echo gettype($nbMax);

// // COMPTE JUSQU'AU MAX
for ($i=0 ; $i <= $nbMax ; $i++){
    echo $i . '';
}

// BOUCLE TANT QUE
$reponse = '';
while ($reponse !== 'JS'){
    $reponse = readline('C\'est qui le meilleur ?');
}

// BOUCLE FAIRE...TANT QUE

do {
    $reponse = readline('C\'est qui le meilleur ?');
}
while ($reponse !== 'JS');


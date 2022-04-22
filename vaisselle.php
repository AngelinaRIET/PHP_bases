<?php

require_once './terminal-colors.php';

$pileAssiettes = [
    '1ère assiette',
    '2ème assiette',
    '3ème assiette',
    '4ème assiette',
    '5ème assiette',
    '6ème assiette',
    '7ème assiette'
];

// print_r($pileAssiettes);
// echo('Il reste '.count($pileAssiettes). 'assiettes à laver');


while (count($pileAssiettes) > 0)
{
      // PRENDRE L'ASSIETTE DU DESSUS
    $assiette = array_pop($pileAssiettes);
   
    echo 'Je lave la' .yellow($assiette) . EOL;
    
    
    echo 'Il m\'en reste' .red(count($pileAssiettes)) . 'à laver'.EOL;
}

echo greenBG('Ouf j\'ai tout fini').EOL;

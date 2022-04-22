<?php

$heros = [
    'c\'est un homme qui',
    'C\'est une femme qui',
    'C\'est un conducteur de taxi qui',
    'C\'est un yamakasi qui',
    'C\'est un garde du corps qui'
];

$victimes = [
    'sauve une femme',
    'protège un homme',
    'protège une femme blonde',
    'sauve un enfant',
];

$mechants = [
    'contre des ninjas',
    'contre des aliens',
    'contre la mafia',
    'contre les yakusas'
];

$randomHeros = rand(0, count($heros)-1);
$randomVictime = rand(0, count($victimes)-1);
$randomMechants = rand(0, count($mechants)-1);

$leHeros = $heros[$randomHeros];
$laVictime = $victimes[$randomVictime];
$lesMechant = $mechants[$randomMechants];

?>

<html>
    <head>
        <title>Générateur de scénario de Luc Besson</title>
    </head>
    <body>
        <header>
            <h1>Générateur de scénario de Luc Besson</h1>
        </header>
        <main>
            <h2>
                <?=$leHeros?>  <?=$laVictime?>  <?=$lesMechant?>
            </h2>
        </main>
    </body>
</html>

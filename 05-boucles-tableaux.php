<?php

$apprenants = [
    'April',
    'Anil',
    'Anibal',
    'Annette',
    'Aurore',
    'Gauthier',
    'Didier',
    'Hélène',
    'Sokona',
    'Irina',
    'Sean',
    'Thomas',
    'Will',
    'Rachel',
    'Morgane',
    'Milton'
];

$apprenants[] = 'Angélina';
// pour ajouter l'élément Angélina dans un tableau - pour empiler un élément à la fois - version raccourci de array_push()

?>

<html>
    <head>
        <title>La liste des apprenants</title>
    </head>
    <body>
        <header>
            <h1>La liste des apprenants</h1>
        </header>
        <main>
            <ul>
                <?php foreach($apprenants as $unApprenant) : ?>
                    <li><?=$unApprenant?></li>
                <?php endforeach ?>
            </ul>
        </main>
    </body>
</html>

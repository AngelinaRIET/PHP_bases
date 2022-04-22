<?php

// Tableau indexé (NORMAL)
    // $personne = [
    //     'Jane', // <= 0
    //     'Doe',  // <= 1
    //     '1980', // <= 2
    //     'N.Y'   // <= 3
    // ];

    // $personne = [
    //     4 =>    'Jane', 
    //     8 =>    'Doe',
    //     9 =>    1980, 
    //     27 =>   'N.Y'
    // ];

    $personne = [
        'firstName' =>   'Jane', 
        'Name'      =>   'Doe',
        'year'      =>   1980, 
        "city"      =>   'N.Y'
    ];

    $personne2 = [
        'firstName' =>   'Kiki', 
        'Name'      =>   'Yamada',
        'year'      =>   2011, 
        "city"      =>   'Yokohama'
    ];

    // echo $personne['firstName'].
    // ' '.$personne['Name'].
    // ' née en '.$personne['year'].
    // ', habite à '.$personne['city'].'<br>';

    // echo $personne2['firstName'].
    // ' '.$personne2['Name'].
    // ' née en '.$personne2['year'].
    // ', habite à '.$personne2['city'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style='border: 3px solid blue'>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Prenom
            </th>
            <th>
                Né(e) le
            </th>
            <th>
                Ville
            </th>
        </tr>
        <tr>
            <td><?= $personne['firstName'] ?></td>
            <td><?= $personne['Name'] ?></td>
            <td><?= $personne['year'] ?></td>
            <td><?= $personne['city'] ?></td>
        </tr>
        <tr>
            <td><?= $personne2['firstName'] ?></td>
            <td><?= $personne2['Name'] ?></td>
            <td><?= $personne2['year'] ?></td>
            <td><?= $personne2['city'] ?></td>
        </tr>
    </table>
</body>
</html>
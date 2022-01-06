<?php

$tableau = [1,2,3,4,5];
$tableauDeCaractere = [ 'a', 'b', 'c'];

print_r($tableau);

echo '<pre>';
print_r($tableau);
echo '</pre>';

$tableau[] = 6;

echo '<pre>';
print_r($tableau);
echo '</pre>';

$tableau2DImension = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

echo $tableau2DImension[1][2];

//tableau associatifs (ecrit en snake_case)

$professeur = [
    'prenom' => 'arthur',
    'age' => 35,
    'permis'=> true
];

$phrase = '';
$phrase .= $professeur['prenom'];

echo '<p>'. $phrase. '</p>';
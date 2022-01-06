<?php

$jAiLePermisDeConduire = true;
$jAilePermisPoidLourd = false;

$age =16;
define('AGE_REQUIS_BOITE_DE_NUIT', 18);

if ($age >= AGE_REQUIS_BOITE_DE_NUIT){
    echo 'je peux rentrer';
}else{
    echo 'non';
};

$jeRentreEnBoite = ($age >= AGE_REQUIS_BOITE_DE_NUIT);

if ($jeRentreEnBoite){
    echo '<p> je rentre</p>';
}else{
    '<p> je ne rentre pas </p>';
};

// || = et
// && = ou
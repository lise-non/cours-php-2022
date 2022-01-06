<?php

$mot = 'Bonjour';
$prenomDuProfesseur = 'Arthur';

echo $mot;
echo '<br />';
$mot = 'Au revoir';
echo $mot;

$phrase = $mot .' '. $prenomDuProfesseur;

echo '<br />';
echo $phrase;

$phrase = $mot;
$phrase = $phrase . 'M';
$phrase = $phrase . $prenomDuProfesseur;

echo '<br />';
echo $phrase;

$phrase = $mot;
$phrase .= 'M.';
$phrase .= $prenomDuProfesseur;


echo '<br />';
echo $phrase;

$phrase = '';
$phrase .= $mot;
$phrase .= 'M.';
$phrase .= $prenomDuProfesseur;


echo '<br />';
echo $phrase;
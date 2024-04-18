<?php
require_once __DIR__ . '/models/Production.php';

$american_sniper = new Production();

$american_sniper->titolo = 'American Sniper';
$american_sniper->lingua = 'Inglese';
$american_sniper->voto = '8/10';

$matrix = new Production();
$the_office = new Production();


var_dump($american_sniper);



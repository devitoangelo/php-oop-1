<?php
require_once __DIR__ . '/models/Production.php';

$american_sniper = new Production('American Sniper', 'Inglese','8/10');

// $american_sniper->titolo = 'American Sniper';
// $american_sniper->lingua = 'Inglese';
// $american_sniper->voto = '8/10';

$matrix = new Production('The Matrix', 'Inglese', '7/10');

// $matrix->titolo = 'The Matrix';
// $matrix->lingua = 'Inglese';
// $american_sniper->voto = '7/10';

$avatar = new Production('Avatar', 'Inglese', '8/10');


var_dump($american_sniper, $matrix, $avatar);



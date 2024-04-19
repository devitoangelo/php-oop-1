<?php

class Movie

{

    public $profitti;
    public $durata;

    public function __construct($profitti, $durata)
    {

        $this->profitti = $profitti;
        $this->durata = $durata;


    }
}


$movie = new Movie('ciao', 'italiano',);
var_dump($movie);

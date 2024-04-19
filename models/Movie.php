<?php

class Movie  extends Production

{
    public $profitti;
    public $durata;

    public function __construct($titolo, $lingua, $voto, $profitti, $durata )
    {

        parent::__construct($titolo, $lingua, $voto,);
        $this->profitti = $profitti;
        $this->durata = $durata;

    }
}



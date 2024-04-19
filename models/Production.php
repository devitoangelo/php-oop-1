<?php

class Production
{
    // public $titolo;
    // public $lingua;
    // public $voto;

    public function __construct(public string $titolo, public string $lingua, public string $voto)
    {
    }

    public function getVote()
    {
        if ($this->voto > 6) {
            return "Voto ok ";
        } else {
            return "voto sotto la media";
        }
    }


    //su get serve il return su post non si mette il returni ma solo this nelle funzioni 
}


class Movie 
{

    public $profitti;
    public $durata;

    public function __construct($profitti, $durata,){

        $this->profitti = $profitti;
        $this->durata = $durata;
    }
}


$movie = new Movie(20, '50 minuti');


var_dump($movie);

class TVSerie 
{

    public $numerostagioni;


    public function __construct($numerostagioni){

        $this->numerostagioni = $numerostagioni;


    }
}


$movie = new Movie(20, '1 minuti');


// var_dump($movie);


$tvStagioni = new TVSerie(3,);

var_dump($tvStagioni->numerostagioni);

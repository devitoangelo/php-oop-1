<?php


class Production
{
    // public $titolo;
    // public $lingua;
    // public $voto;
 

    public function __construct(public string $titolo, public string $lingua, public string $voto,)
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


  
}


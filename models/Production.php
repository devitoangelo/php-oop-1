<?php


class Production
{
    public $titolo;
    public $lingua;
    public $voto;

  
    public function __construct($titolo,$lingua,$voto)
    {

        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
        
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




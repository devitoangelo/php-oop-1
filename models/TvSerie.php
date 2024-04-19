<?php

class TVSerie extends Production
{

    public $numerostagioni;


    public function __construct( $titolo, $lingua, $voto, $numerostagioni,)
    {
        parent::__construct( $titolo, $lingua, $voto);
        $this->numerostagioni = $numerostagioni;
    }
}



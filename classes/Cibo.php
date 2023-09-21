<?php

class Cibo extends Prodotti{
    protected $peso;
    protected $type;

    function __construct($_peso, $_type)
    {
        $this->peso = $_peso;
        $this->type = $_type;
    }

}
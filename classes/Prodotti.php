<?php

require_once __DIR__ . '/Categoria.php';


class Prodotti{
    protected $price;
    protected $name;
    protected $quantity;
    protected $category;

    function __construct($_name, $_price, Categoria $_category )
    {
        $this->$_name;
        $this->$_price;
        $this->$_category;
        
    }
    
}

?>
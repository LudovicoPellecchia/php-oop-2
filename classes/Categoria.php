<?php

class Categoria{
    protected $name;
    protected $icon;

    function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

}

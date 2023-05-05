<?php

require_once('./classes/Ennemi.php');

class Dragon extends Ennemi
{
    public function __construct()
    {
        $this->pol = 16;
        $this->name = "Dragon";
        $this->power = 18;
        $this->constitution = 19;
        $this->speed = 8;
        $this->xp = 35;
        $this->gold = 250;
    }

    public function fear()
    {

    }
}
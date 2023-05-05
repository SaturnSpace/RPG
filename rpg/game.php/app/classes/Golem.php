<?php

require_once('./classes/Ennemi.php');

class Golem extends Ennemi
{
    public function __construct()
    {
        $this->pol = 12;
        $this->name = "Golem";
        $this->power = 15;
        $this->constitution = 30;
        $this->speed = 3;
        $this->xp = 30;
        $this->gold = 200;
    }

    public function fear()
    {

    }
}
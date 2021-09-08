<?php
class pokemon
{
    public $name;
    public $energyType;
    public $attack;
    public $weakness;
    public $resistance;
    public $hitpoints;

    public function __construct($name, $energyType, $attack, $weakness, $resistance, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->hitpoints = $hitpoints;
    }
}
class EnergyType
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getEnergyType()
    {
        return $this->name;
    }
}

<?php
class pokemon
{
    static $pokePopulation;
    public $name;
    public $energyType;
    public $attack1;
    public $attack2;
    public $weakness;
    public $resistance;
    public $hitpoints;

    public function __construct($name, $energyType, $attack1, $attack2, $weakness, $resistance, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->attack1 = $attack1;
        $this->attack2 = $attack2;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->hitpoints = $hitpoints;
        $this::$pokePopulation++;
    }
    public function aanval($target, $attack)
    {
        if ($this->energyType->name == $target->weakness->EnergyType) {
            $aanval = $attack->damage * $target->weakness->multiplier;
            $hpLeft = $target->hitpoints - $aanval;
            $target->hitpoints = $hpLeft;
            echo "$this->name valt $target->name aan met $attack->name. Deze aanval deed $aanval damage." . "<br/>";
            if ($hpLeft <= 0) {
                echo "$target->name heeft 0 HP. $target->name is dood.";
                self::$pokePopulation--;
                echo "</br> </br>" . "Het aantal levende pokemons zijn: " . pokemon::getPopulation() .  "</br>";
                die;
            } else {
                echo "$target->name heeft $hpLeft HP over." . "<br/>";
            }
        } elseif ($this->energyType->name == $target->resistance->EnergyType) {
            $aanval = $attack->damage - $target->resistance->value;
            $hpLeft = $target->hitpoints - $aanval;
            $target->hitpoints = $hpLeft;
            echo "$this->name valt $target->name aan met $attack->name. Deze aanval deed $aanval damage." . "<br/>";
            if ($hpLeft <= 0) {
                echo "$target->name heeft 0 HP. $target->name is dood.";
                self::$pokePopulation--;
                echo "</br> </br>" . "Het aantal levende pokemons zijn: " . pokemon::getPopulation() .  "</br>";
                die;
            } else {
                echo "$target->name heeft $hpLeft HP over." . "<br/>";
            }
        } else {
            $hpLeft = $target->hitpoints - $attack->damage;
            $target->hitpoints = $hpLeft;
            echo "$this->name valt $target->name aan met $attack->name. Deze aanval deed $attack->damage damage." . "<br/>";
            if ($hpLeft <= 0) {
                echo "$target->name heeft 0 HP. $target->name is dood.";
                self::$pokePopulation--;
                echo "</br> </br>" . "Het aantal levende pokemons zijn: " . pokemon::getPopulation() .  "</br>";
                die;
            } else {
                echo "$target->name heeft $hpLeft HP over." . "<br/>";
            }
        }
    }

    public function prettyPrint($object)
    {
        echo "<pre>";
        var_dump($object);
        echo "</pre>";
    }

    public static function getPopulation()
    {
        return self::$pokePopulation;
    }
}

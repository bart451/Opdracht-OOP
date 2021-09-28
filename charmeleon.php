<?php
class charmeleon extends pokemon
{
	public function __construct($name)
	{
		$energyType = new EnergyType('Fire');
		$hitpoints = 60;
		$attack = new attack('Head Butt', 10);
		$attack = new attack('Flare', 30);
		$weakness = new weakness('Water', 2);
		$resistance = new resistance('Lightning', 10);
		parent::__construct($name, $energyType, $hitpoints, $attack, $weakness, $resistance);
	}
}
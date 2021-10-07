<?php
class charmeleon extends pokemon
{
	public function __construct($name)
	{
		$energyType = new EnergyType('Fire');
		$attack1 = new attack('Head Butt', 10);
		$attack2 = new attack('Flare', 30);
		$weakness = new weakness('Water', 2);
		$resistance = new resistance('Lightning', 10);
		$hitpoints = 60;
		parent::__construct($name, $energyType, $attack1, $attack2, $weakness, $resistance, $hitpoints);
	}
}

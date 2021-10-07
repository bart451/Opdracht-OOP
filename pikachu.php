<?php
class pikachu extends pokemon
{
	public function __construct($name)
	{
		$energyType = new EnergyType('Lightning');
		$attack1 = new attack('Pika Punch', 20);
		$attack2 = new attack('Electric Ring', 50);
		$weakness = new weakness('Fire', 1.5);
		$resistance = new resistance('Fighting', 20);
		$hitpoints = 60;
		parent::__construct($name, $energyType, $attack1, $attack2, $weakness, $resistance, $hitpoints);
	}
}

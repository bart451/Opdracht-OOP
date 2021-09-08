<?php
class pikachu extends pokemon
{
	public function __construct($name)
	{
		$energyType = new EnergyType('Lightning');
		$hitpoints = 60;
	}
}

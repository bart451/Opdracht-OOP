<?php class weakness
{
    public $EnergyType;
    public $multiplier;
    public function getWeaknessMultiplier()
    {
        return $this->multiplier;
    }
    public function getWeaknessType()
    {
        return $this->EnergyType;
    }
    public function __construct($EnergyType, $multiplier)
    {
        $this->EnergyType = $EnergyType;
        $this->multiplier = $multiplier;
    }
}

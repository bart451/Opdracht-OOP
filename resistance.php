<?php class resistance
{
    public $EnergyType;
    public $value;
    public function getResistanceType()
    {
        return $this->EnergyType;
    }
    public function getResistanceValue()
    {
        return $this->value;
    }
    public function __construct($EnergyType, $value)
    {
        $this->EnergyType = $EnergyType;
        $this->value = $value;
    }
}

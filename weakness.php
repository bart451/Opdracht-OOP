<?php class weakness{
    public $name;
    public $value;
    public function getWeaknessName(){
        return $this->name;
    }
    public function getWeaknessValue(){
        return $this->value;
    }
    public function __construct($name, $value){
        $this->name = $name;
        $this->value = $value;
    }
}
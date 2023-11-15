<?php
abstract class PropSystem{
    public $power;
    public $fuelType;
    protected $efficiency;
    function __construct(){
        $this->power = "";
        $this->fuelType = "";
    }
    abstract public function work();
}
?>
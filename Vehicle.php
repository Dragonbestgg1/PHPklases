<?php
abstract class Vehicle{
    public $brand;
    protected $milage = 0;
    public function __construct($brand){
        $this->brand = $brand;
        
    }
    abstract static function makeNoise();
}
?>
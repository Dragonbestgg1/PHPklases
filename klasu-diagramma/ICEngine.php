<?php
include_once "PropulsionSystem.php";
class ICE extends PropSystem{
    public $size;
    private $cylinderCount;
    function __construct(){
        $this->cylinderCount = 0;
        $this->size = 0;
    }
    function work(){
        echo "Brumm, Brumm";
    }
}
?>
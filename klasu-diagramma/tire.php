<?php
class Tire{
    public $pressure;
    public $size;
    function __construct($pressure, $size){
        echo " Tire has been added <br>";
        $this->pressure = $pressure;
        $this->size = $size;
    }
}
?>
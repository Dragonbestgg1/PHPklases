<?php
include_once "Vehicle.php";
class Train extends Vehicle{
    static function makeNoise(){
        echo " Choo Choo mf <br>";
    }
    public function getMilage(){
        return $this->milage;
    }
}
?>
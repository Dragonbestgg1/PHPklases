<?php
include "tire.php";
include "ICEngine.php";
include "ElectroMotor.php";
class Car{
    private $tires = [];
    private $propSystem = [];
    function __construct(public $color,
                         public $brand,
                         private $mileage,
                         private $releaseYear,
                         $tireSize,
                         $tirePressure,
                         $type
                         ){
        for ($i = 0; $i < 4; $i++){
            $this->tires[] = new Tire($tirePressure, $tireSize);
        }
        if($type === "Electric"){
            $this->propSystem[] = new Electro(780, "electricity", 0.9);
        }else if($type === "Hybrid"){
            $this->propSystem[] = new Electro(4, "electricicty", 0.9);
            $this->propSystem[] = new ICE(300, "gasoline", 0.9);
        }else{
            $this->propSystem[] = new ICE(300, "gasoine", 0.9);
        }
    }
    function makeNoise(){
        
    }
    function move(){

    }
}
?>
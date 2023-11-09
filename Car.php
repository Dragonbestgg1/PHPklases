<?php
class Car{
    public $brand;
    public function __construct($brand){
        $this->brand = $brand . "<br>";
    }


    public function __destruct(){
        echo $this->brand . " is dead <br>";
    }
    static function makeNoise(){
        echo "Beep beep <br>";
    }
}
?>
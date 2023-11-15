<?php
include "Tire.php";
include "ElectricMotor.php";
include "PropulsionSystem.php";
include "ICEngine.php";
class Car {
    private $tires = [];
    private $propulsionSystem;
    function __construct(public $color,
                        public $brand,
                        private $releaseYear,
                        private $mileage,
                        $tireSize,
                        $tirePressure,
                        $type){
        for ($i = 0; $i < 4; $i++){
            $this->tires[] = new Tire($tirePressure, $tireSize);
        }
        if ($type === "Electric"){
            $this->propulsionSystem[] = new ElectricMotor(780, "electricity", 0.9);
        } else if ($type === "Hybrid"){
            $this->propulsionSystem[] = new ElectricMotor(120, "electricity", 0.7);
            $this->propulsionSystem[] = new ICEngine(120, "gasoline", 0.7);
        } else{
            $this->propulsionSystem[] = new ICEngine(120, "gasoline", 0.7);

    }
    }
    function makeNoise(){

    }
    function move(){

    }
}

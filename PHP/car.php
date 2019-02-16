<?php
required_once("account.php");
class Car {
    public $id;
    public $license;
    public $driver;
    public $passanger;

    public function _construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar(){
        echo "License: $this->license Driver: ".$this->driver->name;
    }
}?> 
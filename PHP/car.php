<?php
include("account.php");
class Car extends account{
    $id;
    $license;
    $driver;
    $passanger;

    public function _construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function showInfo(){
        echo "License: " this->license;
    }
}?> 
<?php
require_once('car.php')
class UberPool extends Car{
    public $brand;
    public $model;

    public function _construct($license, $driver, $brand, $model){
        parent::_construct($license. $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

}
?>
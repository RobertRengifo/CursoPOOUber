<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");

$uberX = new UberX("ZPQ104", new Account("Andres Suarez", "AND456"),"Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberX("ZPQ566", new Account("Suarez", "ANF345"),"Renult", "Uva");
$uberPool->printDataCar();
?>
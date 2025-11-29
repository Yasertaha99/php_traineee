<?php

use App\oop\CAE\Microwive;

require __DIR__ . '/../vendor/autoload.php';

// use App\Oop\Test2;

// $info = new Test2('Yasser Taha', 27, 'Jaza Egypt');
// echo $info->printInfo();
$fdMicro= new Microwive(100,'IP50',35);
if($fdMicro->turnOn()){
    echo $fdMicro->getStatus();
    var_dump($fdMicro->deFreeze());
}

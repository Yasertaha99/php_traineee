<?php 
namespace App\oop\CAE;
 use App\oop\CAE\Car;

class BMW extends Car
{

    public function move(): int{
        return $this->speed;
    }
    public function turnOn(): bool{
        $this->turnOn = true;
        return true;
    }
    public function turnOff(): bool{
        $this->turnOn = false;
        return true ;
    }
    public function accelarate(int $speed): bool{
        $this->speed;
        return true;
    }
    public function park(): bool{
        return true;
    }
}
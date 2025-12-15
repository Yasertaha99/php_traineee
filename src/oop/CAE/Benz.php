<?php 
namespace App\oop\CAE;

class Benz extends Car{
        public function move(): int{
        return $this->speed*2;
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
        $this->speed*0.5 +3;
        return true;
    }
    public function park(): bool{
        return true;
    }
}
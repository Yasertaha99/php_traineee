<?php 
namespace App\oop\CAE;
class Order {
    private string $destantion;
    private string $start;
    private int $weight;
public function __construct(string $start,string $destantion, int $weight)
{
    $this->destantion=$destantion;
    $this->start=$start;
    $this->weight=$weight;
}

    public function devierdeOrder(Car $car){
        $car->turnOn();
        $car->move();
        $car->accelarate(120);
        $car->park();
        $car->turnOff(); 
        return "i am moving form {$this->start} to {$this->destantion} 
        to delavered pakage of {$this->weight} K.G "."<br> \n";
    }
}